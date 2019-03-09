<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:15 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\News;
use App\Repository\Interfaces\Store\NewsInterface;

class NewsElequent implements NewsInterface
{
    /*
     * @param int $limit = 16
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getNews(int $limit = 16)
    {
        return News::orderBy('created_at','DESC')->limit($limit)->get();
    }
}