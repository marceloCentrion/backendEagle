<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicacao extends BaseModel
{
    protected $fillable = [
        'codigo',
        'user_id',
        'creator',
        'slug',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
