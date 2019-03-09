<?php

namespace App\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subcategories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image', 'description1', 'description2', 'category_id'];


    protected $connection = 'sportStore';

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }

    /*
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function Products(){
        return $this->hasMany(Product::class,'subcategory_id','id');
    }

    /*
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
