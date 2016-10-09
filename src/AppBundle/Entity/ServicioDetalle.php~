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
     * @return ServicioDetalle
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
     * Set servicio
     *
     * @param \AppBundle\Entity\Servicio $servicio
     * @return ServicioDetalle
     */
    public function setServicio(\AppBundle\Entity\Servicio $servicio = null)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return \AppBundle\Entity\Servicio 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set servicioPadre
     *
     * @param \AppBundle\Entity\Servicio $servicioPadre
     * @return ServicioDetalle
     */
    public function setServicioPadre(\AppBundle\Entity\Servicio $servicioPadre = null)
    {
        $this->servicioPadre = $servicioPadre;

        return $this;
    }

    /**
     * Get servicioPadre
     *
     * @return \AppBundle\Entity\Servicio 
     */
    public function getServicioPadre()
    {
        return $this->servicioPadre;
    }
}
