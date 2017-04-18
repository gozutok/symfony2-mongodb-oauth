<?php
/**
 * Created by PhpStorm.
 * User: taha
 * Date: 18/04/2017
 * Time: 20:20
 */

namespace ApiBundle\Document;

use FOS\OAuthServerBundle\Document\Client as BaseClient;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Client extends BaseClient
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
}