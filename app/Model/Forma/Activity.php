<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table ='f_activites_2019';
    protected $fillable=['activites_type', 'img_main', 'img_resize','web_img','web_img2','description','order_list' ,'activites_status'];
    public function Gyms()
    {
        return $this->belongsToMany(ActivityDetail::class,'f_activites_activitiesdetailes_2019','f_activites_id','f_activities_details_id');
    }

}
