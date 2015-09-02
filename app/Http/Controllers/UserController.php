<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Socialize;
use Auth;

class UserController extends Controller
{
  public function addUser(Request $request)
  {
    $u = User::where('email','=', $request->input('email'))
                ->orWhere('phone','=',$request->input('phone'))->first();
    if(is_null($u))
        $u = new User();      
    
    $u->email = $request->input('email');
    $u->home_text = $request->input('home_text');
    $u->home_location = $request->input('home_location');
    $u->office_text = $request->input('office_text');
    $u->office_location = $request->input('office_location');
    $u->first_name = $request->input('name');
    $u->age = 0;
    $u->phone = $request->input('phone');
    $u->company = "";
    $u->second_name="";
    $u->gender ="";
    $u->fbid ="";
    $u->device_id =uniqid();
    $u->save();
    
    session(['registered'=>'1','email'=>$u->email]);
    return $u;
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
        $request->session()->flash('msg','Unable to fetch your email from Facebook');
        return redirect()->route('login');
    }
    $fbid = $gruser->getId();
    $name = $gruser->getName();
    $email = $gruser->getEmail();
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
    else
        Auth::login($user);

    return redirect('/');
  }
}
