<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeratorRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|unique:moderators,email',
            'phone' => 'required|unique:moderators,phone',
            'password' => 'required',

        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|unique:moderators,email,' . request()->id,
            'phone' => 'required|unique:moderators,phone,' . request()->id,
        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'name' => 'الإسم',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'password' => 'كلمه المرور',

        ];

    }//end of attributes function
}
