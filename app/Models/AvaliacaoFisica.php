<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoFisica extends BaseModel
{
    protected $table = 'avaliacoes_fisicas';
    protected $fillable = [
        'id',
        'altura',
        'aluno_id',
        'peso',
        'gordura_corporal',
        'massa_muscular',
        'imc',
        'data_avaliacao',
        'avaliacao_anterior',
        'registro_exec_treino_id'
    ];
}
