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


}
