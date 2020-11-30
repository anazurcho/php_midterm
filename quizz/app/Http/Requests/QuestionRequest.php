<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            //
            'name'=>'required',
            'answer_1_name'=>'required',
            'answer_2_name'=>'required',
            'answer_3_name'=>'required',
            'answer_4_name'=>'required',
            'is_true'=>'required',
        ];
    }
}
