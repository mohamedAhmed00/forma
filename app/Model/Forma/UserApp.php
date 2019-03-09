<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class UserApp extends Model
{
    protected $table='f_sys_users_2019';
    protected $fillable=['username', 'password', 'role', 'last_login'];
}
