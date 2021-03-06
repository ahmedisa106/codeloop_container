<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'username' => 'required|string|unique:employees,username',
            'email' => 'required|unique:employees,email',
            'phone' => 'required|unique:employees,phone',
            'code' => 'required|unique:employees,code',
            'password' => 'required',
            'photo' => 'sometimes|nullable|image',
            'nationality' => 'required',
            'branch_id' => 'required|exists:branches,id',
            'job_type' => 'required',
            'category_id' => 'required_if:job_type,messenger|exists:categories,id',
            'status' => 'sometimes|nullable',

        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'name' => 'required|string',
            'username' => 'required|string|unique:employees,username,' . request()->id,
            'email' => 'required|unique:employees,email,' . request()->id,
            'phone' => 'required|unique:employees,phone,' . request()->id,
            'code' => 'required|unique:employees,code,' . request()->id,
            'password' => 'sometimes:nullable',
            'photo' => 'sometimes|nullable|image',
            'nationality' => 'required',
            'branch_id' => 'required|exists:branches,id',
            'job_type' => 'required',
            'category_id' => 'required_if:job_type,messenger|exists:categories,id',
            'status' => 'sometimes|nullable',
        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'name' => '??????????',
            'username' => '??????????',
            'email' => '???????????? ????????????????????',
            'phone' => '????????????',
            'password' => '???????? ????????????',
            'code' => '??????????',
            'photo' => '????????????',
            'nationality' => '??????????????',
            'branch_id' => '??????????',
            'job_type' => '?????? ??????????????',
            'messenger_type' => '?????? ??????????????',
            'status' => '????????????',
            'category_id' => '??????????????'

        ];

    }//end of attributes function
}
