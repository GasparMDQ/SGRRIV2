<?php

namespace SG\UsuariosBundle\Entity\DatosMedicos;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\UsuariosBundle\Entity\DatosMedicos\Medicamentos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Medicamentos
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
     * @var string $monodroga
     *
     * @ORM\Column(name="monodroga", type="string", length=255)
     */
    private $monodroga;

    /**
     * @var string $cantidad
     *
     * @ORM\Column(name="cantidad", type="string", length=255)
     */
    private $cantidad;


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
     * Set monodroga
     *
     * @param string $monodroga
     */
    public function setMonodroga($monodroga)
    {
        $this->monodroga = $monodroga;
    }

    /**
     * Get monodroga
     *
     * @return string 
     */
    public function getMonodroga()
    {
        return $this->monodroga;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}