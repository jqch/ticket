<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia
 *
 * @ORM\Table(name="agencia", indexes={@ORM\Index(name="IDX_EB6C2B99B5A3803B", columns={"lugar_id"})})
 * @ORM\Entity
 */
class Agencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="agencia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="agencia_tipo", type="smallint", nullable=false)
     */
    private $agenciaTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="agencia", type="string", length=70, nullable=false)
     */
    private $agencia;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=100, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=100, nullable=true)
     */
    private $celular;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_apertura", type="date", nullable=true)
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre", type="date", nullable=true)
     */
    private $fechaCierre;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=200, nullable=true)
     */
    private $obs;

    /**
     * @var integer
     *
     * @ORM\Column(name="anchobanda", type="integer", nullable=false)
     */
    private $anchobanda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="papelporcentaje", type="integer", nullable=true)
     */
    private $papelporcentaje;

    /**
     * @var string
     *
     * @ORM\Column(name="frase", type="string", length=100, nullable=true)
     */
    private $frase;

    /**
     * @var \Lugar
     *
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lugar_id", referencedColumnName="id")
     * })
     */
    private $lugar;

    public function __toString(){
        return $this->agencia;
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
     * Set agenciaTipo
     *
     * @param integer $agenciaTipo
     * @return Agencia
     */
    public function setAgenciaTipo($agenciaTipo)
    {
        $this->agenciaTipo = $agenciaTipo;

        return $this;
    }

    /**
     * Get agenciaTipo
     *
     * @return integer 
     */
    public function getAgenciaTipo()
    {
        return $this->agenciaTipo;
    }

    /**
     * Set agencia
     *
     * @param string $agencia
     * @return Agencia
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return string 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Agencia
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Agencia
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Agencia
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     * @return Agencia
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime 
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return Agencia
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Agencia
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
     * Set anchobanda
     *
     * @param integer $anchobanda
     * @return Agencia
     */
    public function setAnchobanda($anchobanda)
    {
        $this->anchobanda = $anchobanda;

        return $this;
    }

    /**
     * Get anchobanda
     *
     * @return integer 
     */
    public function getAnchobanda()
    {
        return $this->anchobanda;
    }

    /**
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return Agencia
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
     * Set codigo
     *
     * @param integer $codigo
     * @return Agencia
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set papelporcentaje
     *
     * @param integer $papelporcentaje
     * @return Agencia
     */
    public function setPapelporcentaje($papelporcentaje)
    {
        $this->papelporcentaje = $papelporcentaje;

        return $this;
    }

    /**
     * Get papelporcentaje
     *
     * @return integer 
     */
    public function getPapelporcentaje()
    {
        return $this->papelporcentaje;
    }

    /**
     * Set frase
     *
     * @param string $frase
     * @return Agencia
     */
    public function setFrase($frase)
    {
        $this->frase = $frase;

        return $this;
    }

    /**
     * Get frase
     *
     * @return string 
     */
    public function getFrase()
    {
        return $this->frase;
    }

    /**
     * Set lugar
     *
     * @param \AppBundle\Entity\Lugar $lugar
     * @return Agencia
     */
    public function setLugar(\AppBundle\Entity\Lugar $lugar = null)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return \AppBundle\Entity\Lugar 
     */
    public function getLugar()
    {
        return $this->lugar;
    }
}
