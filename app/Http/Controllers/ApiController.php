<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Validator;


class ApiController extends Controller
{

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
     *
     * NOT NECESSARY FOR NOW :
     */
    public function create()
    {
        //We get the ruleset from here, so we don't have to write it twice :
        $registrationRequest = new \App\Http\Requests\Registration();
        $registrationRequestRules = $registrationRequest->rules();


        foreach (array_keys($registrationRequestRules) as $field) {
           $successArray[] = $field;
        }

        return Response::json($successArray, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //We get the ruleset from here, so we don't have to write it twice :
        $registrationRequest = new \App\Http\Requests\Registration();
        $registrationRequestRules = $registrationRequest->rules();
        $validator = Validator::make($request->all(), $registrationRequestRules);

        if ($validator->fails()) {
            $errorArray = [
                'status' => "error",
                'message' => "400 Bad Request"
            ];
            foreach (array_keys($registrationRequestRules) as $field) {

                $array = array();
                foreach ($validator->errors()->get($field) as $problem) {
                    $array[] = $problem;
                }
                if (count($array) > 0) $errorArray[$field] = $array;
            }

            return Response::json($errorArray, 400);
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

        $registration->save();

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
     * NOT NECESSARY FOR NOW :
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //We get the ruleset from here, so we don't have to write it twice :
        $registrationRequest = new \App\Http\Requests\Registration();
        $registrationRequestRules = $registrationRequest->rules();


        foreach (array_keys($registrationRequestRules) as $field) {
            $successArray[] = $field;
        }

        return Response::json($successArray, 200);
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
        $registration = Registration::find($id);
        if(!$registration)\App::abort(404);

        //We get the ruleset from here, so we don't have to write it twice :
        $registrationRequest = new \App\Http\Requests\Registration();
        $registrationRequestRules = $registrationRequest->rules();
        $validator = Validator::make($request->all(), $registrationRequestRules);

        if ($validator->fails()) {
            $errorArray = [
                'status' => "error",
                'message' => "400 Bad Request"
            ];
            foreach (array_keys($registrationRequestRules) as $field) {

                $array = array();
                foreach ($validator->errors()->get($field) as $problem) {
                    $array[] = $problem;
                }
                if (count($array) > 0) $errorArray[$field] = $array;
            }

            return Response::json($errorArray, 400);
        }

        //Cannot use the Registration request, has to handle errors manually.
        $registration->first_name = $request->input('first_name');
        $registration->last_name = $request->input('last_name');
        $registration->email = $request->input('email');
        $registration->address = $request->input('address');
        $registration->city = $request->input('city');
        $registration->postal_code = $request->input('postal_code');
        $registration->position = $request->input('position');
        $registration->comment = $request->input('comment');

        $registration->save();

        return Response::json([
            'status' => "success",
            'message' => "200 OK - Updated"
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registration = Registration::find($id);
        if (!$registration) \Abort(404);

        $registration->delete();
        return Response::json([
            'status' => "success",
            'message' => "200 OK - Deleted"
        ], 200);
    }
}
