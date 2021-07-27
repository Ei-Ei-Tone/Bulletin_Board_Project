<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function createUser()
    {
        return view('user.createUser');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function confirmUser()
    {
        return view('user.confirmUser');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function userProfile()
    {
        return view('user.userProfile');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function updateProfile()
    {
        return view('user.updateProfile');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function confirmProfile()
    {
        return view('user.confirmProfile');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function changePassword()
    {
        return view('user.changePassword');
    }
}
