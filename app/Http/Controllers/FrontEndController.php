<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Forma\ActivityInterface;
use App\Repository\Interfaces\Forma\MembershipInterface;
use App\Repository\Interfaces\Forma\NewsInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use App\Repository\Interfaces\Store\SliderInterface;

class FrontEndController extends Controller
{

    /*
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function index(ActivityInterface $activity,NewsInterface $news,ProductInterface $product,SliderInterface $slider)
    {
        $activities = $activity->getAllActivity();
        $featuredProducts = $product->getSomeProduct('is_featured');
        $sliders = $slider->getSliderImages(3);
        $newsCategory = $news->getCategoryNews();
        $page = "home";
        return view('index', compact(['activities', 'featuredProducts', 'sliders','newsCategory','page']));
    }

    /*
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function about()
    {
        $page = "about";
        return view('about',compact('about'));
    }

    /*
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function membership(MembershipInterface $membership)
    {
        $page = "membership";
        $memberships = $membership->getMemberShips();
        return view('membership',compact(['page','memberships']));
    }
}

