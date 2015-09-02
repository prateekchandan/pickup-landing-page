<?php 
namespace App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
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
		return view('welcome');
	}

	/**
	 * Contact
	 *
	 * @return Response
	 */
	public function contact(Request $request){
		$name = $request->get('name');
		$email = $request->get('email');
		$bmessage = $request->get('message');
		if(env('APP_ENV', 'local')!="local"){
			 Mail::send('email.contactus', array('name' => $name,'email'=>$email,'bmessage'=>$bmessage),   function($message){
		        $message->to('support@getpickup.in',"Team Pickup")->subject('[NEW] Contact Us Email');
		    });
		}
		return "Success";
	}
}
