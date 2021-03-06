<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestionsRequest extends FormRequest
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
            'question' => 'required',
            'answer1' => 'required',
            'comment1' => 'required',
            'answer2' => 'required',
			'comment2' => 'required',
			'answer3' => 'required',
			'comment3' => 'required',
			'level' => 'required',
        ];
    }
}
