<?php

namespace App\Model\Store;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
    protected $fillable = ['title', 'image', 'description'];


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
     * @return Collection
     * */
    public function SubCategory()
    {
        return $this->hasMany(Subcategory::class,'category_id','id');
    }

    /*
     * @auther Nader Ahmed
     * @return Collection
     * */
    public function Products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}
