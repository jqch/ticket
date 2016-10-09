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
     * Set obs
     *
     * @param string $obs
     * @return LugarDetalle
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
     * Set lugar
     *
     * @param \AppBundle\Entity\Lugar $lugar
     * @return LugarDetalle
     */
    public function setLugar(\AppBundle\Entity\Lugar $lugar = null)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return \AppBundle\Entity\Lugar 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set lugarPadre
     *
     * @param \AppBundle\Entity\Lugar $lugarPadre
     * @return LugarDetalle
     */
    public function setLugarPadre(\AppBundle\Entity\Lugar $lugarPadre = null)
    {
        $this->lugarPadre = $lugarPadre;

        return $this;
    }

    /**
     * Get lugarPadre
     *
     * @return \AppBundle\Entity\Lugar 
     */
    public function getLugarPadre()
    {
        return $this->lugarPadre;
    }
}
