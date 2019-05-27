<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 1:58 AM
 */

namespace App\Repository\Eloquent\Store;

use App\Http\Requests\SaveProfile;
use App\Model\Forma\PublicUser;
use Auth;
use App\Repository\Interfaces\Store\ProfileInterface;

class ProfileElequent implements ProfileInterface
{
    /*
     * @auther Nader Ahmed
     * @return Object
     * */
    public function getUserProfile()
    {
        return Auth::guard('customer')->user();
    }

    /*
     * @param SaveProfile $request
     * @auther Nader Ahmed
     * @return Object
     * */
    public function saveProfileData(SaveProfile $request)
    {
        $data = $request->all();
        if(!empty($data['password'])){
            $data['password'] = bcrypt($data['password']);
        }
        PublicUser::find($this->getUserProfile()->id)->update($data);
    }
}