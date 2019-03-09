<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:27 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\News;
use App\Model\Forma\NewsCategory;
use App\Model\Forma\NewsSubcategory;
use App\Repository\Interfaces\Forma\NewsInterface;

class NewsElequent implements NewsInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getCategoryNews()
    {
        return NewsCategory::orderBy('newscmsorder','ASC')->get();
    }

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getSingleNews(int $id)
    {
        return News::find($id);
    }

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getCategoryNewsById(int $id)
    {
        return NewsCategory::find($id);
    }

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function AllNewsInSubCategory(int $id)
    {
        return NewsSubcategory::find($id);
    }
}
