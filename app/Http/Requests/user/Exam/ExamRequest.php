<?php

namespace App\Http\Requests\user\Exam;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            'question'=>'required|string',
            'answer'=>'required',
            'type'=>'nullable',
            'course_id'=>'string',
            'instructor_id'=>'string'

        ];
    }
}
