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
            'id' => (int)$this->id,
            'container_number' => $this->container->number ?? null,
            'customer_name' => $this->customer->name ?? null,
            'messenger_name' => $this->messenger->name ?? null,
            'status' => $this->status,
            'start-at' => $this->start_at,
            'total' => (double)$this->total,
            'category_type' => $this->category->name ?? null,
        ];
    }
}
