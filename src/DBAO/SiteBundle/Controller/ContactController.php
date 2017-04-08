<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('DBAOSiteBundle:Default:contact.html.twig');
    }
}
