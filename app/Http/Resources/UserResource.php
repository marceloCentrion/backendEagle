<?php

namespace App\Http\Resources;

use App\Models\Academia;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome_completo' => trim($this->nome . ' ' . ($this->sobrenome ?? '')),
            'id_academia' =>$this->academia?->id,
            'nome_academia' =>$this->academia?->nome,
            'nome_cidade'=> $this->cidade?->nome,
            'nome_estado'=> $this->estado?->estado,
            'cpf_cnpj' => $this->cpf_cnpj,
            'telefone' => $this->telefone,
            'tipo_usuario' => $this->tipo_usuario,
            'nivel' => $this->nivel,
            'aluno_ativo' => $this->aluno_status === 'ATIVO',
            'email' => $this->email,
            'nacionalidade' => $this->nacionalidade,
            'nome_exibicao_perfil' => $this->nome_exibicao_perfil,
            'profile' => $this->profile,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
