<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReminderResource extends JsonResource
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
                'user_id' => $this->user_id,
                'lead_id' => $this->lead_id,
                'reminder' => $this->reminder,
                'reminder_date' => $this->reminder_date,
                'note' => $this->note,
                'status' => $this->status,
                'lead' => new LeadResource($this->whenLoaded('lead')),
         ];
    }
}
