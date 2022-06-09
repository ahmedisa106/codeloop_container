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
            'messenger_type' => 'required_if:job_type,messenger',
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
            'messenger_type' => 'required_if:job_type,messenger',
            'status' => 'sometimes|nullable',
        ];

    }//end of onStore function

    public function attributes()
    {

        return [
            'name' => 'الإسم',
            'username' => 'الإسم',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'password' => 'كلمه المرور',
            'code' => 'الرمز',
            'photo' => 'الصوره',
            'nationality' => 'الجنسيه',
            'branch_id' => 'الفرع',
            'job_type' => 'نزع الوظيفه',
            'messenger_type' => 'نوع المندوب',
            'status' => 'الحاله',

        ];

    }//end of attributes function
}
