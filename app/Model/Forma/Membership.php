<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'f_membership_2019';
    protected $fillable = ['membership_name', 'membership_price', 'membership_discount', 'membership_desc'];
}
