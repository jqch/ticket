<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="IDX_97A0ADA3F1AD916E", columns={"ventanilla_id"}), @ORM\Index(name="IDX_97A0ADA3A9B61B5B", columns={"ventanilla_id_destino"}), @ORM\Index(name="IDX_97A0ADA371CAA3E7", columns={"servicio_id"}), @ORM\Index(name="IDX_97A0ADA35609E41", columns={"ticket_estado_id"}), @ORM\Index(name="IDX_97A0ADA3A70D56FD", columns={"transaccion_tipo_id"}), @ORM\Index(name="IDX_97A0ADA34896F598", columns={"cliente_tipo_id"})})
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
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="smallint", nullable=true)
     */
    private $prioridad;

    /**
     * @var integer
     *
     * @ORM\Column(name="operador", type="integer", nullable=false)
     */
    private $operador;

    /**
     * @var integer
     *
     * @ORM\Column(name="agencia", type="integer", nullable=false)
     */
    private $agencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=false)
     */
    private $hora;

    /**
     * @var \Ventanilla
     *
     * @ORM\ManyToOne(targetEntity="Ventanilla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ventanilla_id", referencedColumnName="id")
     * })
     */
    private $ventanilla;

    /**
     * @var \Ventanilla
     *
     * @ORM\ManyToOne(targetEntity="Ventanilla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ventanilla_id_destino", referencedColumnName="id")
     * })
     */
    private $ventanillaDestino;

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
     * @var \ClienteTipo
     *
     * @ORM\ManyToOne(targetEntity="ClienteTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cliente_tipo_id", referencedColumnName="id")
     * })
     */
    private $clienteTipo;



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
     * Set prioridad
     *
     * @param integer $prioridad
     * @return Ticket
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set operador
     *
     * @param integer $operador
     * @return Ticket
     */
    public function setOperador($operador)
    {
        $this->operador = $operador;

        return $this;
    }

    /**
     * Get operador
     *
     * @return integer 
     */
    public function getOperador()
    {
        return $this->operador;
    }

    /**
     * Set agencia
     *
     * @param integer $agencia
     * @return Ticket
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return integer 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Ticket
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     * @return Ticket
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set ventanilla
     *
     * @param \AppBundle\Entity\Ventanilla $ventanilla
     * @return Ticket
     */
    public function setVentanilla(\AppBundle\Entity\Ventanilla $ventanilla = null)
    {
        $this->ventanilla = $ventanilla;

        return $this;
    }

    /**
     * Get ventanilla
     *
     * @return \AppBundle\Entity\Ventanilla 
     */
    public function getVentanilla()
    {
        return $this->ventanilla;
    }

    /**
     * Set ventanillaDestino
     *
     * @param \AppBundle\Entity\Ventanilla $ventanillaDestino
     * @return Ticket
     */
    public function setVentanillaDestino(\AppBundle\Entity\Ventanilla $ventanillaDestino = null)
    {
        $this->ventanillaDestino = $ventanillaDestino;

        return $this;
    }

    /**
     * Get ventanillaDestino
     *
     * @return \AppBundle\Entity\Ventanilla 
     */
    public function getVentanillaDestino()
    {
        return $this->ventanillaDestino;
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

    /**
     * Set clienteTipo
     *
     * @param \AppBundle\Entity\ClienteTipo $clienteTipo
     * @return Ticket
     */
    public function setClienteTipo(\AppBundle\Entity\ClienteTipo $clienteTipo = null)
    {
        $this->clienteTipo = $clienteTipo;

        return $this;
    }

    /**
     * Get clienteTipo
     *
     * @return \AppBundle\Entity\ClienteTipo 
     */
    public function getClienteTipo()
    {
        return $this->clienteTipo;
    }
}
