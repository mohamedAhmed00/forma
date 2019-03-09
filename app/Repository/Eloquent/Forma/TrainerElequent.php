<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:28 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Trainer;
use App\Repository\Interfaces\Forma\TrainerInterface;

class TrainerElequent implements TrainerInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAllTrainers()
    {
        return Trainer::where('type', 'Trainer')->Orderby('orders', 'ASC')->get();
    }

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getGetSingleTrainer(int $id)
    {
        return Trainer::find($id);
    }
}
