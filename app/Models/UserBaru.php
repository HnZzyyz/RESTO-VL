<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserBaru extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $table = 'user_barus';

    protected $primaryKey = 'id_user';
    protected $guarded = [];
}
