<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Forma\ActivityDetailInterface;
use App\Repository\Interfaces\Forma\ActivityInterface;
use App\Repository\Interfaces\Forma\LocationInterface;
use App\Repository\Interfaces\Forma\ServiceInterface;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    /*
     * @param int $id
     * @return Mix view
     * @auther Nader Ahmed
     **/
    public function activity(int $id,LocationInterface $location,ServiceInterface $service,ActivityInterface $activity)
    {
        $services = $service->getAllServices();
        $activities = $activity->getActivityGyms($id);
        $location = $location->getAllLocations();
        $activityData =  $activity->getSingleActivity($id);
        $page = "activity";
        return view('activities', compact(['activities', 'location','services','page','activityData']));
    }

    /*
     * @param Request $request
     * @return Mix view
     * @auther Nader Ahmed
     **/
    public function ActivityDetailsFilter(Request $request,ActivityDetailInterface $activityDetail,LocationInterface $location,ServiceInterface $service,ActivityInterface $activity)
    {
        $services = $service->getAllServices();
        $location = $location->getAllLocations();
        $activityData =  $activity->getSingleActivity(explode('/',trim(\Request()->getPathInfo(),' /\ '))[1]);
        $activities = $activityDetail->ActivityDetailsFilter($request);
        $page = "activity";
        return view('activities', compact(['activities', 'location','services','page','activityData']));
    }

     /*
     * @param int $id
     * @return Mix view
     * @auther Nader Ahmed
     **/
    public function singleActivityDetail (int $id,ActivityDetailInterface $activity){
        $activity = $activity->getSingleActivityDetail($id);
        $page = "activity";
        return view('single', compact(['activity','page']));
    }
}
