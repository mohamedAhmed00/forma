<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class GymEvent extends Model
{
    protected $table='f_classes_schedules_2019';
    protected $fillable=['class_date', 'start_time', 'end_time', 'f_classes_id', 'f_trainers_id'];
}
