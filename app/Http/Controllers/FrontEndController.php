<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Forma\ActivityInterface;
use App\Repository\Interfaces\Forma\CategoryNewsInterface;
use App\Repository\Interfaces\Forma\MembershipInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class FrontEndController extends Controller
{

    /**
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function index(ActivityInterface $activity,CategoryNewsInterface $categoryNews,ProductInterface $product)
    {
        if (Cache::has('index') ) {
            return Cache::get('index');
        }
        else
        {
            $activities = $activity->getAll();
            $featuredProducts = $product->getSomeProduct('is_featured');
            $newsCategory = $categoryNews->getAllByOrder('newscmsorder','ASC');
            $page =  View::make('index',compact(['activities', 'featuredProducts','newsCategory']))->render();
            Cache::forever('index', $page);
            return $page;
        }
    }

    /**
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function about()
    {
        if (Cache::has('about') ) {
            return Cache::get('about');
        }
        else
        {
            $page =  View::make('about')->render();
            Cache::forever('about', $page);
            return $page;
        }
    }

    /**
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function membership(MembershipInterface $membership)
    {
        if (Cache::has('membership') ) {
            return Cache::get('membership');
        }
        else
        {
            $memberships = $membership->getByLimit(3);
            $page =  View::make('membership',compact('memberships'))->render();
            Cache::forever('membership', $page);
            return $page;
        }
    }

    /**
     * @return Mix view
     * @auther Nader Ahmed
     * */
    public function clearCache()
    {
        Cache::flush();
        return redirect('/');
    }
}

