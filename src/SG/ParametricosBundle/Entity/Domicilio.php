<?php

namespace SG\ParametricosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\ParametricosBundle\Entity\Domicilio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SG\ParametricosBundle\Repository\DomicilioRepository")
 */
class Domicilio
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
     * @var string $calle
     *
     * @ORM\Column(name="calle", type="string", length=255)
     */
    private $calle;

    /**
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string $dpto
     *
     * @ORM\Column(name="dpto", type="string", length=255)
     */
    private $dpto;

    /**
     * @var string $piso
     *
     * @ORM\Column(name="piso", type="string", length=255)
     */
    private $piso;

    /**
     * @var string $codigoPostal
     *
     * @ORM\Column(name="codigoPostal", type="string", length=255)
     */
    private $codigoPostal;

    /**
     * @ORM\ManyToOne(targetEntity="SG\ParametricosBundle\Entity\Domicilio\Pais")
     */
    protected $pais;

    /**
     * @ORM\ManyToOne(targetEntity="SG\ParametricosBundle\Entity\Domicilio\Provincia")
     */
    protected $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="SG\ParametricosBundle\Entity\Domicilio\Ciudad")
     */
    protected $ciudad;
    
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
     * Set calle
     *
     * @param string $calle
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
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
     * Set dpto
     *
     * @param string $dpto
     */
    public function setDpto($dpto)
    {
        $this->dpto = $dpto;
    }

    /**
     * Get dpto
     *
     * @return string 
     */
    public function getDpto()
    {
        return $this->dpto;
    }

    /**
     * Set piso
     *
     * @param string $piso
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set pais
     *
     * @param SG\ParametricosBundle\Entity\Pais $pais
     */
    public function setPais(\SG\ParametricosBundle\Entity\Pais $pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get pais
     *
     * @return SG\ParametricosBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param SG\ParametricosBundle\Entity\Provincia $provincia
     */
    public function setProvincia(\SG\ParametricosBundle\Entity\Provincia $provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return SG\ParametricosBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set ciudad
     *
     * @param SG\ParametricosBundle\Entity\Ciudad $ciudad
     */
    public function setCiudad(\SG\ParametricosBundle\Entity\Ciudad $ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return SG\ParametricosBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}