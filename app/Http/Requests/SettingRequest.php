<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required',
            'mobile' => 'sometimes|nullable|integer',
            'logo' => 'sometimes|nullable',
            'facebook' => 'sometimes|nullable|url',
            'instagram' => 'sometimes|nullable|url',
            'footer_logo' => 'sometimes|nullable',
            'map' => 'sometimes|nullable',
        ];
    }

    public function attributes()
    {

        return [
            'name' => 'الإسم',
            'email' => 'البريد الإلكتروني',
            'mobile' => 'الهاتف',
            'logo' => 'الشعار',
            'address' => 'العنوان',
            'facebook' => 'الفيس بوك',
            'instagram' => 'إنستجرام',
            'footer_logo' => 'شعار الفوتر',
            'map' => 'الخريطه',
        ];
    }//end of attributes function
}
