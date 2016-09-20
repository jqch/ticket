<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicioDetalle
 *
 * @ORM\Table(name="servicio_detalle", indexes={@ORM\Index(name="IDX_390AE62C71CAA3E7", columns={"servicio_id"}), @ORM\Index(name="IDX_390AE62C2958440E", columns={"servicio_id_padre"})})
 * @ORM\Entity
 */
class ServicioDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="servicio_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=145, nullable=true)
     */
    private $obs;

    /**
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio_id", referencedColumnName="id")
     * })
     */
    private $servicio;

    /**
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio_id_padre", referencedColumnName="id")
     * })
     */
    private $servicioPadre;


}
