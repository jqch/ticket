<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video", indexes={@ORM\Index(name="IDX_7CC7DA2CA6F796BE", columns={"agencia_id"})})
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="video_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="video_tipo", type="smallint", nullable=false)
     */
    private $videoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=100, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=150, nullable=false)
     */
    private $ruta;

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


}
