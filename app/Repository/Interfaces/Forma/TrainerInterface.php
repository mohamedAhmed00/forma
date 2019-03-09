<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:24 AM
 */

namespace App\Repository\Interfaces\Forma;


interface TrainerInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getAllTrainers();

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getGetSingleTrainer(int $id);
}
