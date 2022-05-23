<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        return request()->isMethod('put') || request()->isMethod('put') ? $this->onUpdate() : $this->onStore();
    }

    public function onStore()
    {
        return [
            'name' => 'required|unique:companies,name',
            'commercial_number' => 'required|unique:companies,commercial_number',
            'tax_card_number' => 'required|unique:companies,tax_card_number',
            'username' => 'required|unique:companies,username',
            'email' => 'required|unique:companies,email',
            'password' => 'required',
            'logo' => 'sometimes|nullable|image',
            'status' => 'in:active,inactive',
            'phone' => 'required|unique:companies,phone',
            'package_id' => 'required|exists:packages,id',
        ];


    }//end of onStore function

    public function onUpdate()
    {

        return [
            'name' => 'required|unique:companies,name,' . request()->id,
            'commercial_number' => 'required|unique:companies,commercial_number,' . request()->id,
            'tax_card_number' => 'required|unique:companies,tax_card_number,' . request()->id,
            'username' => 'required|unique:companies,username,' . request()->id,
            'email' => 'required|unique:companies,email,' . request()->id,
            'password' => 'sometimes|nullable',
            'logo' => 'sometimes|nullable|image',
            'status' => 'in:active,inactive',
            'phone' => 'required|unique:companies,phone,' . request()->id,
            'package_id' => 'required|exists:packages,id',
        ];

    }//end of onUpdate function


    public function attributes()
    {
        return [
            'name' => 'اسم المؤسسه',
            'username' => 'إسم المستخدم',
            'email' => 'البريد الإلكتروني',
            'password' => 'كلمه المرور',
            'phone' => 'رقم الجوال',
            'commercial_number' => 'رقم السجل التجاري',
            'tax_card_number' => 'رقم البطاقه الضريبيه',
            'logo' => 'الشعار',
            'status' => 'الحاله',
            'package_id' => 'الباقه',

        ];

    }//end of attributes function
}
