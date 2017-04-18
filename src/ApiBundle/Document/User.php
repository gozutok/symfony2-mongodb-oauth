<?php

/**
 * Created by PhpStorm.
 * User: taha
 * Date: 18/04/2017
 * Time: 20:04
 */

namespace ApiBundle\Document;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $_id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}