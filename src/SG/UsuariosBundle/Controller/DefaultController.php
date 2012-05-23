<?php

namespace SG\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SGUsuariosBundle:Default:index.html.twig', array('name' => $name));
    }
}
