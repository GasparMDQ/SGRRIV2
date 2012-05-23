<?php

namespace SG\ParametricosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SGParametricosBundle:Default:index.html.twig', array('name' => $name));
    }
}
