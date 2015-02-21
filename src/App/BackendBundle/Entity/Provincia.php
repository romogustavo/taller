<?php

namespace App\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * Provincia
 */
class Provincia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreProvincia;

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

    private $pais;

    private $localidades;

    public function __construct() {
        $this->localidades = new ArrayCollection();
    }

    public function getLocalidades() {
        return $this->localidades;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais=$pais;

        return $this;
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
     * Set nombreProvincia
     *
     * @param string $nombreProvincia
     * @return Provincia
     */
    public function setNombreProvincia($nombreProvincia)
    {
        $this->nombreProvincia = $nombreProvincia;
    
        return $this;
    }

    /**
     * Get nombreProvincia
     *
     * @return string 
     */
    public function getNombreProvincia()
    {
        return $this->nombreProvincia;
    }

    /**
     * Set idUserCreatedAt
     *
     * @param integer $idUserCreatedAt
     * @return Provincia
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
     * @return Provincia
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
     * @return Provincia
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
     * @return Provincia
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
        return (string) $this->nombreProvincia;
    }
}
