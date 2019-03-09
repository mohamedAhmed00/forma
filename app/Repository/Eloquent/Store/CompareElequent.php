<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 7:46 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Product;
use App\Repository\Interfaces\Store\Comparinterface;
use Gloudemans\Shoppingcart\Facades\Cart;

class CompareElequent implements Comparinterface
{
    /*
     * @auther Nader Ahmed
     * @return object
     * */
    public function getCompareContent(){
        return Cart::instance('compare')->content();
    }

    /*
     * @param $int $limit = 4
     * @auther Nader Ahmed
     * @return object
     * */
    public function getCompareContentChuncks(int $limit = 4){
        return array_chunk($this->getCompareContent()->toarray(),$limit);
    }

    /*
     * @param Product $product
     * @auther Nader Ahmed
     * @return int
     * */
    public function addItemToCompare(Product $product)
    {
        Cart::instance('compare')->add(['id' => $product->id, 'name' => $product->title, 'qty' => 1, 'price' =>  $product->price,
            'options' => ['image' => isset($product->Images[0])? $product->Images[0]->image : '','product' => $product,'color' => $product->Images]]);
        return Cart::instance('compare')->count();
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return Object
     * */
    public function RemoveItemFromCompare(string $id)
    {
        Cart::instance('compare')->remove($id);
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return string
     * */
    public function checkItemToRemoveIt($id)
    {
        $wishlist = Cart::instance('compare')->content();
        foreach($wishlist as $wish)
        {
            if($wish->id == $id)
            {
                Cart::instance('compare')->remove($wish->rowId);
                $action = 'remove';
                return $action;
            }
        }
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return string
     * */
    public function count()
    {
        return Cart::instance('compare')->count();
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return object
     * */
    private function getProductImages(int $id){
        $product = Product::find($id);
        return $product->Images;
    }
}