<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class BackController extends Controller
{
    public function firstUser()
    {
        $users = User::all();
        if(count($users) > 0)return back()->with('flash_error', 'Le compte Admin a déjà été crée!');
        $user = new User();
        $user->email = 'admin@admin.com';
        $user->login = 'admin';
        $user->password = 'admin123';
        $user->save();
        return Redirect::route('home')->with('flash_success', 'Le compte Admin a été crée : LOGIN => admin --- MDP => admin123');
    }

    public function index(){

        return view('front/index');
    }

    public function login()
    {
        return view('back/login');
    }

    public function loginProcess(Login $request)
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
        \App::abort(404);


        return view('back/index');
    }
}
