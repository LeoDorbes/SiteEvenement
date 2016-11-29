<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

class Registration extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules['first_name'] =  'required|max:50|min:2';
        $rules['last_name'] =  'required|max:50|min:2';
        $rules['address'] =  'required|max:150|min:2';
        $rules['city'] =  'required|max:75|min:2';
        $rules['postal_code'] =  'required|max:25|min:2';
        $rules['position'] =  'required|max:75|min:2';
        $rules['comment'] =  'min:1|max:1000';

        if(Route::input('id') == null){
            $rules['email'] =  'required|max:50|min:2|email|unique:registrations';
        }else{
            $rules['email'] =  'required|max:50|min:2|email|unique:registrations,email,'.Route::input('id');
        }
        return $rules;
    }

   /* protected function formatErrors(Validator $validator)
    {
        //If it comes from the API :
        if (!$this->acceptsHtml()) {

        } else {

        }

        return $validator->errors()->all();
    }*/
}
