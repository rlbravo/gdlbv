<?php

namespace Arrayan\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Arrayan\GimnasioBundle\Entity\ParticipanteRepository")
 */
class Participante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=30)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=30)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=30)
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
	 * @ORM\OneToMany(targetEntity="Mensaje", mappedBy="de")
     */
    private $enviados;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Mensaje", mappedBy="para")
     */
    private $recibidos;

	/**
	 *
	 */
	public function __construct()
	{
		$this->enviados = new ArrayCollection();
		$this->recibidos = new ArrayCollection();
	}
	
	public function __toString()
	{
		return $this->nombre.' '.$this->apellido.' <'.$this->email.'>';
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
     * Set nombre
     *
     * @param string $nombre
     * @return Participante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
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
     * @return Participante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
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
     * Set email
     *
     * @param string $email
     * @return Participante
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
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
     * Set grupo
     *
     * @param string $grupo
     * @return Participante
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
    
        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return Participante
     */
    public function setArea($area)
    {
        $this->area = $area;
    
        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Participante
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * add enviado
     *
     * @param \Arrayan\GimnasioBundle\Entity\Mensaje $enviado
     * @return Participante
     */
    public function addEnviado(\Arrayan\GimnasioBundle\Entity\Mensaje $enviado)
    {
        $this->enviados[] = $enviado;
    
        return $this;
    }
	
	/**
	 * remove enviado
	 *
	 * @param \Arrayan\GimnasioBundle\Entity\Mensaje $enviado
	 */
	public function removeEnviado(\Arrayan\GimnasioBundle\Entity\Mensaje $enviado)
	{
		$this->enviados->removeElement($enviado);
	}

    /**
     * Get enviados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnviados()
    {
        return $this->enviados;
    }

    /**
     * Add recibido
     *
     * @param \Arrayan\GimnasioBundle\Entity\Mensaje $recibido
     * @return Participante
     */
    public function addRecibido(\Arrayan\GimnasioBundle\Entity\Mensaje $recibido)
    {
        $this->recibidos[] = $recibido;
    
        return $this;
    }
	
	/**
	 * Remove recibido
     *
     * @param \Arrayan\GimnasioBundle\Entity\Mensaje $recibido
	 */
	public function removeRecibido(\Arrayan\GimnasioBundle\Entity\Mensaje $recibido)
	{
		$this->recibidos->removeElement($recibido);
	}

    /**
     * Get recibidos
     *
     * @return \Doctrine\Common\Collections\Collection  
     */
    public function getRecibidos()
    {
        return $this->recibidos;
    }
}
