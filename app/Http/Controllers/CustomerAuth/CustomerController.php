<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveProfile;
use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\ProfileInterface;

class CustomerController extends Controller
{
    /*
     * @auther Nader Ahmed
     * @return View
     * */
    public function getProfile(MainSettingInterface $mainSetting,CategoryInterface $category,ProfileInterface $profile)
    {
        $user =  $profile->getUserProfile();
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $page = "";
        return view('online_store.account',compact(['setting','page','categories','user']));
    }

    /*
     * @param SaveProfile
     * @auther Nader Ahmed
     * @return View
     * */
    public function saveProfile(SaveProfile $request,ProfileInterface $profile)
    {
        $profile->saveProfileData($request);
        return redirect()->back()->with('success','Your Profile is Updated Successfuly');
    }
}
