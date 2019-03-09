<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:12 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Activity;
use App\Repository\Interfaces\Forma\ActivityInterface;

class ActivityElequent implements ActivityInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */

    public function getAllActivity()
    {
        return Activity::Orderby('order_list', 'ASC')->get();
    }

    /*
     * @params int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getActivityGyms(int $id)
    {
        return Activity::find($id)->gyms;
    }

    /*
     * @params int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getSingleActivity($id)
    {
        return Activity::find($id);
    }
}
