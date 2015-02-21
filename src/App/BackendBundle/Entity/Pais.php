<?php

namespace App\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pais
 */
class Pais
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombrePais;

    /**
     * @var integer
     */
    private $idUserCreatedAt;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $idUserUpdatedAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    private $provincias;

    public function __construct() {
        $this->provincia = new ArrayCollection();
    }

    public function getProvincias() {
        return $this->provincias;
    }


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
     * Set nombrePais
     *
     * @param string $nombrePais
     * @return Pais
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombrePais = $nombrePais;
    
        return $this;
    }

    /**
     * Get nombrePais
     *
     * @return string 
     */
    public function getNombrePais()
    {
        return $this->nombrePais;
    }

    /**
     * Set idUserCreatedAt
     *
     * @param integer $idUserCreatedAt
     * @return Pais
     */
    public function setIdUserCreatedAt($idUserCreatedAt)
    {
        $this->idUserCreatedAt = $idUserCreatedAt;
    
        return $this;
    }

    /**
     * Get idUserCreatedAt
     *
     * @return integer 
     */
    public function getIdUserCreatedAt()
    {
        return $this->idUserCreatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Pais
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set idUserUpdatedAt
     *
     * @param integer $idUserUpdatedAt
     * @return Pais
     */
    public function setIdUserUpdatedAt($idUserUpdatedAt)
    {
        $this->idUserUpdatedAt = $idUserUpdatedAt;
    
        return $this;
    }

    /**
     * Get idUserUpdatedAt
     *
     * @return integer 
     */
    public function getIdUserUpdatedAt()
    {
        return $this->idUserUpdatedAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Pais
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function __toString(){
        return (string) $this->nombrePais;
    }
}
