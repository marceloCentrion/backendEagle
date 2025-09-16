<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends BaseModel
{
    protected $table = 'permissoes';
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'creator',
        'slug',
    ];
}
