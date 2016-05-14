<?php
session_start();
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
// Application routes;
Route::group(['namespace' => 'Client'], function()
{
	Route::get('/', ['as' => 'Home', 'uses' => 'HomeController@index']);
	
	Route::get('language/change',function(){
		Session::set('locale', Input::get('locale'));
		return redirect()->back();
	});
});

// Auth routes
Route::group(['namespace' => 'Auth'], function()
{
    Route::group(['prefix' => 'auth'], function()
    {
        Route::get('/', ['as' => 'auth.root', 'uses' => 'AuthController@getLogin']);
        Route::get('login',  ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
        Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
		Route::get('logout_admin', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
    });
});

// Admin routes
Route::group(['prefix' => 'lv-admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
    // GET
    Route::get('/', ['as' => 'admin.root', 'uses' => 'DashboardController@index']);
 
       
});
