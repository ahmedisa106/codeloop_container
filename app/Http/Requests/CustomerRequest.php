<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|string|unique:customers,name',
            'email' => 'required|unique:customers,email',
            'phone' => 'required|numeric',
            'address' => 'required|array|min:1',
            'address.*' => 'required|string',

        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'name' => 'required|string|unique:customers,name,' . request()->id,
            'email' => 'required|unique:customers,email,' . request()->id,
            'phone' => 'required|numeric',
            'address' => 'required|array|min:1',
            'address.*' => 'required|string',
        ];


    }//end of onUpdate function


    public function attributes()
    {
        return [
            'name' => 'الإسم',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'address' => 'العنوان',
        ];
    }
}
