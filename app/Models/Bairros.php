<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bairros extends BaseModel
{
    protected $fillable = [
        'bairro',
        'cidade_id',
        'creator',
        'slug',
    ];
}
