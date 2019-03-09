<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:14 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\SliderSay;
use App\Repository\Interfaces\Store\SliderSayInterface;

class SliderSayElequent implements SliderSayInterface
{
    /*
     * @param int $limit = 6
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getSlider(int $limit = 6)
    {
        return SliderSay::orderBy('created_at','DESC')->limit($limit)->get();
    }
}