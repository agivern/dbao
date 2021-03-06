<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Client;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ClientsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Client');
        $query = $em->createQueryBuilder('c')
        ->orderBy('c.emplacement', 'ASC')
        ->getQuery();
        $clients = $query->getResult();

	    return $this->container->get('templating')->renderResponse('DBAOSiteBundle:Default:clients.html.twig', 
	    array('client' => $clients));
    }

}
