<?php

namespace App\Http\Controllers;

use App\Registration;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{

        public function registration(){


            $registration = Registration::find(0);

            return response()->json($registration, 201);
        }
}
