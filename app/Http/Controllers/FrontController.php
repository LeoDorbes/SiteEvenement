<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function index()
    {



        return view('front/index');
    }

    public function registration()
    {

        return view('front/registration');
    }

    public function registrationProcess()
    {

        return view('front/registration');
    }


}
