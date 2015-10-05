<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\ClickCount;
use Socialize;
use Auth;
use Session;
class UserController extends Controller
{
  public function addUser(Request $request)
  {
    $phone = $request->input('phone');
    if(is_null($phone) || !preg_match("/^[7-9][0-9]{9}$/", $phone)){
        return redirect()->back()->with('error', 'Please Enter a valid 10 digit phone number');
    }
    $u = User::where('phone','=',$request->input('phone'))->first();
    $message = "You are already registered";
    if(is_null($u)){
        $u = new User();    
        $u->company = "";
        $u->second_name="";
        $u->first_name = "";
        $u->gender ="";
        $u->age = 0;
        $u->fbid ="";
        $u->device_id =uniqid();  
        $message = 'You are successfully registered';
        $u->email = $request->input('phone');
        $u->platform = $request->input('platform');
    }
    
    $u->phone = $request->input('phone');

    $u->save();
    

    session(['registered'=>'1','phone'=>$u->phone]);

    if(Session::has('clickval')){
        $click = ClickCount::find(Session::pull('clickval',0));
        if(!is_null($click))
            $click->register();

    }
    return redirect()->back()->with('msg', $message);
  }

  /*
    * LOGIN show
  */
  public function login_view(){
    return view('admin.login');
  }

  public function fblogin(){
        return Socialize::with('facebook')->redirect();
  }

  public function fblogin_callback(Request $request){
    $provider= Socialize::with('facebook');
    if (!$request->has('code'))
    {   
        $request->session()->flash('msg','Facebook Authetication Failed');
        return redirect()->route('login');
    }
    $gruser=$provider->user();
    
    if(is_null($gruser)){
        $request->session()->flash('msg','Facebook Authetication Failed');
        return redirect()->route('login');
    }
    if(is_null($gruser->getEmail())){
        $email=$gruser->getId().'@facebook.com';
    }
    else{
        $email = $gruser->getEmail();        
    }
    $fbid = $gruser->getId();
    $name = $gruser->getName();
    $gender = $gruser->user['gender'];

    $user = User::where('email','=',$email)
                    ->orWhere('fbid','=',$fbid)
                    ->first();
    if(is_null($user)){
        $u = new User();      
        $u->email = $email;
        $u->first_name = $name;
        $u->age = 0;
        $u->phone = "";
        $u->company = "";
        $u->second_name="";
        $u->gender =$gender;
        $u->fbid =$fbid;
        $u->device_id =uniqid();
        $u->save();
        Auth::login($u);
    }
    else{
        $user->fbid = $fbid;
        $user->first_name = $name;
        $user->gender = $gender;
        $user->save();
        Auth::login($user);
    }

    return redirect('/');
  }


  public function logout(){
    Auth::logout();
    return redirect('/');
  }
}
