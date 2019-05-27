<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 2:29 AM
 */

namespace App\Repository\Eloquent\Store;

use Cart;
use App\Model\Store\Delivery;
use App\Repository\Interfaces\Store\FeeInterface;

class FeeElequent implements FeeInterface
{
    /*
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getLocations()
    {
        return Delivery::get();
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getFees($id)
    {
        $total = 0 ;
        foreach(Cart::instance('cart')->content() as $cart)
        {
            $total += $cart->price;
        }
        $total += (int)Delivery::find($id)->fees;
        return $total;
    }

    public function getFeesById($id)
    {
        return Delivery::find($id);
    }
}