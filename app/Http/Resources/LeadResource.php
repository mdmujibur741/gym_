<?php

namespace App\Http\Resources;

use App\Models\Package;
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
            'email' => $this->email,
            'phone' => $this->phone,
            'age' => $this->age,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'package_id' => $this->interest_package,
             'package' => new PackageResource($this->whenLoaded('package')),
        ]; 
    }
}
