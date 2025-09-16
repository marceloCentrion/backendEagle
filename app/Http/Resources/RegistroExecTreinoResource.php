<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistroExecTreinoResource extends JsonResource
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
            'aluno' => new UserResource($this->aluno),
            'treino' => new RegistroExecTreinoResource($this->treino),
            'calorias' => $this->calorias,
            'execicios_concluidos' => $this->execicios_concluidos,
            'tempo' => $this->tempo,
            'data' => $this->data,
            'creator' => $this->creator,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
