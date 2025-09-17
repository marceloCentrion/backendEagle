<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicidadesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "id"=> $this->id,
            "categoria"=> $this->categoria,
            "categoria_displ"=> $this->categoria_displ,
            "cliques"=> $this->cliques,
            "compartilhamentos"=> $this->compartilhamentos,
            "descricao"=> $this->descricao,
            "dt_fim"=> $this->dt_fim,
            "dt_inicio"=> $this->dt_inicio,
            "imagem"=> $this->imagem,
            "link"=> $this->link,
            "link_app"=> $this->link_app,
            "motivo_status"=> $this->motivo_status,
            "parceiro_id"=> $this->parceiro?->id,
            "parceiro_nome"=> $this->parceiro?->nome,
            "status"=> $this->status,
            "titulo"=> $this->titulo,
            "valor"=> $this->valor,
        ];
    }
}
