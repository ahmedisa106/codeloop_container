<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            'pdf' => asset('pdfs/' . $this->pdf),
            'contract_serial' => $this->contract_serial,
            'area_name' => $this->area_name,
            'area_number' => $this->area_number,
            'block_number' => $this->block_number,
            'plan_number' => $this->plan_number,
            'status' => $this->status,
            'customer' => $this->customer_id,
            'messenger' => $this->messenger_id,
            'container_rental' => $this->container_rental_id,
            'created_at' => Carbon::make($this->created_at)->format('Y-m-d')
        ];
    }
}
