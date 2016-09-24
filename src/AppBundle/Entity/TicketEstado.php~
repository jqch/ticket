<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketEstado
 *
 * @ORM\Table(name="ticket_estado")
 * @ORM\Entity
 */
class TicketEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ticket_estado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_estado", type="string", length=100, nullable=false)
     */
    private $ticketEstado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esactivo", type="boolean", nullable=false)
     */
    private $esactivo;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255, nullable=true)
     */
    private $obs;



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
     * Set ticketEstado
     *
     * @param string $ticketEstado
     * @return TicketEstado
     */
    public function setTicketEstado($ticketEstado)
    {
        $this->ticketEstado = $ticketEstado;

        return $this;
    }

    /**
     * Get ticketEstado
     *
     * @return string 
     */
    public function getTicketEstado()
    {
        return $this->ticketEstado;
    }

    /**
     * Set esactivo
     *
     * @param boolean $esactivo
     * @return TicketEstado
     */
    public function setEsactivo($esactivo)
    {
        $this->esactivo = $esactivo;

        return $this;
    }

    /**
     * Get esactivo
     *
     * @return boolean 
     */
    public function getEsactivo()
    {
        return $this->esactivo;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return TicketEstado
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
}
