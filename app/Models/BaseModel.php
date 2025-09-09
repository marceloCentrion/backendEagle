<?php

namespace App\Models;

use App\Traits\HasCustomId;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasCustomId;
}
