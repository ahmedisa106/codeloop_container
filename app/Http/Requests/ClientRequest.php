<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'photo' => 'required|image|mimes:png,jpeg,jpg',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'photo' => 'required|image|mimes:png,jpeg,jpg',
        ];


    }//end of onUpdate function

    public function attributes()
    {
        return [
            'photo' => 'الصورة',
        ];
    }
}
