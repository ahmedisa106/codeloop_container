<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'commercial_number' => $this->commercial_number,
            'tax_card_number' => $this->tax_card_number,
            'username' => $this->username,
            'image' => $this->image,
            'seal' => $this->seal,
            'sealImage' => $this->sealImage,
        ];
    }
}
