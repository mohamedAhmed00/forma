<?php

namespace App\Model\Store;

use App\Model\Store\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['title', 'description', 'rating', 'tags', 'in_stock', 'is_featured', 'is_high_performance', 'is_best_selling', 'is_new_arrival', 'is_big_sale', 'is_exclusive', 'is_special_offer', 'size', 'price', 'category_id', 'subcategory_id', 'feature'];


    protected $connection = 'sportStore';

    public function Images()
    {
        return $this->hasMany(gallery::class);
    }

    public function Order()
    {
        return $this->belongsToMany(Order::class,'product_order','product_id','order_id');
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function SubCategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
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
}
