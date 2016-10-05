<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClienteTipo
 *
 * @ORM\Table(name="cliente_tipo")
 * @ORM\Entity
 */
class ClienteTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cliente_tipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_tipo", type="string", length=20, nullable=false)
     */
    private $clienteTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", nullable=false)
     */
    private $prioridad;

    /**
     * @var string
     *
     * @ORM\Column(name="abrev", type="string", length=5, nullable=true)
     */
    private $abrev;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255, nullable=true)
     */
    private $obs;



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
     * Set clienteTipo
     *
     * @param string $clienteTipo
     * @return ClienteTipo
     */
    public function setClienteTipo($clienteTipo)
    {
        $this->clienteTipo = $clienteTipo;

        return $this;
    }

    /**
     * Get clienteTipo
     *
     * @return string 
     */
    public function getClienteTipo()
    {
        return $this->clienteTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ClienteTipo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return ClienteTipo
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set abrev
     *
     * @param string $abrev
     * @return ClienteTipo
     */
    public function setAbrev($abrev)
    {
        $this->abrev = $abrev;

        return $this;
    }

    /**
     * Get abrev
     *
     * @return string 
     */
    public function getAbrev()
    {
        return $this->abrev;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return ClienteTipo
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string 
     */
    public function getObs()
    {
        return $this->obs;
    }
}
