<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventanilla
 *
 * @ORM\Table(name="ventanilla", indexes={@ORM\Index(name="IDX_C2DBF588A6F796BE", columns={"agencia_id"}), @ORM\Index(name="IDX_C2DBF588AAF70791", columns={"area_tipo_id"})})
 * @ORM\Entity
 */
class Ventanilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ventanilla_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=200, nullable=true)
     */
    private $obs;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var \Agencia
     *
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agencia_id", referencedColumnName="id")
     * })
     */
    private $agencia;

    /**
     * @var \AreaTipo
     *
     * @ORM\ManyToOne(targetEntity="AreaTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_tipo_id", referencedColumnName="id")
     * })
     */
    private $areaTipo;



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
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return Ventanilla
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
     * @return Ventanilla
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
     * Set numero
     *
     * @param integer $numero
     * @return Ventanilla
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set agencia
     *
     * @param \AppBundle\Entity\Agencia $agencia
     * @return Ventanilla
     */
    public function setAgencia(\AppBundle\Entity\Agencia $agencia = null)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return \AppBundle\Entity\Agencia 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set areaTipo
     *
     * @param \AppBundle\Entity\AreaTipo $areaTipo
     * @return Ventanilla
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
