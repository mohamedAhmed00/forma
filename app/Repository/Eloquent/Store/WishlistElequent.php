<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 7:46 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Product;
use App\Repository\Interfaces\Store\WishlistInterface;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistElequent implements WishlistInterface
{
    /*
     * @param Product $product
     * @auther Nader Ahmed
     * @return int
     * */
    public function addItemToWishlist(Product $product)
    {
        Cart::instance('wishlist')->add(['id' => $product->id, 'name' => $product->title, 'qty' => 1, 'price' =>  $product->price,'options' => ['image' => isset($product->Images[0])? $product->Images[0]->image : '']]);
        return Cart::instance('wishlist')->count();
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return Object
     * */
    public function RemoveItemFromWishlist(string $id)
    {
        Cart::instance('wishlist')->remove($id);
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return string
     * */
    public function checkItemToRemoveIt($id)
    {
        $wishlist = Cart::instance('wishlist')->content();
        foreach($wishlist as $wish)
        {
            if($wish->id == $id)
            {
                Cart::instance('wishlist')->remove($wish->rowId);
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
        return Cart::instance('wishlist')->count();
    }

    private function getProductImages(int $id){
        $product = Product::find($id);
        return $product->Images;
    }
}