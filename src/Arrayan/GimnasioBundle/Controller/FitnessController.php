<?php

namespace Arrayan\GimnasioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FitnessController extends Controller
{
    public function startAction()
    {
		return $this->render('ArrayanGimnasioBundle:Fitness:start.html.twig');
    }
	
	public function startSendAction()
	{
		// redirect 
	}

    public function feedbackAction()
    {
		return $this->render('ArrayanGimnasioBundle:Fitness:feedback.html.twig');
    }
	
	public function feedbackSendAction()
	{
		// redirect thanksAction
	}
	
	public function thanksAction()
	{
		return $this->render('ArrayanGimnasioBundle:Fitness:thanks.html.twig');
	}

    public function attainmentAction()
    {
		return $this->render('ArrayanGimnasioBundle:attainment:feedback.html.twig');
    }

}
