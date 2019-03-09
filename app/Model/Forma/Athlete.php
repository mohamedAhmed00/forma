<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $table = 'f_pt_trainer_2019';
    protected $fillable = ['trainer_name', 'trainer_current_job', 'trainer_birthdate', 'trainer_mobile', 'trainer_email', 'trainer_facebook', 'trainer_instgram', 'trainer_about', 'img1', 'img2', 'gender', 'created_at', 'updated_at', 'trainer_status', 'type'];
}
