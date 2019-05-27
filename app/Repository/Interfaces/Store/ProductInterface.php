<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:19 AM
 */

namespace App\Repository\Interfaces\Store;


interface ProductInterface
{
    /*
     * @param string $type ,int $limit = 20
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getSomeProduct(string $type ,int $limit = 20);

    /*
     * @param int $limit = 4
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getNewProduct(int $limit = 4);

    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getProduct(int $id);

    /*
     * @param string $str
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getProductByFlages(string $str);

    /*
     * @param string $keyword, int $category_id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductByName(string $keyword, int $category_id);

    /*
     * @param int $category_id , $min , $max
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductByPrice(int $category_id , $min , $max);

    /*
     * @param int $category_id , string $color
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductByColor(int $category_id , string $color);

    /*
     * @param int $category_id , string $size
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function FilterProductBySize(int $category_id , string $size);
}
