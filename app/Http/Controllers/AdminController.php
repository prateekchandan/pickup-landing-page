<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Input;
use Hash;
use Mail;
use App\User;
use App\Driver;
use App\Journey;
use App\Group;
use App\ClickCount;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    // The API CLient
    protected $APIclient;
    protected $AppKey;
    
    public function __construct()
    {
        $this->APIclient=new Client([
            // Base URI is used with relative requests
            'base_uri' => env('API_SERVER','http://pickup.prateekchandan.me/api'),
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $this->AppKey = env('API_KEY','wrong_string');
    }



    public function home(){
        $numUsers = User::where('admin','!=','1')->count();
        $clicks = ClickCount::all();
        $totalClicks = ClickCount::sum('count');
        foreach ($clicks as $key => $value) {
            $clicks[$key]->percent=intval(($value->count*100)/$totalClicks);
        }
    	return view('admin.home',[
    		'menu'=>'home',
            'user'=>$numUsers,
            'totalClicks'=>$totalClicks,
            'clicks'=>$clicks
    	]);
    }

    public function showUser(){
    	$users = User::where('admin','!=','1')->
            where('phone','!=','')->orderBy('id', 'desc')->get();
    	return view('admin.user',[
    		'menu'=>'user',
    		'submenu'=>'user.all',
    		'users'=>$users,
    	]);
    }

    public function deleteUser(){
    	if(!Input::has('user'))
    	{
    		abort(400,"No userID");
    	}
    	$user = User::where('id','=',Input::get('user'))->delete();
    	return "success";
    }

    public function createDriverView(){
    	return view('admin.add_driver',[
    		'menu'=>'driver',
    		'submenu'=>'driver.add'
    	]);
    }

    public function createDriver(Request $request){
    	$temp_driver = new Driver();
    	$temp_driver->username = Input::get('username');
    	$temp_driver->password = Hash::make(Input::get('password'));
    	$temp_driver->driver_name = Input::get('driver_name');
    	$temp_driver->phone = Input::get('phone');
    	$temp_driver->car_model = Input::get('car_model');
    	$temp_driver->car_number = Input::get('car_number');
    	$temp_driver->license_details = Input::get('license_details');
    	$temp_driver->driver_address = Input::get('driver_address');
    	$temp_driver->save();
    	$request->session()->flash('message','Driver Successfully Added');
    	return redirect()->route('admin::driver.add');
    }

    public function allDriver(){
    	$drivers = Driver::all();
    	return view('admin.driver',[
    		'menu'=>'driver',
    		'submenu'=>'driver',
    		'drivers'=>$drivers,
    	]);
    }

    public function allDriverMap(){
        $drivers = Driver::all();
        $driver_markers = [];
        $driver_info = [];
        foreach ($drivers as $key => $driver) {
            $loc = explode(',',$driver->current_pos);
            array_push($driver_markers, [$driver->driver_name,floatval($loc[0]),floatval($loc[1]),($driver->phone_status=="dead"?0:1)]);
            $html = array('
                <div>
                    <h4>Name:'.$driver->driver_name.'</h4>
                    <div>Satus:<b>'.$driver->phone_status.'</b></div>
                    <div>Occupancy:<b>'.$driver->driver_status.'</b></div>
                </div>
            ');
            array_push($driver_info,$html);
        }
        return view('admin.driver_map',[
            'menu'=>'driver',
            'submenu'=>'driver_map',
            'drivers'=>$drivers,
            'markers'=>$driver_markers,
            'info'=>$driver_info
        ]);
    }

    public function allDriverMapUpdate(){
        $drivers = Driver::all();
        $driver_markers = [];
        $driver_info = [];
        foreach ($drivers as $key => $driver) {
            $loc = explode(',',$driver->current_pos);
            array_push($driver_markers, [$driver->driver_name,floatval($loc[0]),floatval($loc[1]),($driver->phone_status=="dead"?0:1)]);
            $html = array('
                <div>
                    <h4>Name:'.$driver->driver_name.'</h4>
                    <div>Satus:<b>'.$driver->phone_status.'</b></div>
                    <div>Occupancy:<b>'.$driver->driver_status.'</b></div>
                </div>
            ');
            array_push($driver_info,$html);
        }
        return array($driver_markers,$driver_info);
    }

    public function bookRide($id){
    	$user = User::find($id);
    	if(is_null($user)){
    		return "Wrong User Id";
    	}

    	$home = explode(',', $user->home_location);
    	if(sizeof($home)<2)
    		return redirect()->back();
    	$user->home_lat = $home[0];
    	$user->home_long = $home[1];
        date_default_timezone_set('Asia/Kolkata');

        $user->time = date("Y-m-d")." ".$user->leaving_office;
        $user->time_int = strtotime($user->time)*1000;
    	$office = explode(',', $user->office_location);
    	if(sizeof($office)<2)
    		return redirect()->back();
    	$user->office_lat = $office[0];
    	$user->office_long = $office[1];
    	return view('admin.book_ride',[
    		'user'=>$user
    	]);
    }

   

    private function sendPost($url,$data){
        $data['key']=$this->AppKey;
        $ret = $this->APIclient->post($url,[
            'form_params'=>$data
            ]);
        return $ret;
    }

    private function sendGet($url){
        return $this->APIclient->get($url);
    }

    public function api_get_best_match(){
        $add_journey = $this->sendPost('/add_journey',Input::all());
        $response = json_decode($add_journey->getBody());
        if($response->error!=0){
            abort(400);
        } 
        $best_match = json_decode($this->sendGet('/get_best_match/'.$response->journey_id.'?key='.$this->AppKey)->getBody());
        if($best_match->error!=0){
             abort(400);
        }
        $best_match=$best_match->best_match;
        $details = [];
        if(!isset($best_match->journey_ids))
        {
             $data['id']=$response->journey_id;
            $data['data']=$details;
            return json_encode($data);
        }
        $journey_ids = json_decode($best_match->journey_ids);
        foreach ($journey_ids as $key => $journey_id) {
            $journey=Journey::where('journey_id','=',$journey_id)->first();
            if(is_null($journey))
                continue;
            $data['start_text']=$journey->start_text;
            $data['end_text']=$journey->end_text;
            $user = User::find($journey->id);
            $data['name']=$user->first_name;
            $data['email']=$user->email;
            $data['phone']=$user->phone;
            array_push($details, $data);
        }
        $data['id']=$response->journey_id;
        $data['data']=$details;
        return json_encode($data);
    }

    public function confirm($journey_id){
        $response = json_decode($this->sendGet('/confirm/'.$journey_id.'?key='.$this->AppKey)->getBody());
        if($response->error!=0){
            abort(400);
        }
        return "Journey Successfully confirmed";
    }


    private function get_group_data($status){
        $groups = Group::where('event_status','=',$status)->orderBy('start_time',($status=="completed"?'desc':'asc'))->get();
        foreach ($groups as $key => $group) {
            $journeys = array();
            foreach (json_decode($group->journey_ids) as $key1 => $jid) {
                $journey = Journey::where('journey_id','=',$jid)->first();
                if(is_null($journey))
                    continue;
                $journey->user=User::find($journey->id);
                array_push($journeys, $journey);
            }
            $group->journeys = $journeys;
            if(!is_null($group->driver_id))
                $group->driver = Driver::where('driver_id','=',$group->driver_id)->first();
            $groups[$key]=$group;
        }
        return $groups;
    }

    public function new_groups(){
        $group_data=$this->get_group_data("confirmed");
        return view('admin.show_group',[
            'menu'=>'group',
            'submenu'=>'group.new',
            'groups'=>$group_data
        ]);
    }
    public function active_groups(){
        $group_data=$this->get_group_data("started");
        return view('admin.show_group',[
            'menu'=>'group',
            'submenu'=>'group.active',
            'groups'=>$group_data
        ]);
        
    }
    public function finished_groups(){
        $group_data=$this->get_group_data("completed");
        return view('admin.show_group',[
            'menu'=>'group',
            'submenu'=>'group.finished',
            'groups'=>$group_data
        ]);
    }

    /**
    *   Send Email
    */
    public function view_send_email(){
        return view('admin.sendemail',[
            'menu'=>'email'
        ]);
    }

    public function send_email(){
       $email = Input::get('email');
       $name = Input::get('name');
       $subject = Input::get('subject');
       $company = Input::get('company');
       $date = Input::get('date');

       if(env('APP_ENV', 'local')!="local"){
             Mail::send('aemail', array('company'=>$company,'date'=>$date),   function($message) use ($email,$name,$subject){
                $message->to($email,$name)->
                replyTo("support@getpickup.in", "Team Pickup")->
                subject($subject);
            });
        }
        return redirect()->back()->with('message', "Email successfully sent");;
    }

}
