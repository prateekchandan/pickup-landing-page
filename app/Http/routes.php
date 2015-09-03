<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::post('/add-user', 'UserController@addUser');

Route::group(['middleware'=>'guest'],function(){
	Route::get('/login', array('as'=>'login','uses'=>'UserController@login_view'));
	Route::get('/fblogin', array('as'=>'fblogin','uses'=>'UserController@fblogin'));
	Route::get('/fblogin_callback', array('as'=>'fblogin_callback','uses'=>'UserController@fblogin_callback'));
});
Route::post('/contact-us',array('as'=>'contact-us','uses'=>'HomeController@contact'));

Route::get('/logout', array('as'=>'logout','middleware'=>'auth','uses'=>'UserController@logout'));


Route::group(['as' => 'admin::','middleware' => 'admin','prefix'=>'admin'], function () {
    Route::get('', ['as' => 'home', 'uses'=>'AdminController@home']);
    Route::get('users', ['as' => 'user', 'uses'=>'AdminController@showUser']);
    Route::delete('delete_users', ['as' => 'delete_user', 'uses'=>'AdminController@deleteUser']);
    Route::get('delete_users', ['as' => 'delete_user', 'uses'=>'AdminController@deleteUser']);

    Route::get('create_driver', ['as' => 'driver.add', 'uses'=>'AdminController@createDriverview']);
    Route::post('create_driver', ['as' => 'driver.add', 'uses'=>'AdminController@createDriver']);
    Route::get('driver', ['as' => 'driver', 'uses'=>'AdminController@allDriver']);
    
    Route::get('book-ride/{id}', ['uses'=>'AdminController@bookRide']);
});
