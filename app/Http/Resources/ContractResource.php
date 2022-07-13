<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
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
            'pdf' => route('contracts.pdf', $this->id),
            'contract_serial' => $this->contract_serial,
            'area_name' => $this->area_name,
            'area_number' => $this->area_number,
            'block_number' => $this->block_number,
            'plan_number' => $this->plan_number,
            'status' => $this->status,
            'customer' => $this->customer,
            'messenger' => $this->messenger,
            'container_rental' => $this->containerRentals,
        ];
    }
}
