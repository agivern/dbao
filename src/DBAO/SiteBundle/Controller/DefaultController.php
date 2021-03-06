<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Realisation;
use DBAO\BDDBundle\Entity\Slider;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Realisation');
        $query = $em->createQueryBuilder('r')
        ->orderBy('r.emplacement', 'ASC')
        ->setMaxResults(4)
        ->getQuery();
        $realisation = $query->getResult();

        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Client');
        $query = $em->createQueryBuilder('c')
        ->orderBy('c.emplacement', 'ASC')
        ->getQuery();
        $client = $query->getResult();

        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Slider');
        $query = $em->createQueryBuilder('s')
        ->orderBy('s.emplacement', 'ASC')
        ->getQuery();
        $slider = $query->getResult();

        $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:News');
        $query = $repository->createQueryBuilder('n')
            ->orderBy('n.date', 'DESC')
            ->getQuery();
        $news = $query->getResult();

        $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:ImagesNews');

        $query = $repository->createQueryBuilder('i')
            ->orderBy('i.emplacement', 'DESC')
            ->getQuery();
        $images = $query->getResult();

	    return $this->container->get('templating')->renderResponse('DBAOSiteBundle:Default:accueil.html.twig', 
	    array('realisation' => $realisation, 'client' => $client, 'slider' => $slider, 'news' => $news, 'images' => $images));
    }
}
