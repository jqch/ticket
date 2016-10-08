<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anuncio
 *
 * @ORM\Table(name="anuncio", indexes={@ORM\Index(name="IDX_4B3BC0D4A6F796BE", columns={"agencia_id"})})
 * @ORM\Entity
 */
class Anuncio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anuncio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="anuncio_tipo", type="smallint", nullable=true)
     */
    private $anuncioTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="anuncio", type="string", length=255, nullable=true)
     */
    private $anuncio;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=200, nullable=true)
     */
    private $obs;

    /**
     * @var \Agencia
     *
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agencia_id", referencedColumnName="id")
     * })
     */
    private $agencia;

    public function __toString(){
        return $this->anuncio;
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
     * Set anuncioTipo
     *
     * @param integer $anuncioTipo
     * @return Anuncio
     */
    public function setAnuncioTipo($anuncioTipo)
    {
        $this->anuncioTipo = $anuncioTipo;

        return $this;
    }

    /**
     * Get anuncioTipo
     *
     * @return integer 
     */
    public function getAnuncioTipo()
    {
        return $this->anuncioTipo;
    }

    /**
     * Set anuncio
     *
     * @param string $anuncio
     * @return Anuncio
     */
    public function setAnuncio($anuncio)
    {
        $this->anuncio = $anuncio;

        return $this;
    }

    /**
     * Get anuncio
     *
     * @return string 
     */
    public function getAnuncio()
    {
        return $this->anuncio;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Anuncio
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
     * Set agencia
     *
     * @param \AppBundle\Entity\Agencia $agencia
     * @return Anuncio
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
}
