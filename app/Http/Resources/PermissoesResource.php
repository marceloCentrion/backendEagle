<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissoesResource extends JsonResource
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
            "criar"=> $this->criar,
            "editar"=> $this->editar,
            "excluir"=> $this->excluir,
            "salva"=> $this->salva,
            "ver"=> $this->ver,
            "menu"=> $this->menu,
            "ordem"=> $this->ordem,
        ];
    }
}
