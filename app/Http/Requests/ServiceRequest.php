<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() : $this->onStore();
    }

    public function onStore()
    {
        return [
            'title' => 'required|string|unique:services,title',
            'description' => 'required|string',
            'photo' => 'sometimes|nullable|image|mimes:png,jpeg,jpg',
            'meta_title' => 'sometimes|nullable|string',
            'meta_description' => 'sometimes|nullable|string',
            'meta_keywords' => 'sometimes|nullable|string',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'title' => 'required|string|unique:services,title,' . request()->id,
            'description' => 'required|string',
            'photo' => 'sometimes|nullable|image|mimes:png,jpeg,jpg',
            'meta_title' => 'sometimes|nullable|string',
            'meta_description' => 'sometimes|nullable|string',
            'meta_keywords' => 'sometimes|nullable|string',
        ];


    }//end of onUpdate function

    public function attributes()
    {
        return [
            'title' => 'العنوان',
            'description' => 'التفاصيل',
            'photo' => 'الصورة',
        ];
    }
}
