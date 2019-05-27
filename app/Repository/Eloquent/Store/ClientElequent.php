<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 2:16 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Client;
use App\Repository\Interfaces\Store\ClientInterface;

class ClientElequent implements ClientInterface
{
    /*
     * @param int $limit = 16
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getClient(int $limit = 16)
    {
        return Client::orderBy('created_at','DESC')->limit($limit)->get();
    }
}