<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:25 PM
 */

namespace App\Repository\Interfaces\Store;


interface NewsInterface
{
    /*
     * @param int $limit = 16
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getNews(int $limit = 16);
}