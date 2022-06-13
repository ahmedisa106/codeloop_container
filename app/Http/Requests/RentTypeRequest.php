<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentTypeRequest extends FormRequest
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
            'name' => 'required|unique:rent_types,name',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'name' => 'required|unique:rent_types,name,' . request()->id,
        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'name' => 'الإسم'
        ];

    }//end of attributes function
}
