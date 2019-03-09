<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:23 PM
 */

namespace App\Repository\Interfaces\Store;


interface InstgramChannleInterface
{
    /*
     * @param int $limit = 8
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getInstgramChannle(int $limit = 8);
}