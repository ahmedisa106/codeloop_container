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
            'contract_type' => $this->contract_type,
            'category' => new CategoryResource($this->category),
            'customer' => new CustomerResource($this->customer),
            'customer_address' => $this->customerAddress,
            'container' => new ContainerResource($this->container),
            'discharges' => $this->discharges,
            'discharge_price' => $this->discharge_price,
            'discharge_number' => $this->discharge_number,
            'remaining_discharge' => $this->remaining_discharge,
            'discount' => $this->discount,
            'total' => $this->total,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
        ];
    }
}
