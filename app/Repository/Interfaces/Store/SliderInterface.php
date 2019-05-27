<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:20 AM
 */

namespace App\Repository\Interfaces\Store;


interface SliderInterface
{
    /*
     * @param int $limit = 3
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSliderImages(int $limit = 3);
}
