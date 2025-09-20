<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicidade extends BaseModel
{
    protected $fillable = [
        'categoria',
        'categoria_displ',
        'cliques',
        'compartilhamentos',
        'descricao',
        'dt_fim',
        'dt_inicio',
        'imagem',
        'link',
        'link_app',
        'motivo_status',
        'parceiro_id',
        'status',
        'titulo',
        'valor',
        'creator',
        'slug'
    ];

    public function parceiro()
    {
        return $this->belongsTo(Parceiro::class, 'parceiro_id');
    }
}
