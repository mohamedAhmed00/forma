<?php

namespace App\Model\Forma;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'f_newscms_categories_2019';
    protected $fillable = ['newscmscategoy', 'newscmsimage', 'newscmsimage_resized', 'newscmsorder'];

    public function SubCategory(){
        return $this->hasMany(NewsSubcategory::class,'f_newscms_categories_id','id');
    }
}
