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

use App\UserAccount;
use App\Account;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
//Route::get('account', 'AccountController@getOverView');

Route::get('overview/{user_id}', function($user_id) {

        $user_accounts = UserAccount::where('user_id',$user_id)->get();
        $accounts = Account::where('id',$user_accounts->lists('account_id'))->get();

        return view('account.overview', ['accounts' => $accounts]);

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
