<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:28 AM
 */

namespace App\Repository\Eloquent\Forma;


use App\Model\Forma\Service;
use App\Repository\Interfaces\Forma\ServiceInterface;

class ServiceElequent implements ServiceInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */

    public function getAllServices()
    {
        return Service::get();
    }
}
