<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='f_services_2019';
    protected $fillable=['name'];
    public function Gyms()
    {
        return $this->belongsToMany(ActivityDetail::class,'f_activities_services_2019','f_services_2019_id','f_activities_details_2019_id');
    }
}
