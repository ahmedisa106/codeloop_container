<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'user_name' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'code' => $this->code,
            'company' => $this->company_id,
            'type' => $this->job_type,
            'branch' => $this->branch->id,
            'branch_name' => $this->branch->name,
            'nationality' => $this->nationality,
            'status' => $this->status

        ];
    }
}
