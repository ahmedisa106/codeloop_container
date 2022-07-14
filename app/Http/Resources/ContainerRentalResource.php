<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContainerRentalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'messenger' => new EmployeeResource($this->messenger),
            'discharge_price' => $this->discharge_price,
            'discharge_number' => $this->discharge_number,
            'remaining_discharge' => $this->remaining_discharge,
            'discount' => $this->discount,
            'total' => $this->total,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'contract_type' => $this->contract_type,
            'category' => $this->category,
            'customer' => $this->customer,
            'customer_address' => $this->customerAddress,
            'container' => $this->container,
            'discharges' => $this->discharges,
        ];
    }
}
