<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Input;
use Hash;;
use App\User;
use App\Driver;

class AdminController extends Controller
{
    public function home(){
    	return view('admin.home',[
    		'menu'=>'home'
    	]);
    }

    public function showUser(){
    	$users = User::where('admin','!=','1')->get();
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

    	$office = explode(',', $user->office_location);
    	if(sizeof($office)<2)
    		return redirect()->back();
    	$user->office_lat = $office[0];
    	$user->office_long = $office[1];
    	return view('admin.book_ride',[
    		'user'=>$user
    	]);
    }
}
