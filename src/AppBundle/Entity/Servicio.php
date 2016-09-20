<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicio_tipo", type="smallint", nullable=false)
     */
    private $servicioTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio", type="string", length=150, nullable=false)
     */
    private $servicio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esticket", type="boolean", nullable=false)
     */
    private $esticket;

    /**
     * @var string
     *
     * @ORM\Column(name="rutasonido", type="string", length=100, nullable=true)
     */
    private $rutasonido;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=150, nullable=true)
     */
    private $obs;


}
