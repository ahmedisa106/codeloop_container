<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
            'company_id' => 'required|exists:companies,id',
            'package_id' => 'required|exists:packages,id',
            'package_price' => 'required|gte:discount',
            'discount' => 'required|lte:package_price',
            'price_after_discount' => 'required|gte:0',
            'package_finish_at' => 'required|date',
            'status' => 'required|in:pending,finished,subscribed',
        ];

    }//end of onStore function

    public function onUpdate()
    {
        return [
            'company_id' => 'required|exists:companies,id',
            'package_id' => 'required|exists:packages,id',
            'package_price' => 'required|gte:discount',
            'discount' => 'required|lte:package_price',
            'price_after_discount' => 'required|gte:0',
            'package_finish_at' => 'required|date',
            'status' => 'required|in:pending,finished,subscribed',
        ];


    }//end of onUpdate function

    public function attributes()
    {
        return [
            'company_id' => 'المؤسسة',
            'package_id' => 'الباقة',
            'package_price' => 'سعر الباقة',
            'discount' => 'الخصم',
            'price_after_discount' => 'السعر بعد الخصم',
            'package_finish_at' => 'تاريخ إنتهاء الباقة',
            'status' => 'الحالة',

        ];
    }
}
