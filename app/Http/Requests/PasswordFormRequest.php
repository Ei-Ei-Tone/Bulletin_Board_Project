<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PasswordFormRequest extends FormRequest
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
            'password'  =>  'required|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/',           
            'new_password'  =>  'required|same:confirm_password|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/|different:password',
            'confirm_password' => 'required|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/'
        ];
    }
}
