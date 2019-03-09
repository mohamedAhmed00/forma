<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:14 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Offer;
use App\Repository\Interfaces\Store\OfferInterface;

class OfferElequent implements OfferInterface
{
    /*
     * @param int $limit
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getOffer(int $limit = 3)
    {
        return Offer::orderBy('created_at','DESC')->limit($limit)->get();
    }
}