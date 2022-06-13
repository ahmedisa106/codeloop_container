<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() :$this->onStore();
    }

    public function onStore(){
        return  [
            'name'=>'required|unique:categories,name',
            'unit'=>'required',

        ];

    }//end of onStore function

    public function onUpdate(){
        return  [
            'name'=>'required|unique:categories,name,'.request()->id,
            'unit'=>'required',

        ];

    }//end of onStore function

    public function attributes(){

        return [
            'name'=>'الإسم',
            'unit'=>'وحده القياس',

        ];

    }//end of attributes function
}
