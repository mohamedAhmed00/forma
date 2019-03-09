<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:15 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\InstgramChannle;
use App\Repository\Interfaces\Store\InstgramChannleInterface;

class InstgramChannleElequent implements InstgramChannleInterface
{
    /*
     * @param int $limit = 8
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getInstgramChannle(int $limit = 8)
    {
        return InstgramChannle::orderBy('created_at','DESC')->limit($limit)->get();
    }
}