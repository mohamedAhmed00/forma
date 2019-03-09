<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:21 AM
 */

namespace App\Repository\Interfaces\Forma;


interface MembershipInterface
{
    /*
     * @param int $limit
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getMemberShips (int $limit = 3);
}
