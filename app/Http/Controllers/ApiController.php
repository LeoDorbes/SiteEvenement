<?php

namespace App\Http\Controllers;

use App\Registration;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Validator;

class ApiController extends Controller
{

    public function registration()
    {

        $registration = Registration::find(0);

        return response()->json($registration, 201);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();
        return response()->json($registrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        /*
         * Old Laravel Validator : Allow a more precise control over the response, we use the ruleset of the Registration request by creating a local instance of it.
         */
        $registrationRequest = new \App\Http\Requests\Registration();
        $v = \Illuminate\Support\Facades\Validator::make($request->input(), $registrationRequest->rules());

        if ($v->passes()) {

        } else {
            dd('erreur ici');
        }

        //Cannot use the Registration request, has to handle errors manually.
        $registration = new Registration();
        $registration->first_name = $request->input('first_name');
        $registration->last_name = $request->input('last_name');
        $registration->email = $request->input('email');
        $registration->address = $request->input('address');
        $registration->city = $request->input('city');
        $registration->postal_code = $request->input('postal_code');
        $registration->position = $request->input('position');
        $registration->comment = $request->input('comment');

        //dd($registration);

        return Response::json([
            'status' => "success",
            'message' => "201 Created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registration = Registration::find($id);
        if (!$registration) \Abort(404);

        return response()->json($registration);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return null;
    }
}
