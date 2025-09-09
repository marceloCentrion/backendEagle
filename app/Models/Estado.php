<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends BaseModel
{
    protected $fillable = [
        'id',
        'codigo',
        'estado',
        'sigla',
        'creator',
        'slug',
    ];
}
