<?php

namespace DBAO\BDDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DBAOBDDBundle:Default:accueil.html.twig');
    }
}
