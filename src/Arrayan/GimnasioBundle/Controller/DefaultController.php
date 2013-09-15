<?php

namespace Arrayan\GimnasioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArrayanGimnasioBundle:Default:index.html.twig');
    }
}
