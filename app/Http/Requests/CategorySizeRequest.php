<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorySizeRequest extends FormRequest
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
            'price' => 'required',
            'size' => 'required',
            'category_id' => 'required|exists:categories,id',

        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'price' => 'required',
            'size' => 'required',
            'category_id' => 'required|exists:categories,id',

        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'price' => 'السعر',
            'size' => 'الحجم',
            'category_id' => 'التصنيف',

        ];

    }
}
