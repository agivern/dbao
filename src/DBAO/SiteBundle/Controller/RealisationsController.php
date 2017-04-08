<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Realisation;
use DBAO\BDDBundle\Entity\ContenuRealisation;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RealisationsController extends Controller
{
    public function indexAction( $expertise )
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Realisation');
        $query = $em->createQueryBuilder('r')
        ->orderBy('r.emplacement', 'ASC')
        ->getQuery();
        $realisation = $query->getResult();

	    return $this->container->get('templating')->renderResponse('DBAOSiteBundle:Default:realisation.html.twig', 
	    array('realisation' => $realisation, 'expertise' => $expertise));
    }

/************************************/
/*** Voir le contenu ***/
/************************************/
    public function contenuAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $realisation = $em->find('DBAOBDDBundle:Realisation', $id);
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Realisation');

        $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:ContenuRealisation');

        $query = $repository->createQueryBuilder('c')
            ->where('c.realisation = :real')
            ->setParameter('real', $realisation)
            ->orderBy('c.emplacement', 'ASC')
            ->getQuery();

        $contenus = $query->getResult();


        return $this->container->get('templating')->renderResponse('DBAOSiteBundle:Default:contenu.html.twig', 
	    array('contenu' => $contenus, 'realisation' => $realisation ));
    }
}
