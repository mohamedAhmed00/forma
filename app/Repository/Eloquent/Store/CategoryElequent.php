<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:13 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Category;
use App\Repository\Interfaces\Store\CategoryInterface;

class CategoryElequent implements CategoryInterface
{
    /*
     * @param int $limit
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getCategory(int $limit = 6)
    {
        return Category::orderBy('created_at','DESC')->limit($limit)->get();
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getCategoryById(int $id)
    {
        return Category::find($id);
    }
}