<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends BaseModel
{
    protected $table = 'permissoes';
    protected $fillable = [
        'id',
        'criar',
        'editar',
        'excluir',
        'salva',
        'ver',
        'menu',
        'ordem',
    ];
}
