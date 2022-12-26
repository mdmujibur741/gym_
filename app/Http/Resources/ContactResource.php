<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
                 'id' => $this->id,
                 'name' => $this->name,
                 'email' => $this->email,
                 'phone' => $this->phone,
                 'message' => $this->message,
                 'created_at' => date('d-m-Y h:i A', strtotime($this->created_at)),
        ];
    }
}
