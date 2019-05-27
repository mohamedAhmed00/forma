<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:15 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Feature;
use App\Repository\Interfaces\Store\FeatureInterface;

class FeatureElequent implements FeatureInterface
{
    /*
     * @param int $limit = 3
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getFeature(int $limit = 3)
    {
        return Feature::orderBy('created_at','DESC')->limit($limit)->get();
    }
}