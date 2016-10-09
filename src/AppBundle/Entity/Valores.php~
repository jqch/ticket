<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valores
 *
 * @ORM\Table(name="valores")
 * @ORM\Entity
 */
class Valores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="valores_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mensajecabecera", type="string", length=255, nullable=false)
     */
    private $mensajecabecera;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;

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
     * Set mensajecabecera
     *
     * @param string $mensajecabecera
     * @return Valores
     */
    public function setMensajecabecera($mensajecabecera)
    {
        $this->mensajecabecera = $mensajecabecera;

        return $this;
    }

    /**
     * Get mensajecabecera
     *
     * @return string 
     */
    public function getMensajecabecera()
    {
        return $this->mensajecabecera;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Valores
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Valores
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
