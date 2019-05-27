<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:26 PM
 */

namespace App\Repository\Interfaces\Store;


interface SliderSayInterface
{
    /*
     * @param int $limit = 6
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getSlider(int $limit = 6);
}