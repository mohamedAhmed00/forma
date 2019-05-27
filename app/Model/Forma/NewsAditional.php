<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class NewsAditional extends Model
{
    protected $table = "f_newscms_additional_2019";
    protected $fillable = ['data', 'img_resized', 'type', 'newsid'];
}
