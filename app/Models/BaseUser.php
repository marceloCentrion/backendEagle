<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\HasCustomId;

class BaseUser extends Authenticatable
{
    use HasCustomId;
}
