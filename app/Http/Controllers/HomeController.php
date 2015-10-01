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
				if(!is_null($click)){
					$click->plus_one();
				}
			}
		}
		if(Agent::isMobile())
		{
			return view('phone');
		}
		return view('welcome');
	}

	public function browser_email()
	{
		if(Input::has('date')){
			$date = Input::get('date');
		}
		else
			$date = 'Monday (3, October)';

		if(Input::has('company'))
			$company = Input::get('company');
		else
			$company = 'YOU';

    	return view('aemail')->with([
    		'date' => $date,
    		'company' => $company,
    		'web'=>'1'
    	]);
	}

}
