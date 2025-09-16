<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends BaseModel
{
    protected $fillable = [
        "cover",
        "cover_img",
        "nome_album",
        "publicacao_id",
        "tinyurl",
    ];

    public function publicacao()
    {
        return $this->belongsTo(Publicacao::class, 'publicacao_id', 'id');
    }
}
