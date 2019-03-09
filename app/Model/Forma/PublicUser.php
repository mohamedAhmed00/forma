<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PublicUser extends Authenticatable
{
    protected $table='f_publicusers_2019';
    protected $fillable=['fid', 'fullName', 'profile', 'email', 'mobile', 'password', 'gender'];
}
