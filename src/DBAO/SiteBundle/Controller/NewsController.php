<?php

namespace DBAO\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        try
        {
            $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:News');

            $query = $repository->createQueryBuilder('n')
                ->orderBy('n.date', 'DESC')
                ->getQuery();
            $news = $query->getResult();

            $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:ImagesNews');

            $query = $repository->createQueryBuilder('i')
                ->orderBy('i.emplacement', 'ASC')
                ->getQuery();
            $images = $query->getResult();
        }

        catch ( \Exception $e )
        {
            return $this->redirect($this->generateUrl('dbao_site_homepage'));
        }

	    return $this->container->get('templating')->renderResponse('DBAOSiteBundle:Default:news.html.twig', 
	    array('news' => $news, 'images' => $images));
    }
    
    public function redirectAction($name) {
        return $this->redirect($this->generateUrl('dbao_site_news') . '#' . $name);
    }
}
