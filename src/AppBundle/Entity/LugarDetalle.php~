<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LugarDetalle
 *
 * @ORM\Table(name="lugar_detalle", indexes={@ORM\Index(name="IDX_2F189641B5A3803B", columns={"lugar_id"}), @ORM\Index(name="IDX_2F1896411A4D4B9B", columns={"lugar_id_padre"})})
 * @ORM\Entity
 */
class LugarDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lugar_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=145, nullable=true)
     */
    private $obs;

    /**
     * @var \Lugar
     *
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lugar_id", referencedColumnName="id")
     * })
     */
    private $lugar;

    /**
     * @var \Lugar
     *
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lugar_id_padre", referencedColumnName="id")
     * })
     */
    private $lugarPadre;


}
