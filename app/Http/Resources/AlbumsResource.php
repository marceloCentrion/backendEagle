<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "cover"=> $this->cover,
            "cover_img"=> $this->cover_img,
            "nome_album"=> $this->nome_album,
            "publicacao_id"=> $this->publicacao_id,
            "tinyurl"=> $this->tinyurl,
                ];    }
}
