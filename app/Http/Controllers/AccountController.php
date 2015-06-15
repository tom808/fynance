<?php

namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 23/05/15
 * Time: 22:11
 */

class AccountController extends Controller {



    public function getOverView()
    {
        return view('account.overview')->with('user_name','Tom');
    }

}