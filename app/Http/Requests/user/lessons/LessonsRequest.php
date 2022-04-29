<?php

namespace App\Http\Requests\user\lessons;

use Illuminate\Foundation\Http\FormRequest;

class LessonsRequest extends FormRequest
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
            'lesson_name'=>'string|required',
            'video_link'=>['nullable','regex:/^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/i'],
            'video'=>'nullable',
            'paperwork'=>'mimes:jpeg,png,jpg,zip,pdf,ppt, pptx, xlx, xlsx,docx,doc,gif|max:20000|nullable',
            'paperwork_link'=>'url|nullable',
            'lesson_desc'=>'string|nullable',
            'order'=>'required|integer',
            'course_id'=>''
        ];
    }
}
