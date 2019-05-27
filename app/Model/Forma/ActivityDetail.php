<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class ActivityDetail extends Model
{
    protected $table='f_activities_details_2019';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity_type_name', 'placeLat' , 'placelong', 'info', 'location', 'address', 'mobile', 'landline', 'website', 'facebook', 'twitter', 'instagram',  'img_main','img_resized','period',
        'working_hours_per_day', 'working_days', 'activity_url','is_online', 'activities_status','vision','mession','packages_month', 'packages_half_year', 'packages_year','reservation_count'
    ];
    public function Services()
    {
        return $this->belongsToMany(Service::class,'f_activities_services_2019','f_activities_details_2019_id','f_services_2019_id');
    }

    public function Activities()
    {
        return $this->belongsToMany(Activity::class,'f_activites_activitiesdetailes_2019','f_activities_details_id','f_activites_id');
    }
    public function Location(){
        return $this->belongsTo(Location::class,'location','id');
    }
}
