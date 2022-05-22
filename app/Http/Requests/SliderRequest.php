<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title' => 'required|string|unique:packages,title',
            'photo' => 'required|image|mimes:png,jpeg,jpg',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'title' => 'required|string|unique:packages,title,' . request()->id,
            'photo' => 'sometimes|nullable|image|mimes:png,jpeg,jpg',
        ];


    }//end of onUpdate function

    public function attributes()
    {
        return [
            'title' => 'العنوان',

            'photo' => 'الصوره',
        ];
    }
}
