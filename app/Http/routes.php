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

use App\User;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
/*
Route::get('account', function() {

    $users = DB::table('users')->get();

    return $users;


});

*/

Route::get('account', 'AccountController@getOverView');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
