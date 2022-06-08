<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() :$this->onStore();
    }

    public function onStore(){
        return  [
            'name'=>'required|unique:branches,name',
            'address'=>'required',
            'desc'=>'required',
            'photo'=>'sometimes|nullable|image|mimes:png,jpg,jpeg,webp',
        ];

    }//end of onStore function

    public function onUpdate(){
        return  [
            'name'=>'required|unique:branches,name,'.request()->id,
            'address'=>'required',
            'desc'=>'required',
            'photo'=>'sometimes|nullable|image|mimes:png,jpg,jpeg,webp',
        ];

    }//end of onStore function

    public function attributes(){

        return [
            'name'=>'الإسم',
            'desc'=>'التفاصيل',
            'address'=>'العنوان',
            'photo'=>'الشعار',
        ];

    }//end of attributes function
}
