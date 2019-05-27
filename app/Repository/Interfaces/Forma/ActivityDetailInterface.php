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
     * @param Request $request
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function ActivityDetailsFilter(Request $request);


    /*
    * @return Mix
    * @auther Nader Ahmed
    **/
    public function getOnlineDoctor();
}
