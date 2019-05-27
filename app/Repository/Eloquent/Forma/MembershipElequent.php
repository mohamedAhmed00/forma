<?php

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\Membership;
use App\Repository\Interfaces\Forma\MembershipInterface;

class MembershipElequent extends BaseElequent implements MembershipInterface
{
    /**
     * @var
     */
    protected $membership;

    /**
     * MembershipElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->membership = new Membership();
        parent::__construct($this->membership);
    }
}
