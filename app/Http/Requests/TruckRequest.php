<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TruckRequest extends FormRequest
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
            'number' => 'required|unique:trucks,number',
            'driver_id' => 'required|exists:employees,id',
            'branch_id' => 'required|exists:branches,id',
            'note' => 'sometimes|nullable',

        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'number' => 'required|unique:trucks,number,' . request()->id,
            'driver_id' => 'required|exists:employees,id',
            'branch_id' => 'required|exists:branches,id',
            'note' => 'sometimes|nullable',
        ];


    }//end of onUpdate function

    public function attributes()
    {
        return [
            'number' => 'رقم الشاحنه',
            'driver_id' => 'السائق',
            'branch_id' => 'الفرع',
            'note' => 'الملاحظات',
        ];
    }
}
