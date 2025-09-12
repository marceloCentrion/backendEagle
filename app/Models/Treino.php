<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treino extends BaseModel
{
    protected $fillable = [
        'id',
        'grupo_muscular_id',
        'academia_id',
        'interno',
        'nome',
        'nome_treinos',
        'creator',
        'slug',
    ];

    public function grupoMuscular()
    {
        return $this->belongsTo(GruposMusculares::class, 'grupo_muscular_id');
    }

    public function academia()
    {
        return $this->belongsTo(Academia::class, 'academia_id');
    }
}
