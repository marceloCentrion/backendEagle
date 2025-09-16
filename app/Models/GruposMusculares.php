<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GruposMusculares extends BaseModel
{
    protected $fillable = [
        'academia_id',
        'interno',
        'nome',
        'creator',
        'slug',
    ];
}
