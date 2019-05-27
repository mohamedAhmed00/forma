<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:21 PM
 */

namespace App\Repository\Interfaces\Store;


interface ClientInterface
{
    /*
     * @param int $limit = 16
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getClient(int $limit = 16);
}