<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicacaosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
          return [
            'id' => $this->id,
            'arquivada' => $this->arquivada,
            'excluida' => $this->excluida,
            'imagem' => $this->imagem,
            'texto' => $this->texto,
            'tinyurl' => $this->tinyurl,
            'uid_48h' => $this->uid_48h,
            'video' => $this->video,
            'video_file' => $this->video_file,
            'creator' => $this->creator,
            'slug' => $this->slug,
            'registro_exec_treino' => $this->registroExecTreino?->id,
            'tag_publicacao' => $this->tagPublicacao?->id,
            'user_mencionado' => $this->userMencionado?->nome,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
