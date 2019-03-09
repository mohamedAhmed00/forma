<?php

namespace App\Model\Store;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'f_deliveryfees_2019';
    protected $fillable = ['locations', 'fees'];
    protected $connection = 'sportStore';

}
