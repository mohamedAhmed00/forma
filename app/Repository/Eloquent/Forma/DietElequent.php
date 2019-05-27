<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 4:06 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Http\Requests\DietRequest;
use App\Model\RequestDiet;
use App\Repository\Interfaces\Forma\DietInterface;
use Illuminate\Http\Request;

class DietElequent implements DietInterface
{
    /*
     * @param string $str
     * @auther Nader Ahmed
     * @return void
     * */
    public function step1(string $str)
    {
        \request()->session()->put('stage_one',$str);
    }

    /*
     * @param string $str
     * @auther Nader Ahmed
     * @return void
     * */
    public function step2(string $str)
    {
        $data = str_replace('_',' ',$str);
        \request()->session()->put('stage_two',$data);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function step3(Request $request)
    {
        $data = $request->all();
        $step = '';
        foreach($data['product'] as $product)
        {
            $step .= $product . ',';
        }
        $step = trim($step,',');
        \request()->session()->put('stage_three',$step);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function step4(Request $request)
    {
        $data = $request->all();
        $step = '';
        foreach($data['product'] as $product)
        {
            $step .= $product . ',';
        }
        $step = trim($step,',');
        \request()->session()->put('stage_four',$step);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function step5(Request $request)
    {
        $data = $request->all();
        $step = '';
        foreach($data['product'] as $product)
        {
            $step .= $product . ',';
        }
        $step = trim($step,',');
        \request()->session()->put('stage_five',$step);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function step6(Request $request)
    {
        $data = $request->all();
        $step = '';
        foreach($data['product'] as $product)
        {
            $step .= $product . ',';
        }
        $step = trim($step,',');
        \request()->session()->put('stage_six',$step);
    }

    /*
     * @param string $str
     * @auther Nader Ahmed
     * @return void
     * */
    public function step7(string $str)
    {
        $data = str_replace('_',' ',$str);
        \request()->session()->put('stage_seven',$data);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function step8(Request $request)
    {
        $data = $request->all();
        $step = '';
        foreach($data['product'] as $product)
        {
            $step .= $product . ',';
        }
        $step = trim($step,',');
        \request()->session()->put('stage_eight',$step);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function step9(Request $request)
    {
        $data = $request->all();
        $step = '';
        foreach($data['product'] as $product)
        {
            $step .= $product . ',';
        }
        $step = trim($step,',');
        \request()->session()->put('stage_nine',$step);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * return void
     * */
    public function saveRequest(DietRequest $request)
    {
        $data = $request->all();
        $user = $this->saveUserDiet($data);
        $requestDiet =  \request()->session()->all();
        $requestDiet['doctor_id'] = $data['doctor'];
        $requestDiet['user_id'] = $user->id;
        $diet = $this->saveRequestDiet($requestDiet);
        $this->removeSession();
    }

    /*
     * @auther Nader Ahmed
     * return void
     * */
    private function removeSession(){
        \request()->session()->forget('stage_one');
        \request()->session()->forget('stage_two');
        \request()->session()->forget('stage_three');
        \request()->session()->forget('stage_four');
        \request()->session()->forget('stage_five');
        \request()->session()->forget('stage_six');
        \request()->session()->forget('stage_seven');
        \request()->session()->forget('stage_eight');
        \request()->session()->forget('stage_nine');
    }

    /*
     * @auther Nader Ahmed
     * return void
     * */
    private function saveUserDiet($data){
        return \App\Model\UserDiet::create($data);
    }

    /*
     * @auther Nader Ahmed
     * return void
     * */
    private function saveRequestDiet($requestDiet){
        return RequestDiet::create($requestDiet);
    }
}