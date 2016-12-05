<?php

namespace App\Http\Controllers;

use App\Registration;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class FrontController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest');
    }

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
        //dd($request);

        //$registration->fillRegistration($request);
        $this->first_name = $request->input('first_name');
        $this->last_name = $request->input('last_name');
        $this->email = $request->input('email');
        $this->address = $request->input('address');
        $this->city = $request->input('city');
        $this->postal_code = $request->input('postal_code');
        $this->role_id = $request->input('role');
        $this->gender = $request->input('gender');
        $this->participate = $request->input('participate') ? true : false;
        $this->comment = $request->input('comment');

        //@todo : Gerer erreur BDD -- ajouter les erreur client / serveur
        $registration->save();
        return Redirect::route('home')->with('flash_success', 'Votre inscription à bien ete validée. Merci :) ');

    }

    public function login()
    {
        return view('front/login');
    }

    public function loginProcess(\App\Http\Requests\Login $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $user = User::where('login', $login)->first();

        if (!$user) {
            return back()->withInput()->with('flash_error', 'Identifiant incorrect.');
        }

        if (Hash::check($password, $user->password)) {
            Auth::login($user);

            return Redirect::route('admin_home');
        } else {
            return back()->withInput()->with('flash_error', 'Mot de passe incorrect.');
        }
    }

}
