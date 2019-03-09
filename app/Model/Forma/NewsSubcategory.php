<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class NewsSubcategory extends Model
{
    protected $table = 'f_newscms_subcategories_2019';
    protected $fillable = ['newscmssubcategoy', 'newscmsimage_sub', 'newscmsimage_sub_resized', 'f_newscms_categories_id', 'newscms_textcolor', 'newscms_backgroundcolor'];

    /*
     * @auther Nader Ahemd
     * @return Collection
     * */
    function getNews()
    {
        return $this->hasMany(News::class,'subcategory_id','id')->where('post_active','True')->orderBy('postdisplay_order');
    }

    /*
     * @auther Nader Ahemd
     * @return Collection
     * */
    function Category()
    {
        return $this->belongsTo(NewsCategory::class,'f_newscms_categories_id')->orderBy('newscmsorder','ASC');
    }
}
