<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 1:59 AM
 */

namespace App\Repository\Interfaces\Store;


use App\Http\Requests\SaveProfile;

interface ProfileInterface
{
    /*
     * @auther Nader Ahmed
     * @return Object
     * */
    public function getUserProfile();

    /*
     * @param SaveProfile $request
     * @auther Nader Ahmed
     * @return Object
     * */
    public function saveProfileData(SaveProfile $profile);
}