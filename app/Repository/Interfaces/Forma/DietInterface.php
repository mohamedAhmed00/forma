<?php

namespace App\Repository\Interfaces\Forma;

use App\Http\Requests\DietRequest;
use Illuminate\Http\Request;

interface DietInterface
{
    /**
     * @param string $str
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step1(string $str);

    /**
     * @param string $str
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step2(string $str);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step3(Request $request);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step4(Request $request);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step5(Request $request);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step6(Request $request);

    /**
     * @param string $str
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step7(string $str);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step8(Request $request);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function step9(Request $request);

    /**
     * @param Request $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function saveRequest(DietRequest $request);
}