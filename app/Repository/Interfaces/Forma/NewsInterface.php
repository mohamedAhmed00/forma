<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:21 AM
 */

namespace App\Repository\Interfaces\Forma;


interface NewsInterface
{
    /*
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getCategoryNews();

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getSingleNews(int $id);

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function getCategoryNewsById(int $id);

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     **/
    public function AllNewsInSubCategory(int $id);
}
