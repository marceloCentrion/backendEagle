<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreinoResource extends JsonResource
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
            'nome' => $this->nome,
            'nome_treinos' => $this->nome_treinos,
            'interno' => $this->interno,
            'grupo_muscular' => new GruposMuscularesResource($this->grupoMuscular),
            'academia' => new AcademiaResource($this->academia),
            'creator' => $this->creator,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
