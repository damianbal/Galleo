<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class GalleryImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'url' => url('/') . Storage::url( $this->url ),
            'title' => $this->title,
            'description' => $this->description, 
            'thumb_url' => url('/') . Storage::url($this->thumb_url),
            'added_ago' => $this->created_at->diffForHumans(),
        ];
    }
}
