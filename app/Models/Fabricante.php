<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends BaseModel
{
    protected $fillable = [
        'fabricante',
        'creator',
        'slug',
    ];
}
