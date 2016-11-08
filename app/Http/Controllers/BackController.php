<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class BackController extends Controller
{
    public function firstUser()
    {
        $user = User::all();
        if(count($user) > 0)return back()->with('flash_error', 'Le compte Admin a déjà été crée!');
        $user = new User();
        $user->email = 'admin@admin.com';
        $user->login = 'admin';
        $user->password = 'admin123';
        $user->save();
        return Redirect::route('home')->with('flash_success', 'Le compte Admin a été crée : LOGIN => admin --- MDP => admin123');
    }

    public function index(){

        return view('index');
    }

    public function login()
    {
        return view('back/login');
    }

    public function loginProcess()
    {

    }
}
