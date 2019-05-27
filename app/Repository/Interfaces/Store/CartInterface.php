<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 7:44 PM
 */

namespace App\Repository\Interfaces\Store;


use App\Model\Store\Product;
use Illuminate\Http\Request;

interface CartInterface
{
    /*
     * @param Product $product
     * @auther Nader Ahmed
     * @return void
     * */
    public function addItemToCart(Product $product);

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return void
     * */
    public function RemoveItemFromCart(string $id);

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function updateCart(Request $request);

    /*
     * @auther Nader Ahmed
     * @return string
     * */
    public function parseHtml();

}