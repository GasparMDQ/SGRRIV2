<?php

namespace SG\UsuariosBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * SG\UsuariosBundle\Entity\Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SG\UsuariosBundle\Repository\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface
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
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /** 
     * @ORM\OneToOne(targetEntity="DatosPersonales", inversedBy="usuario")
     */
    private $datosPersonales;

    /** 
     * @ORM\OneToOne(targetEntity="DatosMedicos", inversedBy="usuario")
     */
    private $datosMedicos;

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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    function isAccountNonExpired()
    {
    }

    function isAccountNonLocked()
    {
    }
    
    function isCredentialsNonExpired()
    {
    }
    
    function isEnabled()
    {
    }

    function getRoles()
    {
    }

    function getSalt()
    {
    }

    function eraseCredentials()
    {
    }

    function equals(UserInterface $user)
    {
    }

    

    /**
     * Set datosPersonales
     *
     * @param SG\UsuariosBundle\Entity\DatosPersonales $datosPersonales
     */
    public function setDatosPersonales(\SG\UsuariosBundle\Entity\DatosPersonales $datosPersonales)
    {
        $this->datosPersonales = $datosPersonales;
    }

    /**
     * Get datosPersonales
     *
     * @return SG\UsuariosBundle\Entity\DatosPersonales 
     */
    public function getDatosPersonales()
    {
        return $this->datosPersonales;
    }

    /**
     * Set datosMedicos
     *
     * @param SG\UsuariosBundle\Entity\DatosMedicos $datosMedicos
     */
    public function setDatosMedicos(\SG\UsuariosBundle\Entity\DatosMedicos $datosMedicos)
    {
        $this->datosMedicos = $datosMedicos;
    }

    /**
     * Get datosMedicos
     *
     * @return SG\UsuariosBundle\Entity\DatosMedicos 
     */
    public function getDatosMedicos()
    {
        return $this->datosMedicos;
    }
}