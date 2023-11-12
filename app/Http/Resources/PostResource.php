<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id_post"=>$this->id_post,
            "name_post"=>$this->name_post,
            "img_post"=>$this->img_post,
            "video_post"=>$this->video_post,
            "name_teacher"=>$this->name_teacher,
            "img_teacher"=>$this->img_teacher,
            "date_post"=>$this->date_post,
            "zoom"=>ZoomResource::make($this->zoom)->only('name_zoom'),
            "objects"=>ObjectsResource::make($this->objects)->only('name_object'),
        ];
    }
}
