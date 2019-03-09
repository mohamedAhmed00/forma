<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:21 PM
 */

namespace App\Repository\Interfaces\Store;


interface CategoryInterface
{
    /*
     * @param int $limit
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getCategory(int $limit = 6);

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getCategoryById(int $id);
}