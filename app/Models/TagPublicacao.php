<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagPublicacao extends BaseModel
{
     protected $fillable = [
        'id',
        'publicacao_id',
        'creator',
        'slug',
    ];

    public function publicacao()
    {
        return $this->belongsTo(Publicacao::class, 'publicacao_id', 'id');
    }
}
