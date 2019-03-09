<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/5/19
 * Time: 12:19 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Activity;
use App\Model\Forma\ActivityDetail;
use App\Repository\Interfaces\Forma\ActivityDetailInterface;
use Illuminate\Http\Request;

class ActivityDetailElequent implements ActivityDetailInterface
{
    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSingleActivityDetail(int $id)
    {
        return ActivityDetail::find($id);
    }

    /*
     * @param Request $request
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function ActivityDetailsFilter(Request $request)
    {
        $data = $request->all();
        $location = $data['location'];
        $name = $data['name'];
        $service = isset($data['service'])? $data['service'] : null;
        $id = explode('/', $request->path())[1];
        if(is_null($service) AND is_null($location) AND is_null($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get();
        }
        else if(is_null($service) AND is_null($location) AND isset($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->filter(function ($item) use ($name) {
                return false !== stristr($item->activity_type_name, $name);
            });
        }
        else if(isset($service) AND is_null($location) AND is_null($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->filter(function ($item) use ($service) {
                return true !== $item->Services->whereIn('id',$service)->isEmpty();
            });
        }
        else if(is_null($service) AND isset($location) AND is_null($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->where('location', $location);
        }
        else if(isset($service) AND isset($location) AND is_null($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->where('location',$location)->filter(function ($item) use ($service) {
                return true !== $item->Services->whereIn('id',$service)->isEmpty();
            });
        }
        else if(isset($service) AND is_null($location) AND isset($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->filter(function ($item) use ($service,$name) {
                return true !== $item->Services->whereIn('id',$service)->isEmpty() AND false !== stristr($item->activity_type_name, $name );
            });
        }
        else if(is_null($service) AND isset($location) AND isset($name)) {
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->where('location',$location)->filter(function ($item) use ($name) {
                return false !== stristr($item->activity_type_name, $name);
            });
        }
        else{
            $activity = Activity::find($id)->Gyms()->distinct('id')->get()->where('location',$location)->filter(function ($item) use ($service,$name) {
                return true !== $item->Services->whereIn('id',$service)->isEmpty() AND false !== stristr($item->activity_type_name, $name );
            });
        }
        return $activity;
    }

    /*
    * @param int $id
    * @return Mix
    * @auther Nader Ahmed
    **/
    public function getActivityDetailsByActivity($id)
    {
//        return ActivityDetail::where('id',$id)->get();
    }

    /*
    * @return Mix
    * @auther Nader Ahmed
    **/
    public function getOnlineDoctor()
    {
        return ActivityDetail::where('is_online','True')->orderBy('created_at','DESC')->get();
    }
}


