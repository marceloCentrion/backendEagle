<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PerfilAcessosResource extends JsonResource
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
            "academia_id"=> $this->academia?->id,
            "academia_nome"=> $this->academia?->nome,
            "ativo"=> $this->ativo,
            "perfil"=> $this->perfil,
            "salvo"=> $this->salvo,
            "tipo_perfil"=> $this->tipo_perfil,
            "tipo_usuario"=> $this->tipo_usuario,
            "tipo_usuario_display"=> $this->tipo_usuario_display,
        ];
    }
}
