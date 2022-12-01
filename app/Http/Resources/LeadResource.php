<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->phone,
            'phone' => $this->phone,
            'age' => $this->age,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'interest_package' => $this->interest_package,
            'branch_id' => $this->branch_id,
        ]; 
    }
}
