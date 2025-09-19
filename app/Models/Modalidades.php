<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modalidades extends BaseModel
{
    protected $table = 'modalidades';
    protected $fillable = ['id', 'modalidade', 'creator', 'slug'];
}
