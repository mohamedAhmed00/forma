<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:18 AM
 */

namespace App\Repository\Interfaces\Forma;


interface AthleteInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAllAthletes();

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getGetSingleAthlete(int $id);
}
