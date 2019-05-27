<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:27 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Location;
use App\Repository\Interfaces\Forma\LocationInterface;

class LocationElequent extends BaseElequent implements LocationInterface
{

    /**
     * @var
     */
    protected $location;

    /**
     * LocationElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->location = new Location();
        parent::__construct($this->location);
    }
}
