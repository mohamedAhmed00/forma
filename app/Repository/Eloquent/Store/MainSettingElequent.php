<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:11 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\MainSetting;
use App\Repository\Interfaces\Store\MainSettingInterface;

class MainSettingElequent implements MainSettingInterface
{
    /*
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getMain()
    {
        return MainSetting::get()->first();
    }
}