<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table(name="lugar", indexes={@ORM\Index(name="IDX_4974AAAC606841D", columns={"lugar_tipo_id"})})
 * @ORM\Entity
 */
class Lugar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lugar_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=6, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="gestion_tipo_id", type="integer", nullable=false)
     */
    private $gestionTipoId;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=125, nullable=true)
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=145, nullable=true)
     */
    private $obs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=true)
     */
    private $esactivo;

    /**
     * @var \LugarTipo
     *
     * @ORM\ManyToOne(targetEntity="LugarTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lugar_tipo_id", referencedColumnName="id")
     * })
     */
    private $lugarTipo;

    public function __toString(){
        return $this->lugar;
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
     * Set codigo
     *
     * @param string $codigo
     * @return Lugar
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set gestionTipoId
     *
     * @param integer $gestionTipoId
     * @return Lugar
     */
    public function setGestionTipoId($gestionTipoId)
    {
        $this->gestionTipoId = $gestionTipoId;

        return $this;
    }

    /**
     * Get gestionTipoId
     *
     * @return integer 
     */
    public function getGestionTipoId()
    {
        return $this->gestionTipoId;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return Lugar
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Lugar
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
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return Lugar
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
     * Set lugarTipo
     *
     * @param \AppBundle\Entity\LugarTipo $lugarTipo
     * @return Lugar
     */
    public function setLugarTipo(\AppBundle\Entity\LugarTipo $lugarTipo = null)
    {
        $this->lugarTipo = $lugarTipo;

        return $this;
    }

    /**
     * Get lugarTipo
     *
     * @return \AppBundle\Entity\LugarTipo 
     */
    public function getLugarTipo()
    {
        return $this->lugarTipo;
    }
}
