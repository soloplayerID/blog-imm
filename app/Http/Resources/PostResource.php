<?php

namespace App\Http\Resources;

use Illuminate\Support\Collection;
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
          'judul' => $this->judul,
          'slug' => $this->slug,
          'content' => $this->content,
          'image' => $this->image,
          'category' => $this->category->name,
          'created_date' => $this->created_date,
          'tag' => new TagResource($this->tag),
          'comment' => new CommentResource($this->comments),
        ];
    }
}
