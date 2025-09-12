<?php

namespace App\Models;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends BaseModel
{
     protected $fillable = [
        'arquivada',
        'excluida',
        'imagem',
        'registro_exec_treino_id',
        'tag_publicacaos_id',
        'texto',
        'tinyurl',
        'uid_48h',
        'user_mencionado',
        'video',
        'video_file',
        'creator',
        'slug',
    ];

    public function registroExecTreino()
    {
        return $this->belongsTo(RegistroExecTreino::class, 'registro_exec_treino_id');
    }

    public function tagPublicacao()
    {
        return $this->belongsTo(TagPublicacao::class, 'tag_publicacaos_id');
    }

    public function userMencionado()
    {
        return $this->belongsTo(User::class, 'user_mencionado');
    }
}
