<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

class User extends BaseUser
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}
