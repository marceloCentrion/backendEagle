<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome_completo' => trim($this->nome . ' ' . ($this->sobrenome ?? '')),
            'cpf_cnpj' => $this->maskCpfCnpj($this->cpf_cnpj),
            'telefone' => $this->formatTelefone($this->telefone),
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

    private function maskCpfCnpj($value)
    {
        if (!$value) return null;

        $value = preg_replace('/\D/', '', $value);

        if (strlen($value) === 11) {
            return substr($value, 0, 3) . '.'. substr($value, 0, 3).'.'.substr($value, 0, 3).'-' . substr($value, -2);
        }

        if (strlen($value) === 14) {
            return substr($value, 0, 2) . '.'.substr($value, 0, 3).'.'. substr($value, 0, 3) .'/'. substr($value, 8, 4) . '-' . substr($value, -2);
        }

        return $value;
    }

    private function formatTelefone($value)
    {
        if (!$value) return null;

        $value = preg_replace('/\D/', '', $value);

        if (strlen($value) === 11) {
            return '(' . substr($value, 0, 2) . ') ' . substr($value, 2, 5) . '-' . substr($value, -4);
        }

        if (strlen($value) === 10) {
            return '(' . substr($value, 0, 2) . ') ' . substr($value, 2, 4) . '-' . substr($value, -4);
        }

        return $value;
    }
}
