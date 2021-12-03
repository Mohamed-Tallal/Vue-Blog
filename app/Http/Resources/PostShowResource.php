<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostShowResource extends JsonResource
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
            'id' => $this->id,
            'tittle' => $this->tittle ,
            'image' => url('dashboard_files/images/'.$this->image),
            'desc' => $this->desc ,
            'created_at' => $this->created_at->diffForHumans() ,
            'user_name' => $this->user->name,
            'user_id' => $this->user->id,
            'category_name' => $this->category->tittle,
            'category_id' => $this->category->id,
            'comments_count' =>  $this->comments->count() + $this->replys->count(),
            'comments' =>  CommentResource::collection($this->whenLoaded('comments')),
            'tages' => TagResource::collection($this->whenLoaded('tags')),
        ];
    }
}
