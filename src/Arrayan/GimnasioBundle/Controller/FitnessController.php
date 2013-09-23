<?php

namespace Arrayan\GimnasioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Arrayan\GimnasioBundle\Entity\Mensaje;
use Arrayan\GimnasioBundle\Form\MensajeType;

class FitnessController extends Controller
{
	/**
	 * Permite enviar mensaje modificado
	 */
    public function startAction()
    {
		// Comprobar autorización
		
		// llamar al mensaje
		$mensaje = "";
		
		// crear formulario con mensaje para poder modificar
		// TextArea Editor 
		$frm = $this->createFormBuilder()
			->add('de')
			->add('para', 'choice', array(
				'choices' => array(
					null => 'Seleccione un destinatario',
					'1' => 'Cristián Carrasco Vargas (informatica@studentfc.cl)',
					'3' => 'Andrés Calamardo (a.calamardo@cantantes.cl)'
				)
			))
			->add('cuerpo', 'textarea', array('label' => ' '))
			->getForm()
		;
		return $this->render('ArrayanGimnasioBundle:Fitness:start.html.twig', array(
			'mensaje' => $mensaje,
			'formulario' => $frm->createView(),
		));
    }
	
	public function startSendAction()
	{
		/*
			Aquí cómo para enviar el correo a
		*/ 
	}

    public function feedbackAction($hash)
    {
		// Url: /feedback/u/aaf221ff2d2a5a57567a (GET)
		$em = $this->getDoctrine()->getManager();
		// obtener usuario mediante hash
		$usuario = $em->getRepository('ArrayanGimnasioBundle:Participante')->findOneByHash($hash);
		// Comprobar si existe usuario
		if(!$usuario){
			throw $this->createNotFoundException('No existe esta página');
		}
		// Nuevo Mensaje
		$mensaje = new Mensaje();
		
		$mensaje->setDe($usuario);
		// Generar formulario y adjuntar mensaje
		$formulario = $this->createForm(new MesajeType(), $mensaje);
		
		return $this->render('ArrayanGimnasioBundle:Fitness:feedback.html.twig', array(
			'formulario' => $formulario->createView(),
		));
    }
	
	public function feedbackSendAction()
	{
		// Url: /feedback/send (POST)
		// redirect thanksAction
	}
	
	public function thanksAction()
	{
		// Url: /feedback/thanks
		return $this->render('ArrayanGimnasioBundle:Fitness:thanks.html.twig');
	}

    public function attainmentAction()
    {
		// Url: /attaiment/u/aaf221ff2d2a5a57567a
		// Informe....
		return $this->render('ArrayanGimnasioBundle:Fitness:attainment.html.twig');
    }

}
