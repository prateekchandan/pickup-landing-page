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
Route::post('/', 'UserController@addUser');

Route::get('campaign_email','HomeController@browser_email');


Route::group(['middleware'=>'guest'],function(){
	Route::get('/login', array('as'=>'login','uses'=>'UserController@login_view'));
	Route::get('/fblogin', array('as'=>'fblogin','uses'=>'UserController@fblogin'));
	Route::get('/fblogin_callback', array('as'=>'fblogin_callback','uses'=>'UserController@fblogin_callback'));
});

Route::get('/logout', array('as'=>'logout','middleware'=>'auth','uses'=>'UserController@logout'));


Route::group(['as' => 'admin::','middleware' => 'admin','prefix'=>'admin'], function () {
    Route::get('', ['as' => 'home', 'uses'=>'AdminController@home']);
    Route::get('users', ['as' => 'user', 'uses'=>'AdminController@showUser']);
    Route::delete('delete_users', ['as' => 'delete_user', 'uses'=>'AdminController@deleteUser']);
    Route::get('delete_users', ['as' => 'delete_user', 'uses'=>'AdminController@deleteUser']);

    Route::get('create_driver', ['as' => 'driver.add', 'uses'=>'AdminController@createDriverview']);
    Route::post('create_driver', ['as' => 'driver.add', 'uses'=>'AdminController@createDriver']);
    Route::get('driver', ['as' => 'driver', 'uses'=>'AdminController@allDriver']);
    Route::get('driver-map', ['as' => 'driver.map', 'uses'=>'AdminController@allDriverMap']);
    Route::get('driver-map-update', ['as' => 'driver.map.update', 'uses'=>'AdminController@allDriverMapUpdate']);
    
    Route::get('book-ride/{id}', ['uses'=>'AdminController@bookRide']);
    Route::get('user/{id}', ['uses'=>'AdminController@show_user']);
    Route::post('user', ['as' => 'user.edit','uses'=>'AdminController@user_update']);

    Route::post('get_best_match',['as'=>'api.get_best_match','uses'=>'AdminController@api_get_best_match']);
    Route::get('confirm_journey/{id}',['as'=>'api.confirm','uses'=>'AdminController@confirm']);
    
    Route::get('new_groups',['as'=>'group.new','uses'=>'AdminController@new_groups']);
    Route::get('active_groups',['as'=>'group.active','uses'=>'AdminController@active_groups']);
    Route::get('finished_groups',['as'=>'group.finished','uses'=>'AdminController@finished_groups']);
    
    Route::get('send_email',['as'=>'email.icici','uses'=>'AdminController@view_send_email']);
    Route::post('send_email',['uses'=>'AdminController@send_email']);
});


Route::get('{path}', function($filename) {
  return Bust::css($filename);
})->where('path', '.*\.css$');
App::make('cachebuster.StripSessionCookiesFilter')->addPattern('|\.css$|');