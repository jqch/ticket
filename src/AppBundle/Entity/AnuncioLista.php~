<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnuncioLista
 *
 * @ORM\Table(name="anuncio_lista", indexes={@ORM\Index(name="IDX_4AF8A912963066FD", columns={"anuncio_id"})})
 * @ORM\Entity
 */
class AnuncioLista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anuncio_lista_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Anuncio
     *
     * @ORM\ManyToOne(targetEntity="Anuncio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="anuncio_id", referencedColumnName="id")
     * })
     */
    private $anuncio;


}
