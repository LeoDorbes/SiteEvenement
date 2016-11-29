<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'first_name' => 'required|max:50|min:2',
            'last_name' => 'required|max:50|min:2',
            'email' => 'required|max:50|min:2|email',
            'address' => 'required|max:150|min:2',
            'city' => 'required|max:75|min:2',
            'postal_code' => 'required|max:25|min:2',
            'position' => 'required|max:15|min:2',
            'comment' => 'min:1|max:1000',
        ];
    }
}
