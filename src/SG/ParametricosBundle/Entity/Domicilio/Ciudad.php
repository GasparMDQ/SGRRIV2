<?php

namespace SG\ParametricosBundle\Entity\Domicilio;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\ParametricosBundle\Entity\Domicilio\Ciudad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ciudad
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
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="ciudades")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */
    protected $provincia;
    
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

    /**
     * Set provincia
     *
     * @param SG\ParametricosBundle\Entity\Domicilio\Provincia $provincia
     */
    public function setProvincia(\SG\ParametricosBundle\Entity\Domicilio\Provincia $provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return SG\ParametricosBundle\Entity\Domicilio\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}