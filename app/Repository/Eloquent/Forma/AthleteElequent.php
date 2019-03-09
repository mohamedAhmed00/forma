<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:26 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Athlete;
use App\Repository\Interfaces\Forma\AthleteInterface;

class AthleteElequent implements AthleteInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAllAthletes()
    {
        return Athlete::where('type', 'Athlete')->Orderby('orders', 'ASC')->get();
    }

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getGetSingleAthlete(int $id)
    {
        return Athlete::find($id);
    }
}
