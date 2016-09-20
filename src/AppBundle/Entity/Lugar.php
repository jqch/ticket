<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table(name="lugar", indexes={@ORM\Index(name="IDX_4974AAAC606841D", columns={"lugar_tipo_id"})})
 * @ORM\Entity
 */
class Lugar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lugar_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=6, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="gestion_tipo_id", type="integer", nullable=false)
     */
    private $gestionTipoId;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=125, nullable=true)
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=145, nullable=true)
     */
    private $obs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=true)
     */
    private $esactivo;

    /**
     * @var \LugarTipo
     *
     * @ORM\ManyToOne(targetEntity="LugarTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lugar_tipo_id", referencedColumnName="id")
     * })
     */
    private $lugarTipo;


}
