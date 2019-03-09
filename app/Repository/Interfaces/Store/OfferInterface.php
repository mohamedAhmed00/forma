<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:25 PM
 */

namespace App\Repository\Interfaces\Store;


interface OfferInterface
{
    /*
     * @param int $limit
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getOffer(int $limit = 3);
}