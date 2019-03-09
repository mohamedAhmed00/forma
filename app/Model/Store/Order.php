<?php

namespace App\Model\Store;

use App\Model\Store\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'order_username', 'order_email', 'order_mobile', 'address', 'additional_info', 'delivaryFees_id', 'date', 'total', 'payment'];
    protected $connection = 'sportStore';

    public function Products()
    {
        return $this->belongsToMany(Product::class,'product_order','order_id','product_id')->withPivot('qty');
    }

}
