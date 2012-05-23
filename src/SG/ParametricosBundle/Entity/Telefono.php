<?php

namespace SG\ParametricosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\ParametricosBundle\Entity\Telefono
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Telefono
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $codigoPais
     *
     * @ORM\Column(name="codigoPais", type="string", length=255)
     */
    private $codigoPais;

    /**
     * @var string $codigoArea
     *
     * @ORM\Column(name="codigoArea", type="string", length=255)
     */
    private $codigoArea;

    /**
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity="\SG\ParametricosBundle\Entity\TipoTelefono")
     */
    protected $tipoTelefono;

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
     * Set codigoPais
     *
     * @param string $codigoPais
     */
    public function setCodigoPais($codigoPais)
    {
        $this->codigoPais = $codigoPais;
    }

    /**
     * Get codigoPais
     *
     * @return string 
     */
    public function getCodigoPais()
    {
        return $this->codigoPais;
    }

    /**
     * Set codigoArea
     *
     * @param string $codigoArea
     */
    public function setCodigoArea($codigoArea)
    {
        $this->codigoArea = $codigoArea;
    }

    /**
     * Get codigoArea
     *
     * @return string 
     */
    public function getCodigoArea()
    {
        return $this->codigoArea;
    }

    /**
     * Set numero
     *
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set tipoTelefono
     *
     * @param SG\ParametricosBundle\Entity\TipoTelefono $tipoTelefono
     */
    public function setTipoTelefono(\SG\ParametricosBundle\Entity\TipoTelefono $tipoTelefono)
    {
        $this->tipoTelefono = $tipoTelefono;
    }

    /**
     * Get tipoTelefono
     *
     * @return SG\ParametricosBundle\Entity\TipoTelefono 
     */
    public function getTipoTelefono()
    {
        return $this->tipoTelefono;
    }
}