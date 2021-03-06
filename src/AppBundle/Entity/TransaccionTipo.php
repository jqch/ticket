<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransaccionTipo
 *
 * @ORM\Table(name="transaccion_tipo")
 * @ORM\Entity
 */
class TransaccionTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="transaccion_tipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="transaccion_tipo", type="string", length=100, nullable=false)
     */
    private $transaccionTipo;

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
        return $this->transaccionTipo;
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
     * Set transaccionTipo
     *
     * @param string $transaccionTipo
     * @return TransaccionTipo
     */
    public function setTransaccionTipo($transaccionTipo)
    {
        $this->transaccionTipo = $transaccionTipo;

        return $this;
    }

    /**
     * Get transaccionTipo
     *
     * @return string 
     */
    public function getTransaccionTipo()
    {
        return $this->transaccionTipo;
    }

    /**
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return TransaccionTipo
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
     * @return TransaccionTipo
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
