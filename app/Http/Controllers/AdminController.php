<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Input;
use App\User;


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
}
