<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
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
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() : $this->onStore();
    }

    public function onStore()
    {
        return [
            'model' => 'required|unique:apps,model',
            'ar_model' => 'required|unique:apps,model',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'model' => 'required|unique:apps,model,' . request()->id,
            'ar_model' => 'required|unique:apps,model,' . request()->id,


        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'model' => 'الإسم',
            'ar_model' => 'الإسم باللغه العربيه'
        ];

    }//end of attributes function
}
