<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'contracts_count' => $this->contracts->count(),
            'container_rentals_count' => $this->containerRentals->count(),
            'addresses' => $this->addresses,
            'rentals' => $this->containerRentals
        ];
    }
}
