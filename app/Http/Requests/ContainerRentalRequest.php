<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContainerRentalRequest extends FormRequest
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

        $roles = [
            'contract_type' => 'required|in:cash,contract',
            'area_name' => 'required_if:contract_type,contract|string',
            'area_number' => 'required_if:contract_type,contract|string',
            'block_number' => 'required_if:contract_type,contract|string',
            'plan_number' => 'required_if:contract_type,contract|string',
            'category_id' => 'required|exists:categories,id',
            'category_size_id' => 'required|exists:category_sizes,id',
            'customer_id' => 'required|exists:customers,id',
            'customer_address_id' => 'required|exists:customer_addresses,id',
            'container_id' => 'required|exists:containers,id',
            'discharge_price' => 'required|numeric',
            'discharge_number' => 'required|integer',
            'discount' => 'required|min:0',
            'total' => 'required|min:0|gte:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
        ];
        if (auth()->user()->hasRole('admin')) {
            $roles['messenger_id'] = 'required|exists:employees,id';
        }
        return $roles;

    }//end of onStore function

    public function onUpdate()
    {
        $roles = [
            'contract_type' => 'required|in:cash,contract',

            'area_name' => 'required_if:contract_type,contract|string',
            'area_number' => 'required_if:contract_type,contract|string',
            'block_number' => 'required_if:contract_type,contract|string',
            'plan_number' => 'required_if:contract_type,contract|string',
            'category_id' => 'required|exists:categories,id',
            'category_size_id' => 'required|exists:category_sizes,id',
            'customer_id' => 'required|exists:customers,id',
            'customer_address_id' => 'required|exists:customer_addresses,id',
            'container_id' => 'required|exists:containers,id',
            'discharge_price' => 'required|numeric',
            'discharge_number' => 'required|integer',
            'discount' => 'required|min:0',
            'total' => 'required|min:0|gte:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
        ];
        if (auth()->user()->hasRole('admin')) {
            $roles['messenger_id'] = 'required|exists:employees,id';
        }
        return $roles;

    }//end of onUpdate function

    public function attributes()
    {

        return [
            'contract_type' => 'نوع التعاقد',
            'contract_id' => 'رقم العقد',
            'category_id' => 'التصنيفات',
            'category_size_id' => 'حجم التصنيف',
            'customer_id' => 'العميل',
            'customer_address_id' => 'عنوان العميل',
            'container_id' => ' رقم الحاوية',
            'discharge_price' => 'سعر التفريغ',
            'discharge_number' => 'عدد التفريغات',
            'discount' => 'الخصم',
            'total' => 'الإجمالي بعد الخصم',
            'start_at' => 'التاريخ من',
            'end_at' => 'التاريخ الي',
            'messenger_id' => 'المندوب',
            'area_name' => 'إسم الحي',
            'area_number' => 'رقم القطعه',
            'block_number' => 'رقم البلوك',
            'plan_number' => 'رقم المخطط',
        ];

    }//end of attributes function


}
