<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 7:45 PM
 */

namespace App\Repository\Interfaces\Store;

use App\Model\Store\Product;

interface WishlistInterface
{
    /*
     * @param Product $product
     * @auther Nader Ahmed
     * @return void
     * */
    public function addItemToWishlist(Product $product);

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return void
     * */
    public function RemoveItemFromWishlist(string $id);

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return string
     * */
    public function checkItemToRemoveIt($id);

    /*
     * @auther Nader Ahmed
     * @return string
     * */
    public function count();

}