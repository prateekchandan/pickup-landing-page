<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
  public function addUser(Request $request)
  {
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
}
