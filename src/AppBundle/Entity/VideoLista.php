<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VideoLista
 *
 * @ORM\Table(name="video_lista", indexes={@ORM\Index(name="IDX_74FDE74F29C1004E", columns={"video_id"})})
 * @ORM\Entity
 */
class VideoLista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="video_lista_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="smallint", nullable=false)
     */
    private $orden;

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
     * @var \Video
     *
     * @ORM\ManyToOne(targetEntity="Video")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="video_id", referencedColumnName="id")
     * })
     */
    private $video;


}
