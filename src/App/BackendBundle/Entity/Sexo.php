<?php

namespace App\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sexo
 */
class Sexo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $genero;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Sexo
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }
    /**
     * @var integer
     */
    private $id_user_created_at;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var integer
     */
    private $id_user_updated_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * Set id_user_created_at
     *
     * @param integer $idUserCreatedAt
     * @return Sexo
     */
    public function setIdUserCreatedAt($idUserCreatedAt)
    {
        $this->id_user_created_at = $idUserCreatedAt;

        return $this;
    }

    /**
     * Get id_user_created_at
     *
     * @return integer 
     */
    public function getIdUserCreatedAt()
    {
        return $this->id_user_created_at;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Sexo
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set id_user_updated_at
     *
     * @param integer $idUserUpdatedAt
     * @return Sexo
     */
    public function setIdUserUpdatedAt($idUserUpdatedAt)
    {
        $this->id_user_updated_at = $idUserUpdatedAt;

        return $this;
    }

    /**
     * Get id_user_updated_at
     *
     * @return integer 
     */
    public function getIdUserUpdatedAt()
    {
        return $this->id_user_updated_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Sexo
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
