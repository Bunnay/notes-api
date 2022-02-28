<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
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
            'id' => $this->when($this->id, $this->id),
            'title' => $this->when($this->title, $this->title),
            'text' => $this->when($this->body, $this->body),
            'image' => $this->when($this->image != null, $this->image->url),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
