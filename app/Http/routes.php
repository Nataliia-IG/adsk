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
use VK\VK;


Route::get('/', ['uses' => 'WelcomeController@index']);

Route::get('home', ['as' => 'after_login', 'uses' => 'HomeController@index']);

Route::controllers([
	'auth'      => 'Auth\AuthController',
	'password'  => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('profile',           ['as' => 'client.profile',      'uses' => 'UsersController@myProfile']);
    Route::get('profile/edit',      ['as' => 'client.profile.edit', 'uses' => 'UsersController@edit']);

    Route::get('profile/{user}',    ['as' => 'client.profile.show', 'uses' => 'UsersController@profile']);
});

Route::get('test', function(){
    echo "<pre>";
    $User = \App\User::all();
    $User->first_name = "1111111111";
    var_dump($User);
    echo "</pre>";
});
