<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoFisica extends BaseModel
{
    protected $table = 'avaliacoes_fisicas';
    protected $fillable = [
        'altura',
        'aluno_id',
        'nome',
        'data_avaliacao',
        'data_proxima_avaliacao',
        'dc_abdominal',
        'dc_axilar_media',
        'dc_coxa',
        'dc_panturrilha',
        'dc_peitoral',
        'dc_subscapular',
        'dc_suprailiaca',
        'dc_tricipital',
        'id_agendamento',
        'imc',
        'massa_gorda',
        'massa_magra',
        'observaoes',
        'per_d_antebraco',
        'per_d_braco',
        'per_d_coxa',
        'per_d_panturrilha',
        'per_e_antebraco',
        'per_e_braco',
        'per_e_coxa',
        'per_e_paturrilha',
        'per_g_abdomen',
        'per_g_cintura',
        'per_g_ombro',
        'per_g_quadril',
        'per_g_torax',
        'peso',
        'pgc',
        'rcq',
        'registro_exec_treino_id',
        'avaliacao_anterior',
        'creator',
        'slug',
    ];


    public function aluno()
    {
        return $this->belongsTo(User::class, 'aluno_id');
    }
    public function registroExecTreino()
    {
        return $this->belongsTo(RegistroExecTreino::class, 'registro_exec_treino_id');
    }

}
