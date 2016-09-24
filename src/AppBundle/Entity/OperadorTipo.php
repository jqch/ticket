<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperadorTipo
 *
 * @ORM\Table(name="operador_tipo")
 * @ORM\Entity
 */
class OperadorTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="operador_tipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="operador_tipo", type="string", length=100, nullable=false)
     */
    private $operadorTipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255, nullable=true)
     */
    private $obs;

    public function __toString(){
        return $this->operadorTipo;
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
     * Set operadorTipo
     *
     * @param string $operadorTipo
     * @return OperadorTipo
     */
    public function setOperadorTipo($operadorTipo)
    {
        $this->operadorTipo = $operadorTipo;

        return $this;
    }

    /**
     * Get operadorTipo
     *
     * @return string 
     */
    public function getOperadorTipo()
    {
        return $this->operadorTipo;
    }

    /**
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return OperadorTipo
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
     * Set obs
     *
     * @param string $obs
     * @return OperadorTipo
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
