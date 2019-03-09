<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:27 AM
 */

namespace App\Repository\Eloquent\Forma;


use App\Model\Forma\Membership;
use App\Repository\Interfaces\Forma\MembershipInterface;

class MembershipElequent implements MembershipInterface
{
    /*
     * @param int $limit
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getMemberShips (int $limit = 3)
    {
        return Membership::limit($limit)->get();
    }
}
