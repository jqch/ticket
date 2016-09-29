<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anuncio
 *
 * @ORM\Table(name="anuncio", indexes={@ORM\Index(name="IDX_4B3BC0D4A6F796BE", columns={"agencia_id"})})
 * @ORM\Entity
 */
class Anuncio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anuncio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="anuncio_tipo", type="smallint", nullable=true)
     */
    private $anuncioTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="anuncio", type="string", length=255, nullable=true)
     */
    private $anuncio;

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
