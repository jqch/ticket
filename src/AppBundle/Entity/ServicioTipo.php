<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicioTipo
 *
 * @ORM\Table(name="servicio_tipo")
 * @ORM\Entity
 */
class ServicioTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="servicio_tipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_tipo", type="string", length=100, nullable=false)
     */
    private $servicioTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=100, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255, nullable=true)
     */
    private $obs;


}
