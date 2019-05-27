<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 7:46 PM
 */

namespace App\Repository\Interfaces\Store;


use App\Model\Store\Product;

interface Comparinterface
{
    /*
     * @auther Nader Ahmed
     * @return object
     * */
    public function getCompareContent();

    /*
     * @param $int $limit = 4
     * @auther Nader Ahmed
     * @return object
     * */
    public function getCompareContentChuncks(int $limit = 4);
    /*
     * @param Product $product
     * @auther Nader Ahmed
     * @return void
     * */
    public function addItemToCompare(Product $product);

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return void
     * */
    public function RemoveItemFromCompare(string $id);

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return string
     * */
    public function checkItemToRemoveIt($id);

    /*
     * @auther Nader Ahmed
     * @return string
     * */
    public function count();
}