<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\auth;

class RedirectionsController extends Controller
{
    public function register()
    {
    	return Redirect::to('register');
    }
    public function login()
    {
    	return Redirect::to('login');
    }
}
