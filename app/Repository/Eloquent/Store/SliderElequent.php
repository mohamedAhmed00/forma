<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:26 AM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Slider;
use App\Repository\Interfaces\Store\SliderInterface;

class SliderElequent implements SliderInterface
{
    /*
     * @param int $limit = 3
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSliderImages(int $limit = 3)
    {
        return Slider::orderBy('created_at', 'DESC')->limit($limit)->get();
    }
}
