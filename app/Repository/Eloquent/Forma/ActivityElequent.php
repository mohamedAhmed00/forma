<?php

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Activity;
use App\Repository\Interfaces\Forma\ActivityInterface;

class ActivityElequent extends BaseElequent implements ActivityInterface
{
    /**
     * @var
     */
    protected $activity;

    /**
     * ActivityElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->activity = new Activity();
        parent::__construct($this->activity);
    }
}
