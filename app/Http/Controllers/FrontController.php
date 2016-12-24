<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Role;
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
        $roles = Role::getFormList();
        return view('front/index')->with('roles',$roles);
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
        $registration->role_id = $request->input('role_id');
        $registration->gender = $request->input('gender');
        $registration->participate = $request->input('participate') ? true : false;
        $registration->comment = $request->input('comment');




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
