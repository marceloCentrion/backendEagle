<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends BaseModel
{
    protected $fillable = [
        "nome",
        "estado_id",
        "creator",
        "slug"
    ];
}
