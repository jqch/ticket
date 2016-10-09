<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio", indexes={@ORM\Index(name="IDX_CB86F22AAAF70791", columns={"area_tipo_id"})})
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicio_tipo", type="smallint", nullable=false)
     */
    private $servicioTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio", type="string", length=150, nullable=false)
     */
    private $servicio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esticket", type="boolean", nullable=false)
     */
    private $esticket;

    /**
     * @var string
     *
     * @ORM\Column(name="rutasonido", type="string", length=100, nullable=true)
     */
    private $rutasonido;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=150, nullable=true)
     */
    private $obs;

    /**
     * @var string
     *
     * @ORM\Column(name="abrev", type="string", length=5, nullable=false)
     */
    private $abrev;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var \AreaTipo
     *
     * @ORM\ManyToOne(targetEntity="AreaTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_tipo_id", referencedColumnName="id")
     * })
     */
    private $areaTipo;

    public function __toString(){
        return $this->servicio;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set servicioTipo
     *
     * @param integer $servicioTipo
     * @return Servicio
     */
    public function setServicioTipo($servicioTipo)
    {
        $this->servicioTipo = $servicioTipo;

        return $this;
    }

    /**
     * Get servicioTipo
     *
     * @return integer 
     */
    public function getServicioTipo()
    {
        return $this->servicioTipo;
    }

    /**
     * Set servicio
     *
     * @param string $servicio
     * @return Servicio
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return string 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return Servicio
     */
    public function setEsactivo($esactivo)
    {
        $this->esactivo = $esactivo;

        return $this;
    }

    /**
     * Get esactivo
     *
     * @return boolean 
     */
    public function getEsactivo()
    {
        return $this->esactivo;
    }

    /**
     * Set esticket
     *
     * @param boolean $esticket
     * @return Servicio
     */
    public function setEsticket($esticket)
    {
        $this->esticket = $esticket;

        return $this;
    }

    /**
     * Get esticket
     *
     * @return boolean 
     */
    public function getEsticket()
    {
        return $this->esticket;
    }

    /**
     * Set rutasonido
     *
     * @param string $rutasonido
     * @return Servicio
     */
    public function setRutasonido($rutasonido)
    {
        $this->rutasonido = $rutasonido;

        return $this;
    }

    /**
     * Get rutasonido
     *
     * @return string 
     */
    public function getRutasonido()
    {
        return $this->rutasonido;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Servicio
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

    /**
     * Set abrev
     *
     * @param string $abrev
     * @return Servicio
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Servicio
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
     * Set areaTipo
     *
     * @param \AppBundle\Entity\AreaTipo $areaTipo
     * @return Servicio
     */
    public function setAreaTipo(\AppBundle\Entity\AreaTipo $areaTipo = null)
    {
        $this->areaTipo = $areaTipo;

        return $this;
    }

    /**
     * Get areaTipo
     *
     * @return \AppBundle\Entity\AreaTipo 
     */
    public function getAreaTipo()
    {
        return $this->areaTipo;
    }
}
