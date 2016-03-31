<?php

namespace ApiCrud\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @package ApiCrud\Entity
 */
class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    public $id;

    /**
     *
     * @ORM\Column(type="string", unique=true)
     * @var string
     */
    public $username;

    /**
     *
     * @ORM\Column(type="string", length=64)
     * @var string
     */
    public $password;

}