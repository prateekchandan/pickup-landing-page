<?php 
namespace App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Agent;
use Input;
use App\ClickCount;
use App\HourlyClick;
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


	private function hour_count()
	{
		$hour  = date('H',time());
		$date = date('Y-m-d',time());

		$dateObj = HourlyClick::where('date','=',$date)->where('hour','=',$hour)->first();
		if(is_null($dateObj))
			$dateObj = new HourlyClick();

		$dateObj->date = $date;
		$dateObj->hour = $hour;
		$dateObj->count += 1;
		$dateObj->save();
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
			
			$click = ClickCount::find($num);
			if(!is_null($click)){
				$click->plus_one();
				session(['clickval'=>$num]);
				$this->hour_count();
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
