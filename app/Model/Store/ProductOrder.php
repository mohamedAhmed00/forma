<?php

namespace App\Model\Store;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $table = 'product_order';
    protected $fillable = ['product_id', 'qty', 'color_name', 'size_name', 'order_id'];
    protected $connection = 'sportStore';}
