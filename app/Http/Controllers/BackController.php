<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Registration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class BackController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

        return view('back/index');
    }

    public function logout(){
        Auth::logout();
        return Redirect::route('home');
    }
    /*
     * The list of all the registrations :
     */
    public function registrations(){

        $registrations = Registration::all();
        return view('back/registrations')->with('registrations',$registrations);
    }

    public function  editRegistration($id){

        $registration = Registration::find($id);
        if(!$id)\App::abort(404);

        $url = route('admin_edit_registration_process',$registration->id);

        return view('back/registration_form')->with('url',$url)->with('registration',$registration);
    }
    public function  editRegistrationProcess(\App\Http\Requests\Registration $request, $id){

        $registration = Registration::find($id);
        if(!$registration)\App::abort(404);

        $registration->first_name = $request->input('first_name');
        $registration->last_name = $request->input('last_name');
        $registration->email = $request->input('email');
        $registration->address = $request->input('address');
        $registration->city = $request->input('city');
        $registration->postal_code = $request->input('postal_code');
        $registration->position = $request->input('position');
        $registration->comment = $request->input('comment');

        $registration->save();
        return Redirect::route('admin_registrations')->with('flash_success', 'L\'inscription a bien été modifiée');


    }
    public function addRegistration(){

        $url = route('admin_add_registration_process');
        return view('back/registration_form')->with('url',$url);
    }
    public function addRegistrationProcess(\App\Http\Requests\Registration $request){

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
        return Redirect::route('admin_registrations')->with('flash_success', 'L\'inscription a bien été ajoutée');

    }
    public function deleteRegistrationProcess($id){

        $registration = Registration::find($id);
        if(!$registration)\App::abort(404);
        $registration->delete();
        return Redirect::route('admin_registrations')->with('flash_success', 'L\'inscription a bien été supprimée');
    }
}
