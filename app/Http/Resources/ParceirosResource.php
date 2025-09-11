<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParceirosResource extends JsonResource
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
            "cnpj"=> $this->cnpj,
            "nome"=> $this->nome,
            "descricao"=> $this->descricao,
            "email"=> $this->email,
            "email_responsavel"=> $this->email_responsavel,
            "fim_periodo"=> $this->fim_periodo,
            "inicio_periodo"=> $this->inicio_periodo,
            "logo"=> $this->logo,
            "nome_responsavel"=> $this->nome_responsavel,
            "segmento"=> $this->segmento,
            "site"=> $this->site,
            "telefone"=> $this->telefone,
            "cidade"=> new CidadeResource($this->cidade),
            "estado"=> new EstadoResource($this->estado),
            "creator"=> $this->creator,
            "slug"=> $this->slug,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at,   
        ];
    }

}
