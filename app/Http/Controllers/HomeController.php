<?php 
namespace App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Agent;
use Input;
use App\ClickCount;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Input::has('click')){
			$num = intval(Input::get('click'));
			if($num>=1 && $num<=7){
				$click = ClickCount::find($num);
				if(is_null($click)){
					ClickCount::insert([
						['id'=>1,'description'=>'Pickup Logo','type'=>'ICICI Campaign'],
						['id'=>2,'description'=>'JUST "CLICK" AND BOOK YOUR FIRST RIDE FOR FREE!','type'=>'ICICI Campaign'],
						['id'=>3,'description'=>'Banner Image of girl','type'=>'ICICI Campaign'],
						['id'=>4,'description'=>'AND SO, WE CREATED PICKUP','type'=>'ICICI Campaign'],
						['id'=>5,'description'=>'FOR ICICI EMPLOYEES, THE FIRST RIDE IS FREE.','type'=>'ICICI Campaign'],
						['id'=>6,'description'=>'VISIT WEBSITE','type'=>'ICICI Campaign'],
						['id'=>7,'description'=>'To make your daily commute easier, just click here and we’ll take it from there.','type'=>'ICICI Campaign']
						]);
					$click = ClickCount::find($num);
				}
				$click->plus_one();
			}
		}
		if(Agent::isMobile())
		{
			return view('phone');
		}
		return view('welcome');
	}

}
