<?php

namespace DBAO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DBAOAdminBundle:Default:accueil.html.twig');
    }
}
