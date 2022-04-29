<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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

                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required','string', 'confirmed'],
                'phone'=>['required', 'string',  'max:11', 'unique:users'],
                'city_id'=>['required', 'string'],
                'username'=>['required','string','unique:users'],
                'gender'=>['required','string'],
                'role'=>['required','string'],
            'Privacy_policy'=>['required','string']

        ];
    }
}
