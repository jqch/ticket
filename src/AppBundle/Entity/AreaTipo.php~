<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaTipo
 *
 * @ORM\Table(name="area_tipo")
 * @ORM\Entity
 */
class AreaTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="area_tipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="area_tipo", type="string", length=50, nullable=false)
     */
    private $areaTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=200, nullable=true)
     */
    private $obs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    public function __toString(){
        return $this->areaTipo;
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
     * Set areaTipo
     *
     * @param string $areaTipo
     * @return AreaTipo
     */
    public function setAreaTipo($areaTipo)
    {
        $this->areaTipo = $areaTipo;

        return $this;
    }

    /**
     * Get areaTipo
     *
     * @return string 
     */
    public function getAreaTipo()
    {
        return $this->areaTipo;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return AreaTipo
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
     * @return AreaTipo
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
}
