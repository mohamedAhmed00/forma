<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:17 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Subcategory;
use App\Repository\Interfaces\Store\SubcategoryInterface;

class SubcategoryElequent implements SubcategoryInterface
{
    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSubcategoryById(int $id)
    {
        return Subcategory::find($id);
    }
}