<?php

namespace App\Http\Controllers;

use App\Registration;
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

    public function registrationProcess(\App\Http\Requests\Registration $request)
    {
        $registration = new Registration();
        $registration->first_name = $request->input('first_name');
        $registration->last_name = $request->input('last_name');
        $registration->email = $request->input('email');
        $registration->address = $request->input('address');
        $registration->city = $request->input('city');
        $registration->postal_code = $request->input('postal_code');
        $registration->position = $request->input('position');
        $registration->comment = $request->input('comment');

        //@todo : Gerer erreur BDD -- ajouter les erreur client / serveur
        $registration->save();
        return view('front/registration')->with('flash_success' , 'Votre inscription à bien ete validée. Merci :) ');
    }


}
