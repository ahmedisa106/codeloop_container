<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobTypeRequest extends FormRequest
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

    public function rules()
    {
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() : $this->onStore();
    }

    public function onStore()
    {
        return [
            'name' => 'required|unique:job_types,name',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'name' => 'required|unique:job_types,name,' . request()->id,
        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'name' => 'الإسم'
        ];

    }//end of attributes function
}
