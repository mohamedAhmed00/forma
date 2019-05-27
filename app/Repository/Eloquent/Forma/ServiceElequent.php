<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:28 AM
 */

namespace App\Repository\Eloquent\Forma;


use App\Model\Forma\Service;
use App\Repository\Interfaces\Forma\ServiceInterface;

class ServiceElequent extends BaseElequent implements ServiceInterface
{
    /**
     * @var
     */
    protected $services;

    /**
     * ServiceElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->services = new Service();
        parent::__construct($this->services);
    }
}
