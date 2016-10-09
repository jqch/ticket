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

    public function __toString(){
        return $this->video;
    }

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
     * Set videoTipo
     *
     * @param integer $videoTipo
     * @return Video
     */
    public function setVideoTipo($videoTipo)
    {
        $this->videoTipo = $videoTipo;

        return $this;
    }

    /**
     * Get videoTipo
     *
     * @return integer 
     */
    public function getVideoTipo()
    {
        return $this->videoTipo;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Video
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     * @return Video
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Video
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
     * @return Video
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
}
