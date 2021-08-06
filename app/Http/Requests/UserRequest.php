<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'  =>  'required',
            'email' =>  'required|email|unique:users,email',
            'password'  =>  'required|same:password_confirmation|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation'  =>  'required',
            'is_admin'  =>  'required',
            'phone' =>  'required',
            'date'  =>  'required',
            'address'   => 'required',
            'profile'   =>  'required|image'
        ];
    }
}
