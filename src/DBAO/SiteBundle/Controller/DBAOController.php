<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Slider;
use DBAO\BDDBundle\Entity\Personnel;

class DBAOController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Personnel');
        $query = $em->createQueryBuilder('p')
        ->getQuery();
        $personnel = $query->getResult();
        
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Slider');
        $query = $em->createQueryBuilder('s')
        ->orderBy('s.emplacement', 'ASC')
        ->getQuery();
        $slider = $query->getResult();
        return $this->render('DBAOSiteBundle:Default:dbao.html.twig', array('personnel' => $personnel, 'slider' => $slider));
    }
}
