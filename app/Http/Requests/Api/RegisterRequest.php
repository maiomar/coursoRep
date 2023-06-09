<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required'] ,
            'birth_date'=>['required'],
            'mobile'=>['required'],
            'gender'=>['required'],
            'Address'=>['required'],
            'nationality'=>['required'],
            'social_situation'=>['required'],
            'educcational_attainment'=>['required'],
            'photo_profile'=>['required'],
            


        ];
    }
}
