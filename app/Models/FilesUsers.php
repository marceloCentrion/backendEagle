<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilesUsers extends BaseModel
{
    protected $fillable = [
        'id', 
        'arquivo'
    ];
}
