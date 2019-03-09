<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class PtGallery extends Model
{
    protected $table = 'f_pt_trainer_gallery_2019';
    protected $fillable = ['pt_image', 'pt_resized_image', 'pt_id', 'created_at', 'updated_at'];
}
