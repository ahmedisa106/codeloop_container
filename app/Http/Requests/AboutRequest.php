<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'photo' => 'sometimes|nullable|image'
        ];
    }

    public function attributes()
    {

        return [
            'title' => 'العنوان',
            'description' => 'التفاصيل',
            'photo' => 'الصوره',
        ];

    }//end of attributes function
}
