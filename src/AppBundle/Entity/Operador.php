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
     * @ORM\Column(name="contraseÃ±a", type="string", length=255, nullable=true)
     */
    private $contraseã±a;

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


}
