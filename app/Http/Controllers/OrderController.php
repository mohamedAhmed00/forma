<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order;
use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\FeeInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\OrderInterface;
use App\Repository\Interfaces\Store\ProfileInterface;

class OrderController extends Controller
{
    /*
     * @auther Nader Ahmed
     * @return View
     * */
    public function checkout(MainSettingInterface $mainSetting,CategoryInterface $category,FeeInterface $location)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $page = "shop";
        $locations = $location->getLocations();
        return view('online_store.checkout',compact(['setting','page','categories','locations']));
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return View
     * */
    public function getFee(int $id,FeeInterface $fees)
    {
        $total = $fees->getFees((int)$id);
        return response()->json(['total' => $total],200,[]);
    }

    /*
     * @param Order $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function checkoutProcess(Order $request,OrderInterface $order,ProfileInterface $profile,FeeInterface $fee)
    {
        $order->saveOrder($request, $profile, $fee);
        return redirect('onlinestore');
    }

    /*
     * @auther Nader Ahmed
     * @return View
    * */
    public function getOrders(MainSettingInterface $mainSetting,CategoryInterface $category,ProfileInterface $profile,FeeInterface $fee)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $page = "shop";
        $orders = $profile->getUserProfile()->Order;
        $order = $profile->getUserProfile()->Order()->first();
        $fee = $fee->getFeesById($order->delivaryFees_id)->fees;
        return view('online_store.orders',compact(['setting','page','categories','orders','order','fee']));
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return View
     * */
    public function getSingleOrder(int $id,MainSettingInterface $mainSetting,CategoryInterface $category,ProfileInterface $profile,FeeInterface $fee,OrderInterface $order)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $page = "shop";
        $orders = $profile->getUserProfile()->Order;
        $order = $order->getOrder($id);
        $fee = $fee->getFeesById($order->delivaryFees_id)->fees;
        return view('online_store.orders',compact(['setting','page','categories','orders','order','fee']));
    }
}
