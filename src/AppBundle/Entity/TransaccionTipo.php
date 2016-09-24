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
     * @ORM\Column(name="ventanilla_tipo", type="string", length=100, nullable=false)
     */
    private $ventanillaTipo;

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
     * Set ventanillaTipo
     *
     * @param string $ventanillaTipo
     * @return TransaccionTipo
     */
    public function setVentanillaTipo($ventanillaTipo)
    {
        $this->ventanillaTipo = $ventanillaTipo;

        return $this;
    }

    /**
     * Get ventanillaTipo
     *
     * @return string 
     */
    public function getVentanillaTipo()
    {
        return $this->ventanillaTipo;
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
