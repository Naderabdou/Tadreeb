<?php

namespace App\Http\Requests\user\courese;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
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
            'name'=>'required|string',
            'prerequisite'=>'string|nullable',
            'video'=>'nullable',
            'video_link'=>['nullable','regex:/^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/i'],
            'courses_desc'=>'string|nullable',
            'gender_student'=>'nullable',
            'courses_type'=>'required|string|nullable',
            'courses_cost'=>'numeric|nullable',
            'Certificate_name'=>'string|nullable',
            'Donor'=>'string|nullable',
            'Certification_type'=>'string|nullable',
            'Certification_cost'=>'numeric|nullable',
            'instructor_id'=>'string|',
            'status'=>'string|nullable',
            'Scope_id'=>'string|nullable',
            'start_date'=>'required|string',
            'end_date'=>'required|string',

            'img'=>'image|mimes:jpeg,png,jpg,gif,svg|nullable',


        ];
    }
}
