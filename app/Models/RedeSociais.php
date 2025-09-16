<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedeSociais extends BaseModel
{
    protected $fillable = [
        'tipo',
        'creator',
        'slug',
    ];
}
