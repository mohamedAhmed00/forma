<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class GymActivities extends Model
{
    protected $table='f_gym_activities_2019';
    protected $fillable=['name','gym_id'];
}
