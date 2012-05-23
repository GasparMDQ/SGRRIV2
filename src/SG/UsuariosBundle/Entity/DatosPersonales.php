<?php

namespace SG\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\UsuariosBundle\Entity\DatosPersonales
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SG\UsuariosBundle\Repository\DatosPersonalesRepository")
 */
class DatosPersonales
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
     * @OneToOne(targetEntity="Usuario", mappedBy="datosPersonales")
     */
    private $usuario;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string $documento
     *
     * @ORM\Column(name="documento", type="string", length=255)
     */
    private $documento;

    /**
     * @var date $fechaDeNacimiento
     *
     * @ORM\Column(name="fechaDeNacimiento", type="date")
     */
    private $fechaDeNacimiento;


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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set documento
     *
     * @param string $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set fechaDeNacimiento
     *
     * @param date $fechaDeNacimiento
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    /**
     * Get fechaDeNacimiento
     *
     * @return date 
     */
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }
}