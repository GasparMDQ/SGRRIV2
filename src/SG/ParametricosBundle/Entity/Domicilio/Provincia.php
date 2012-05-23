<?php

namespace SG\ParametricosBundle\Entity\Domicilio;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\ParametricosBundle\Entity\Domicilio\Provincia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Provincia
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Ciudad", mappedBy="provincia")
     */
    protected $ciudades;

    /**
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="provincias")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;
    
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function __construct()
    {
        $this->ciudades = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add ciudades
     *
     * @param SG\ParametricosBundle\Entity\Domicilio\Ciudad $ciudades
     */
    public function addCiudad(\SG\ParametricosBundle\Entity\Domicilio\Ciudad $ciudades)
    {
        $this->ciudades[] = $ciudades;
    }

    /**
     * Get ciudades
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCiudades()
    {
        return $this->ciudades;
    }

    /**
     * Set pais
     *
     * @param SG\ParametricosBundle\Entity\Domicilio\Pais $pais
     */
    public function setPais(\SG\ParametricosBundle\Entity\Domicilio\Pais $pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get pais
     *
     * @return SG\ParametricosBundle\Entity\Domicilio\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }
}