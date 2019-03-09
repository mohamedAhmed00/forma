<?php

namespace App\Http\Controllers;

use App\Http\Requests\DietRequest;
use App\Repository\Interfaces\Forma\ActivityDetailInterface;
use App\Repository\Interfaces\Store\DietInterface;
use Illuminate\Http\Request;

class DietController extends Controller
{
    /*
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet()
    {
        return view('diet.index');
    }

    /*
     * string $data
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet1($data,DietInterface $diet)
    {
        if($data == 'female' OR $data == 'male')
        {
            $diet->step1($data);
            return view('diet.2');
        }
        else
        {
            return view('diet.index');
        }
    }

    /*
     * string $data
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet2($data,DietInterface $diet)
    {
        if($data == 'ALMOST_NO_PHYSICAL_ACTIVITY' OR $data == 'I_OFTEN_GO_FOR_A_WALK' OR $data == 'I_EXERCISE_1_-_2_TIMES_A_WEEK' OR $data == 'I_EXERCISE_3_-_5_TIMES_A_WEEK' OR $data == 'I_EXERCISE_5_-_7_TIMES_A_WEEK')
        {
            $diet->step2($data);
            return view('diet.3');
        }
        else
        {
            return view('diet.index');
        }

    }

    /*
     * Request $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet3(Request $request,DietInterface $diet)
    {
        if(!empty($request->all()['product']))
        {
            $diet->step3($request);
            return view('diet/4');
        }
        else
        {
            return view('diet.index');
        }
    }

    /*
     * Request $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet4(Request $request,DietInterface $diet)
    {
        if (!empty($request->all()['product']))
        {
            $diet->step4($request);
            return view('diet.5');
        }
        else
        {
            return view('diet.index');
        }

    }

    /*
     * Request $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet5(Request $request,DietInterface $diet)
    {
        if (!empty($request->all()['product']))
        {
            $diet->step5($request);
            return view('diet.6');
        }
        else
        {
            return view('diet.index');
        }
    }
    public function diet6(Request $request,DietInterface $diet)
    {
        if (!empty($request->all()['product']))
        {
            $diet->step6($request);
            return view('diet.7');
        }
        else
        {
            return view('diet.index');
        }

    }

    /*
     * string $data
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet7($data,DietInterface $diet)
    {
        if($data == 'AT_THE_OFFICE' OR $data == 'AT_THE_OFFICE,_BUT_I_GO_OUT_ON_A_REGULAR_BASIS' OR $data == 'I_SPEND_THE_BETTER_PART_OF_THE_DAY_ON_FOOT' OR $data == 'MANUAL_LABOR' OR $data == 'I_MOSTLY_STAY_AT_HOME')
        {
            $diet->step7($data);
            return view('diet.8');
        }
        else
        {
            return view('diet.index');
        }

    }

    /*
     * Request $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet8(Request $request,DietInterface $diet)
    {
        if (!empty($request->all()['product']))
        {
            $diet->step8($request);
            return view('diet.10');
        }
        else
        {
            return view('diet.index');
        }
    }

    /*
     * Request $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function diet9(Request $request,DietInterface $diet)
    {
        if (!empty($request->all()['product']))
        {
            $diet->step9($request);
            return view('diet.11');
        }
        else
        {
            return view('diet.index');
        }

    }

    /*
     * @auther Nader Ahmed
     * @return View
     * */
    public function final()
    {
        return view('diet.final');
    }

    /*
     * DietInterface $diet
     * @auther Nader Ahmed
     * @return View
     * */
    public function delevery(DietInterface $diet,ActivityDetailInterface $activityDetail)
    {
        $doctor = $activityDetail->getOnlineDoctor();
        return view('diet.send',compact('doctor'));
    }

    /*
     * DietRequest $request
     * @auther Nader Ahmed
     * @return View
     * */
    public function saveDelveryRequest(DietRequest $request,DietInterface $diet)
    {
        $diet->saveRequest($request);
        return redirect('/diets')->with('message','successful sending your request , wait until doctor reply to you');
    }

}
