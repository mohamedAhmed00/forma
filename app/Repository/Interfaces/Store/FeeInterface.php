<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 2:29 AM
 */

namespace App\Repository\Interfaces\Store;


interface FeeInterface
{
    /*
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getLocations();

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getFees($id);

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getFeesById($id);
}