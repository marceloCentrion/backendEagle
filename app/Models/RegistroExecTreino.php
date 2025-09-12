<?php

namespace App\Models;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Model;

class RegistroExecTreino extends BaseModel
{
     protected $fillable = [
        'id',
        'aluno_id',
        'calorias',
        'execicios_concluidos',
        'tempo',
        'treino_id',
        'data',
        'creator',
        'slug',
    ];

    public function aluno()
    {
        return $this->belongsTo(User::class, 'aluno_id');
    }

    public function treino()
    {
        return $this->belongsTo(Treino::class, 'treino_id');
    }
}
