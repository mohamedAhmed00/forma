<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class ActivityService extends Model
{
    protected $table='f_activities_services_2019';
    protected $fillable=['f_services_2019_id','f_activities_details_2019_id'];
    public $timestamps = false;
}
