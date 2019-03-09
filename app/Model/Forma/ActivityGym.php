<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class ActivityGym extends Model
{
    protected $table='f_activites_activitiesdetailes_2019';
    protected $fillable=['f_activites_id','f_activities_details_id'];
    public $timestamps = false;
}
