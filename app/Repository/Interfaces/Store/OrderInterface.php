<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 2:27 AM
 */

namespace App\Repository\Interfaces\Store;


use App\Http\Requests\Order;

interface OrderInterface
{
    /*
     * @param Order $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function saveOrder(Order $request,ProfileInterface $profile,FeeInterface $fee);

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getOrder(int $id);
}