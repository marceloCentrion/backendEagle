<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilAcesso extends BaseModel
{
    protected $fillable = [
        'academia_id',
        'ativo',
        'perfil',
        'salvo',
        'tipo_perfil',
        'tipo_usuario',
        'tipo_usuario_display',
        'creator',
        'slug',
    ];

    public function academia()
    {
        return $this->belongsTo(Academia::class, 'academia_id');
    }
}
