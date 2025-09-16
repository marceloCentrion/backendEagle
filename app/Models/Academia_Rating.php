<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academia_Rating extends BaseModel
{
    protected $fillable = [
        "academia_id",
        "rating",
        "creator",
        "slug"
    ];
}
