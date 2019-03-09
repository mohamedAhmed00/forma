<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/5/19
 * Time: 12:19 AM
 */

namespace App\Repository\Interfaces\Forma;

use Illuminate\Http\Request;

interface ActivityDetailInterface
{
    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSingleActivityDetail(int $id);

    /*
     * @param Request $request
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function ActivityDetailsFilter(Request $request);

    /*
    * @param int $id
    * @return Mix
    * @auther Nader Ahmed
    **/
    public function getActivityDetailsByActivity($id);

    /*
    * @return Mix
    * @auther Nader Ahmed
    **/
    public function getOnlineDoctor();
}
