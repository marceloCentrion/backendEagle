<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AcademiaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'cnpj' => $this->maskCnpj($this->cnpj),
            'cep' => $this->formatCep($this->cep),
            'telefone' => $this->formatTelefone($this->telefone),
            'email' => $this->email,
            'email_responsavel' => $this->email_responsavel,
            'responsavel' => $this->responsavel,
            'site' => $this->site,
            'localidade' => $this->localidade,
            'endereco' => $this->endereco,
            'horario' => $this->horario,
            'info_adicionais' => $this->info_adicionais,
            'receber_atualizacoes_semanais' => $this->receber_atualizacoes_semanais,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    private function maskCnpj($value)
    {
        if (!$value) return null;

        $value = preg_replace('/\D/', '', $value);

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

    private function formatCep($value)
    {
        if (!$value) return null;

        $value = preg_replace('/\D/', '', $value);

        if (strlen($value) === 8) {
            return substr($value, 0, 5) . '-' . substr($value, -3);
        }

        return $value;
    }
}
