<?php
namespace App\UserBundle\Entity;

//use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;

class User extends BaseUser
{
    protected $name;
    /**
     * @var integer $id
     */
    protected $id;

    // ...
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name; 
    }

}