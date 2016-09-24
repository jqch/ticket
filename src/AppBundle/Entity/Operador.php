<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operador
 *
 * @ORM\Table(name="operador", indexes={@ORM\Index(name="IDX_CB8004F1A6F796BE", columns={"agencia_id"}), @ORM\Index(name="IDX_CB8004F19A9472C4", columns={"operador_tipo_id"})})
 * @ORM\Entity
 */
class Operador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="operador_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ci", type="string", length=45, nullable=false)
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="paterno", type="string", length=45, nullable=false)
     */
    private $paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="materno", type="string", length=45, nullable=true)
     */
    private $materno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=45, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=15, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=true)
     */
    private $clave;

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
     * @var \Agencia
     *
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agencia_id", referencedColumnName="id")
     * })
     */
    private $agencia;

    /**
     * @var \OperadorTipo
     *
     * @ORM\ManyToOne(targetEntity="OperadorTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operador_tipo_id", referencedColumnName="id")
     * })
     */
    private $operadorTipo;



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
     * Set ci
     *
     * @param string $ci
     * @return Operador
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string 
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set paterno
     *
     * @param string $paterno
     * @return Operador
     */
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;

        return $this;
    }

    /**
     * Get paterno
     *
     * @return string 
     */
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set materno
     *
     * @param string $materno
     * @return Operador
     */
    public function setMaterno($materno)
    {
        $this->materno = $materno;

        return $this;
    }

    /**
     * Get materno
     *
     * @return string 
     */
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Operador
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Operador
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Operador
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return Operador
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
     * @return Operador
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
     * @return Operador
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
     * Set operadorTipo
     *
     * @param \AppBundle\Entity\OperadorTipo $operadorTipo
     * @return Operador
     */
    public function setOperadorTipo(\AppBundle\Entity\OperadorTipo $operadorTipo = null)
    {
        $this->operadorTipo = $operadorTipo;

        return $this;
    }

    /**
     * Get operadorTipo
     *
     * @return \AppBundle\Entity\OperadorTipo 
     */
    public function getOperadorTipo()
    {
        return $this->operadorTipo;
    }
}
