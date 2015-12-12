<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/*
 * "Requests" have replaced what once was "Validation"
 */
class UserRegistrationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Don't let a user that is logged in try to register again
        if (auth()->check()) {
            return false;
        }
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // It is important to have server-side validation AND browser-side validation,
        // but server-side is MORE important because the browser (javascript) can be manipulated
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required|date',
            'zipcode' => 'integer|required|regex:/^\d{5}$/|',
        ];
    }

    /*
     * Displays custom error messages.
     * The word after that '.' refers to the type of validation test that the variable (the word
     * that goes before the '.') was tested for.  This way, one variable can have more than one
     * custom error message depending on what type of validation failed.
     */
    public function messages()
    {
        return [
            'zipcode.regex' => 'The Zip Code must be 5 digits.',
        ];
    }
}
