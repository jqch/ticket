<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="IDX_97A0ADA35B939A38", columns={"operador_id"}), @ORM\Index(name="IDX_97A0ADA33C1F540A", columns={"operador_id_destino"}), @ORM\Index(name="IDX_97A0ADA371CAA3E7", columns={"servicio_id"}), @ORM\Index(name="IDX_97A0ADA35609E41", columns={"ticket_estado_id"}), @ORM\Index(name="IDX_97A0ADA3A70D56FD", columns={"transaccion_tipo_id"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ticket_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoticket", type="string", length=8, nullable=false)
     */
    private $codigoticket;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahora", type="datetime", nullable=false)
     */
    private $fechahora;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255, nullable=true)
     */
    private $obs;

    /**
     * @var \Operador
     *
     * @ORM\ManyToOne(targetEntity="Operador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operador_id", referencedColumnName="id")
     * })
     */
    private $operador;

    /**
     * @var \Operador
     *
     * @ORM\ManyToOne(targetEntity="Operador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operador_id_destino", referencedColumnName="id")
     * })
     */
    private $operadorDestino;

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
     * @var \TicketEstado
     *
     * @ORM\ManyToOne(targetEntity="TicketEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_estado_id", referencedColumnName="id")
     * })
     */
    private $ticketEstado;

    /**
     * @var \TransaccionTipo
     *
     * @ORM\ManyToOne(targetEntity="TransaccionTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transaccion_tipo_id", referencedColumnName="id")
     * })
     */
    private $transaccionTipo;



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
     * Set codigoticket
     *
     * @param string $codigoticket
     * @return Ticket
     */
    public function setCodigoticket($codigoticket)
    {
        $this->codigoticket = $codigoticket;

        return $this;
    }

    /**
     * Get codigoticket
     *
     * @return string 
     */
    public function getCodigoticket()
    {
        return $this->codigoticket;
    }

    /**
     * Set fechahora
     *
     * @param \DateTime $fechahora
     * @return Ticket
     */
    public function setFechahora($fechahora)
    {
        $this->fechahora = $fechahora;

        return $this;
    }

    /**
     * Get fechahora
     *
     * @return \DateTime 
     */
    public function getFechahora()
    {
        return $this->fechahora;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Ticket
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
     * Set operador
     *
     * @param \AppBundle\Entity\Operador $operador
     * @return Ticket
     */
    public function setOperador(\AppBundle\Entity\Operador $operador = null)
    {
        $this->operador = $operador;

        return $this;
    }

    /**
     * Get operador
     *
     * @return \AppBundle\Entity\Operador 
     */
    public function getOperador()
    {
        return $this->operador;
    }

    /**
     * Set operadorDestino
     *
     * @param \AppBundle\Entity\Operador $operadorDestino
     * @return Ticket
     */
    public function setOperadorDestino(\AppBundle\Entity\Operador $operadorDestino = null)
    {
        $this->operadorDestino = $operadorDestino;

        return $this;
    }

    /**
     * Get operadorDestino
     *
     * @return \AppBundle\Entity\Operador 
     */
    public function getOperadorDestino()
    {
        return $this->operadorDestino;
    }

    /**
     * Set servicio
     *
     * @param \AppBundle\Entity\Servicio $servicio
     * @return Ticket
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
     * Set ticketEstado
     *
     * @param \AppBundle\Entity\TicketEstado $ticketEstado
     * @return Ticket
     */
    public function setTicketEstado(\AppBundle\Entity\TicketEstado $ticketEstado = null)
    {
        $this->ticketEstado = $ticketEstado;

        return $this;
    }

    /**
     * Get ticketEstado
     *
     * @return \AppBundle\Entity\TicketEstado 
     */
    public function getTicketEstado()
    {
        return $this->ticketEstado;
    }

    /**
     * Set transaccionTipo
     *
     * @param \AppBundle\Entity\TransaccionTipo $transaccionTipo
     * @return Ticket
     */
    public function setTransaccionTipo(\AppBundle\Entity\TransaccionTipo $transaccionTipo = null)
    {
        $this->transaccionTipo = $transaccionTipo;

        return $this;
    }

    /**
     * Get transaccionTipo
     *
     * @return \AppBundle\Entity\TransaccionTipo 
     */
    public function getTransaccionTipo()
    {
        return $this->transaccionTipo;
    }
}
