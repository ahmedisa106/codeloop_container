<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array|min:1',

        ];
    }//end of onStore function

    public function onUpdate()
    {
        return [
            'name' => 'required|unique:roles,name,' . request()->id,
            'permissions' => 'required|array|min:1',
        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'name' => 'الإسم',
            'permissions' => 'الصلاحيات',
        ];

    }//end of attributes function
}
