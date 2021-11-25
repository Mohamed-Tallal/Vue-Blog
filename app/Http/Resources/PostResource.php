<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'desc' => $this->small_desc ,
            'created_at' => $this->created_at->diffForHumans() ,
            'user_name' => $this->user->name,
            'user_id' => $this->user->id,
            'category_name' => $this->category->tittle,
            'category_id' => $this->category->id,
            'comments' => $this->comments->count() + $this->replys->count()  ,
            'tages' => $this->tags,
        ];
    }


}
