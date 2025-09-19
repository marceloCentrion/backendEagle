<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvalicacaoFisicaResource extends JsonResource
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
            'altura' => $this->altura,
            'aluno_id' => $this->aluno?->id,
            'aluno_nome' => $this->aluno?->nome,
            'nome' => $this->nome,
            'data_avaliacao' => $this->data_avaliacao,
            'data_proxima_avaliacao' => $this->data_proxima_avaliacao,
            'dc_abdominal' => $this->dc_abdominal,
            'dc_axilar_media' => $this->dc_axilar_media,
            'dc_coxa' => $this->dc_coxa,
            'dc_panturrilha' => $this->dc_panturrilha,
            'dc_peitoral' => $this->dc_peitoral,
            'dc_subscapular' => $this->dc_subscapular,
            'dc_suprailiaca' => $this->dc_suprailiaca,
            'dc_tricipital' => $this->dc_tricipital,
            'id_agendamento' => $this->id_agendamento,
            'imc' => $this->imc,
            'massa_gorda' => $this->massa_gorda,
            'massa_magra' => $this->massa_magra,
            'observaoes' => $this->observaoes,
            'per_d_antebraco' => $this->per_d_antebraco,
            'per_d_braco' => $this->per_d_braco,
            'per_d_coxa' => $this->per_d_coxa,
            'per_d_panturrilha' => $this->per_d_panturrilha,
            'per_e_antebraco' => $this->per_e_antebraco,
            'per_e_braco' => $this->per_e_braco,
            'per_e_coxa' => $this->per_e_coxa,
            'per_e_paturrilha' => $this->per_e_paturrilha,
            'per_g_abdomen' => $this->per_g_abdomen,
            'per_g_cintura' => $this->per_g_cintura,
            'per_g_ombro' => $this->per_g_ombro,
            'per_g_quadril' => $this->per_g_quadril,
            'per_g_torax' => $this->per_g_torax,
            'peso' => $this->peso,
            'pgc' => $this->pgc,
            'rcq' => $this->rcq,
            'registro_exec_treino_id'=> $this->registro_exec_treino_id,
            'avaliacao_anterior'=>$this->avaliacao_anterior
        ];
    }
}
