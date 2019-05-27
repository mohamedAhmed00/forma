<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:26 AM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Product;
use App\Repository\Interfaces\Store\ProductInterface;

class ProductElequent implements ProductInterface
{
    /*
     * @param string $type ,int $limit = 20
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSomeProduct(string $type ,int $limit = 20)
    {
        return Product::where($type, 'yes')->limit($limit)->get();
    }

    /*
     * @param int $limit = 4
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getNewProduct(int $limit = 4)
    {
        return Product::OrderBy('created_at','DESC')->limit($limit)->get();
    }

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getProduct(int $id)
    {
        return Product::find($id);
    }

    /*
     * @param string $str
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getProductByFlages(string $str)
    {
        return Product::where('is_' . $str, 'yes')->paginate(20);
    }

    /*
     * @param string $keyword, int $category_id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductByName(string $keyword, int $category_id)
    {
        return Product::Where('category_id', 'like', '%'. $category_id .'%')->where('title', 'like', '%'.$keyword.'%')->orWhere('tags', 'like', '%'.$keyword.'%')->orWhere('description', 'like', '%'.$keyword.'%')->paginate(20);
    }

    /*
     * @param int $category_id , $min , $max
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductByPrice(int $category_id , $min , $max)
    {
        return Product::whereBetween('price', array($min,$max))->Where('category_id', $category_id)->paginate(20);
    }

    /*
     * @param int $category_id , string $color
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductByColor(int $category_id , string $color)
    {
        return Product::Where('category_id', 'like', '%'.$category_id.'%')->where('color', 'like', '%'.$color.'%')->paginate(20);
    }

    /*
     * @param int $category_id , string $size
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductBySize(int $category_id , string $size)
    {
        return Product::where('size', 'like', '%'.$size.'%')->Where('category_id', 'like', '%'.$category_id.'%')->paginate(20);
    }


}
