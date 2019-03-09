<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:11 AM
 */

namespace App\Repository\Interfaces\Forma;


interface ActivityInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAllActivity();

    /*
     * @params int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getActivityGyms(int $id);

    /*
     * @params int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getSingleActivity($id);
}
