<?php

namespace SG\ParametricosBundle\Entity\Domicilio;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\ParametricosBundle\Entity\Domicilio\Pais
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pais
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
     * @ORM\OneToMany(targetEntity="Provincia", mappedBy="pais")
     */
    protected $provincias;


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
        $this->provincias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add provincias
     *
     * @param SG\ParametricosBundle\Entity\Domicilio\Provincia $provincias
     */
    public function addProvincia(\SG\ParametricosBundle\Entity\Domicilio\Provincia $provincias)
    {
        $this->provincias[] = $provincias;
    }

    /**
     * Get provincias
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProvincias()
    {
        return $this->provincias;
    }
}