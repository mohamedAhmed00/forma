<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:27 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Location;
use App\Repository\Interfaces\Forma\LocationInterface;

class LocationElequent implements LocationInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAllLocations()
    {
        return Location::get();
    }
}
