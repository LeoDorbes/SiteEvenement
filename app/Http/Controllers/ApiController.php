<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;


class ApiController extends Controller
{



    public function __construct()
    {
        //$this->middleware('jwt.auth');
    }

    public function checkAuth(){
        $user = JWTAuth::parseToken()->toUser();

    }

    /**
     * Display a listing of the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->checkAuth();
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
        $this->checkAuth();
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
        $registration->requestFill($request);

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
        $this->checkAuth();
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
        $this->checkAuth();
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
        $this->checkAuth();
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
        dd('hi');
        $registration->requestFill($request);

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
        $this->checkAuth();
        $registration = Registration::find($id);
        if (!$registration) \Abort(404);

        $registration->delete();
        return Response::json([
            'status' => "success",
            'message' => "200 OK - Deleted"
        ], 200);
    }
}
