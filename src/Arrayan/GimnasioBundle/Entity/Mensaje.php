<?php

namespace Arrayan\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensaje
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mensaje
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Participante", inversedBy="enviados")
     * @ORM\JoinColumn(name="de", referencedColumnName="id")
     */
    private $de;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Participante", inversedBy="recibidos")
     * @ORM\JoinColumn(name="para", referencedColumnName="id")
     */
    private $para;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cuerpo", type="text")
     */
    private $cuerpo;

    /**
     * @var integer
     *
     * @ORM\Column(name="creado_en", type="integer")
     */
    private $creadoEn;


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
     * Set de
     *
     * @param \Arrayan\GimnasioBundle\Entity\Participante $de
     * @return Mensaje
     */
    public function setDe(\Arrayan\GimnasioBundle\Entity\Participante $de=null)
    {
        $this->de = $de;
    
        return $this;
    }

    /**
     * Get de
     *
     * @return \Arrayan\GimnasioBundle\Entity\Participante 
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set para
     *
     * @param \Arrayan\GimnasioBundle\Entity\Participante $para
     * @return Mensaje
     */
    public function setPara(\Arrayan\GimnasioBundle\Entity\Participante $para=null)
    {
        $this->para = $para;
    
        return $this;
    }

    /**
     * Get para
     *
     * @return \Arrayan\GimnasioBundle\Entity\Participante 
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Mensaje
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cuerpo
     *
     * @param string $cuerpo
     * @return Mensaje
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;
    
        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string 
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    /**
     * Set creadoEn
     *
     * @param integer $creadoEn
     * @return Mensaje
     */
    public function setCreadoEn($creadoEn)
    {
        $this->creadoEn = $creadoEn;
    
        return $this;
    }

    /**
     * Get creadoEn
     *
     * @return integer 
     */
    public function getCreadoEn()
    {
        return $this->creadoEn;
    }
}
