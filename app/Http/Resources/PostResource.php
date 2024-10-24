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
        return [
            "id"=>$this->id,
            "title"=>$this->title,
            "content"=>$this->content,
            "author"=>$this->author,
            "category"=>$this->category,
            "createdAt"=>$this->created_at,
            "updatedAt"=>$this->updated_at,
        ];
    }
}
