<?php

namespace App\Http\Requests\user\profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileUserRequest extends FormRequest
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
            'name' => ['string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255'],
            'phone'=>'|string|max:191|'.$this->user,
            'city_id'=>['string'],
            'username'=>['string'],
            'gender'=>['string'],
            'role'=>['string'],
            'img'=>'|image|mimes:jpeg,png,jpg,gif,svg',
            'Employment'=>'',
            'Specialization'=>'',
            'qualification'=>''
        ];
    }
}
