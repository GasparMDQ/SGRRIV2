<?php

namespace SG\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SG\UsuariosBundle\Entity\DatosMedicos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SG\UsuariosBundle\Repository\DatosMedicosRepository")
 */
class DatosMedicos
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
     * @ORM\OneToOne(targetEntity="Usuario", mappedBy="datosMedicos")
     */
    private $usuario;

    /**
     * @var string $obraSocial
     *
     * @ORM\Column(name="obraSocial", type="string", length=255)
     */
    private $obraSocial;

    /**
     * @var string $numeroObra
     *
     * @ORM\Column(name="numeroObra", type="string", length=255)
     */
    private $numeroObra;

    /**
     * @var boolean $enfermedadCronica
     *
     * @ORM\Column(name="enfermedadCronica", type="boolean")
     */
    private $enfermedadCronica;

    /**
     * @var boolean $internaciones
     *
     * @ORM\Column(name="internaciones", type="boolean")
     */
    private $internaciones;

    /**
     * @var boolean $enfermedadContagiosa
     *
     * @ORM\Column(name="enfermedadContagiosa", type="boolean")
     */
    private $enfermedadContagiosa;

    /**
     * @var boolean $cirugias
     *
     * @ORM\Column(name="cirugias", type="boolean")
     */
    private $cirugias;

    /**
     * @var boolean $alergias
     *
     * @ORM\Column(name="alergias", type="boolean")
     */
    private $alergias;

    /**
     * @var boolean $vegetariano
     *
     * @ORM\Column(name="vegetariano", type="boolean")
     */
    private $vegetariano;

    /**
     * @var boolean $celiaco
     *
     * @ORM\Column(name="celiaco", type="boolean")
     */
    private $celiaco;

    /**
     * @var text $detalleDieta
     *
     * @ORM\Column(name="detalleDieta", type="text")
     */
    private $detalleDieta;

    /**
     * @var boolean $fumador
     *
     * @ORM\Column(name="fumador", type="boolean")
     */
    private $fumador;

    /**
     * @var boolean $lateralidad
     *
     * @ORM\Column(name="lateralidad", type="boolean")
     */
    private $lateralidad;

    /**
     * @var boolean $lentes
     *
     * @ORM\Column(name="lentes", type="boolean")
     */
    private $lentes;

    /**
     * @var boolean $audifonos
     *
     * @ORM\Column(name="audifonos", type="boolean")
     */
    private $audifonos;

    /**
     * @var boolean $limitacionFisica
     *
     * @ORM\Column(name="limitacionFisica", type="boolean")
     */
    private $limitacionFisica;

    /**
     * @ORM\ManyToOne(targetEntity="\SG\ParametricosBundle\Entity\TipoFactor")
     */
    protected $tipoFactor;
    
    /**
     * @ORM\ManyToOne(targetEntity="\SG\ParametricosBundle\Entity\TipoGrupo")
     */
    protected $tipoGrupo;
    
    /**
     * @ORM\ManyToMany(targetEntity="\SG\UsuariosBundle\Entity\DatosMedicos\Medicamentos")
     * @ORM\JoinTable(name="datoMedico_medicamento",
     *      joinColumns={@ORM\JoinColumn(name="datoMedico_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="medicamento_id", referencedColumnName="id")}
     *      )
     */
    private $medicamentos;

    public function __construct() {
    }
    
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
     * Set obraSocial
     *
     * @param string $obraSocial
     */
    public function setObraSocial($obraSocial)
    {
        $this->obraSocial = $obraSocial;
    }

    /**
     * Get obraSocial
     *
     * @return string 
     */
    public function getObraSocial()
    {
        return $this->obraSocial;
    }

    /**
     * Set numeroObra
     *
     * @param string $numeroObra
     */
    public function setNumeroObra($numeroObra)
    {
        $this->numeroObra = $numeroObra;
    }

    /**
     * Get numeroObra
     *
     * @return string 
     */
    public function getNumeroObra()
    {
        return $this->numeroObra;
    }

    /**
     * Set enfermedadCronica
     *
     * @param boolean $enfermedadCronica
     */
    public function setEnfermedadCronica($enfermedadCronica)
    {
        $this->enfermedadCronica = $enfermedadCronica;
    }

    /**
     * Get enfermedadCronica
     *
     * @return boolean 
     */
    public function getEnfermedadCronica()
    {
        return $this->enfermedadCronica;
    }

    /**
     * Set internaciones
     *
     * @param boolean $internaciones
     */
    public function setInternaciones($internaciones)
    {
        $this->internaciones = $internaciones;
    }

    /**
     * Get internaciones
     *
     * @return boolean 
     */
    public function getInternaciones()
    {
        return $this->internaciones;
    }

    /**
     * Set enfermedadContagiosa
     *
     * @param boolean $enfermedadContagiosa
     */
    public function setEnfermedadContagiosa($enfermedadContagiosa)
    {
        $this->enfermedadContagiosa = $enfermedadContagiosa;
    }

    /**
     * Get enfermedadContagiosa
     *
     * @return boolean 
     */
    public function getEnfermedadContagiosa()
    {
        return $this->enfermedadContagiosa;
    }

    /**
     * Set cirugias
     *
     * @param boolean $cirugias
     */
    public function setCirugias($cirugias)
    {
        $this->cirugias = $cirugias;
    }

    /**
     * Get cirugias
     *
     * @return boolean 
     */
    public function getCirugias()
    {
        return $this->cirugias;
    }

    /**
     * Set alergias
     *
     * @param boolean $alergias
     */
    public function setAlergias($alergias)
    {
        $this->alergias = $alergias;
    }

    /**
     * Get alergias
     *
     * @return boolean 
     */
    public function getAlergias()
    {
        return $this->alergias;
    }

    /**
     * Set vegetariano
     *
     * @param boolean $vegetariano
     */
    public function setVegetariano($vegetariano)
    {
        $this->vegetariano = $vegetariano;
    }

    /**
     * Get vegetariano
     *
     * @return boolean 
     */
    public function getVegetariano()
    {
        return $this->vegetariano;
    }

    /**
     * Set celiaco
     *
     * @param boolean $celiaco
     */
    public function setCeliaco($celiaco)
    {
        $this->celiaco = $celiaco;
    }

    /**
     * Get celiaco
     *
     * @return boolean 
     */
    public function getCeliaco()
    {
        return $this->celiaco;
    }

    /**
     * Set detalleDieta
     *
     * @param text $detalleDieta
     */
    public function setDetalleDieta($detalleDieta)
    {
        $this->detalleDieta = $detalleDieta;
    }

    /**
     * Get detalleDieta
     *
     * @return text 
     */
    public function getDetalleDieta()
    {
        return $this->detalleDieta;
    }

    /**
     * Set fumador
     *
     * @param boolean $fumador
     */
    public function setFumador($fumador)
    {
        $this->fumador = $fumador;
    }

    /**
     * Get fumador
     *
     * @return boolean 
     */
    public function getFumador()
    {
        return $this->fumador;
    }

    /**
     * Set lateralidad
     *
     * @param boolean $lateralidad
     */
    public function setLateralidad($lateralidad)
    {
        $this->lateralidad = $lateralidad;
    }

    /**
     * Get lateralidad
     *
     * @return boolean 
     */
    public function getLateralidad()
    {
        return $this->lateralidad;
    }

    /**
     * Set lentes
     *
     * @param boolean $lentes
     */
    public function setLentes($lentes)
    {
        $this->lentes = $lentes;
    }

    /**
     * Get lentes
     *
     * @return boolean 
     */
    public function getLentes()
    {
        return $this->lentes;
    }

    /**
     * Set audifonos
     *
     * @param boolean $audifonos
     */
    public function setAudifonos($audifonos)
    {
        $this->audifonos = $audifonos;
    }

    /**
     * Get audifonos
     *
     * @return boolean 
     */
    public function getAudifonos()
    {
        return $this->audifonos;
    }

    /**
     * Set limitacionFisica
     *
     * @param boolean $limitacionFisica
     */
    public function setLimitacionFisica($limitacionFisica)
    {
        $this->limitacionFisica = $limitacionFisica;
    }

    /**
     * Get limitacionFisica
     *
     * @return boolean 
     */
    public function getLimitacionFisica()
    {
        return $this->limitacionFisica;
    }

    /**
     * Set usuario
     *
     * @param SG\UsuariosBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\SG\UsuariosBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return SG\UsuariosBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set tipoFactor
     *
     * @param SG\ParametricosBundle\Entity\TipoFactor $tipoFactor
     */
    public function setTipoFactor(\SG\ParametricosBundle\Entity\TipoFactor $tipoFactor)
    {
        $this->tipoFactor = $tipoFactor;
    }

    /**
     * Get tipoFactor
     *
     * @return SG\ParametricosBundle\Entity\TipoFactor 
     */
    public function getTipoFactor()
    {
        return $this->tipoFactor;
    }

    /**
     * Set tipoGrupo
     *
     * @param SG\ParametricosBundle\Entity\TipoGrupo $tipoGrupo
     */
    public function setTipoGrupo(\SG\ParametricosBundle\Entity\TipoGrupo $tipoGrupo)
    {
        $this->tipoGrupo = $tipoGrupo;
    }

    /**
     * Get tipoGrupo
     *
     * @return SG\ParametricosBundle\Entity\TipoGrupo 
     */
    public function getTipoGrupo()
    {
        return $this->tipoGrupo;
    }

    /**
     * Add medicamentos
     *
     * @param SG\UsuariosBundle\Entity\DatosMedicos\Medicamentos $medicamentos
     */
    public function addMedicamentos(\SG\UsuariosBundle\Entity\DatosMedicos\Medicamentos $medicamentos)
    {
        $this->medicamentos[] = $medicamentos;
    }

    /**
     * Get medicamentos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMedicamentos()
    {
        return $this->medicamentos;
    }
}