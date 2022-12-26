<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvideResource extends JsonResource
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
            'title_1stLine' => $this->title_1stLine,
            'title' => $this->title,
            'point_one' => $this->point_one,
            'point_two' => $this->point_two,
            'point_three' => $this->point_three,
            'point_four' => $this->point_four,
            'image' => asset('/storage/'. $this->image),
         ];
    }
}
