<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExpertisesController extends Controller
{
    public function indexAction()
    {
        return $this->render('DBAOSiteBundle:Default:expertises.html.twig');
    }
}
