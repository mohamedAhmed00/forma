<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Forma\ActivityDetailInterface;
use App\Repository\Interfaces\Forma\ActivityInterface;
use App\Repository\Interfaces\Forma\LocationInterface;
use App\Repository\Interfaces\Forma\ServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class ActivityController extends Controller
{

    /**
     * @param int $id
     * @return Mix view
     * @auther Nader Ahmed
     **/
    public function activity(int $id,LocationInterface $location,ServiceInterface $service,ActivityInterface $activity)
    {
        if (Cache::has('activities:'.$id) ) {
            return Cache::get('activities:'.$id);
        }
        else
        {
            $services = $service->getAll();
            $activities = $activity->getById($id)->gyms;
            $location = $location->getAll();
            $activityData =  $activity->getById($id);
            $page =  View::make('activities', compact(['activities', 'location','services','page','activityData']))->render();
            Cache::forever('activities:'.$id, $page);
            return $page;
        }
    }

    /**
     * @param Request $request
     * @return Mix view
     * @auther Nader Ahmed
     **/
    public function ActivityDetailsFilter(Request $request,ActivityDetailInterface $activityDetail,LocationInterface $location,ServiceInterface $service,ActivityInterface $activity)
    {
        $services = $service->getAll();
        $location = $location->getAll();
        $activityData =  $activity->getById(explode('/',trim(\Request()->getPathInfo(),' /\ '))[1]);
        $activities = $activityDetail->ActivityDetailsFilter($request);
        return view('activities', compact(['activities', 'location','services','activityData']));
    }

     /**
     * @param int $id
     * @return Mix view
     * @auther Nader Ahmed
     **/
    public function singleActivityDetail (int $id,ActivityDetailInterface $activity){
        if (Cache::has('activity:'.$id) ) {
            return Cache::get('activity:'.$id);
        }
        else
        {
            $activity = $activity->getById($id);
            $page =  View::make('activity', compact(['activity']))->render();
            Cache::forever('activity:'.$id, $page);
            return $page;
        }
    }
}
