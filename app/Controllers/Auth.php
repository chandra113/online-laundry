<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function login()
    {
        //tampilan login
        return view('auth/login');
    }
    //--------------------------------------------------------------------
    public function register()
    {
        //tampilan registrasi
        return view('auth/registration');
    }
}
