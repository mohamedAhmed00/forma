<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'f_newscms_data_2019';
    protected $fillable = [
        'posttitle', 'shortdescription', 'fulldescription', 'category_id', 'subcategory_id', 'post_active', 'post_startdate',
        'post_enddate', 'post_image', 'post_imageresized', 'postdisplay_order', 'post_front','post_lang'
    ];

    /**
     * @auther Nader Ahmed
     * @return Relations
     * */
    public function getData(){
        return $this->hasMany(NewsAditional::class,'newsid','id');
    }

    public function Category(){
        return $this->belongsTo(NewsCategory::class,'category_id');
    }
}
