<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperadorServicio
 *
 * @ORM\Table(name="operador_servicio", indexes={@ORM\Index(name="IDX_13B86AEC5B939A38", columns={"operador_id"}), @ORM\Index(name="IDX_13B86AEC71CAA3E7", columns={"servicio_id"})})
 * @ORM\Entity
 */
class OperadorServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="operador_servicio_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="obs", type="string", length=255, nullable=true)
     */
    private $obs;

    /**
     * @var \Operador
     *
     * @ORM\ManyToOne(targetEntity="Operador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operador_id", referencedColumnName="id")
     * })
     */
    private $operador;

    /**
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio_id", referencedColumnName="id")
     * })
     */
    private $servicio;


}
