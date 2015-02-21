<?php

namespace App\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 */
class Localidad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre_localidad;

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

    private $provincia;

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia)
    {
        $this->provincia=$provincia;

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
     * Set nombreLocalidad
     *
     * @param string $nombreLocalidad
     * @return Localidad
     */
    public function setNombreLocalidad($nombre_localidad)
    {
        $this->nombre_localidad = $nombre_localidad;

        return $this;
    }

    /**
     * Get nombreLocalidad
     *
     * @return string 
     */
    public function getNombreLocalidad()
    {
        return $this->nombre_localidad;
    }

    /**
     * Set idUserCreatedAt
     *
     * @param integer $idUserCreatedAt
     * @return Localidad
     */
    public function setIdUserCreatedAt($id_user_created_at)
    {
        $this->id_user_created_at = $id_user_created_at;

        return $this;
    }

    /**
     * Get idUserCreatedAt
     *
     * @return integer 
     */
    public function getIdUserCreatedAt()
    {
        return $this->id_user_created_at;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Localidad
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set idUserUpdatedAt
     *
     * @param integer $idUserUpdatedAt
     * @return Localidad
     */
    public function setIdUserUpdatedAt($id_user_updated_at)
    {
        $this->id_user_updated_at = $id_user_updated_at;

        return $this;
    }

    /**
     * Get idUserUpdatedAt
     *
     * @return integer 
     */
    public function getIdUserUpdatedAt()
    {
        return $this->id_user_updated_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Localidad
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
