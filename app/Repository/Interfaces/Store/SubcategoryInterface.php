<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:27 PM
 */

namespace App\Repository\Interfaces\Store;


interface SubcategoryInterface
{
    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSubcategoryById(int $id);
}