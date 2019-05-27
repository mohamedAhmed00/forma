<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:22 PM
 */

namespace App\Repository\Interfaces\Store;


interface FeatureInterface
{
    /*
     * @param int $limit = 3
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getFeature(int $limit = 3);
}