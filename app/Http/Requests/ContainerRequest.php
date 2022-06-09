<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContainerRequest extends FormRequest
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
            'number' => 'required||unique:containers,number',
            'branch_id' => 'required|exists:branches,id',
            'category_id' => 'required|exists:categories,id',
            'category_size_id' => 'required|exists:category_sizes,id',
            'price' => 'required|numeric',

        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'number' => 'required||unique:containers,number,' . request()->id,
            'branch_id' => 'required|exists:branches,id',
            'category_id' => 'required|exists:categories,id',
            'category_size_id' => 'required|exists:category_sizes,id',
            'price' => 'required|numeric',
        ];


    }//end of onUpdate function


    public function attributes()
    {
        return [
            'number' => 'رقم الحاويه',
            'branch_id' => 'الفرع',
            'category_id' => 'التصنيف',
            'category_size_id' => 'حجم الحاويه',
            'price' => 'السعر',
        ];
    }
}
