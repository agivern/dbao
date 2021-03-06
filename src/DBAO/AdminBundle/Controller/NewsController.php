<?php

namespace DBAO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\News;
use DBAO\BDDBundle\Entity\ImagesNews;

class NewsController extends Controller
{
    public function indexAction()
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

	    return $this->container->get('templating')->renderResponse('DBAOAdminBundle:News:news.html.twig', 
	    array('news' => $news, 'images' => $images));
    }

    public function editionAction()
    {
        $em = $this->container->get('doctrine')->getManager();

        $news = new News();
        $form = $this->createFormBuilder($news)
            ->add('titre')
            ->add('date', 'date', array( 'years' => range(2007, 2030)))
            ->add('description', 'textarea', array( 'max_length' => 120))
            ->add('texte', 'textarea')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {

                try {
                    $em->persist($news);
                    $em->flush();
                }
                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_news'));
                }

                return $this->redirect($this->generateUrl('dbao_admin_news'));
            }
        }
        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:News:edition.html.twig', array(
	    'form' => $form->createView()));
    }

/************************************/
/*** Supprimer et modifier une news ***/
/************************************/
    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $news = $em->find('DBAOBDDBundle:News', $id);

        $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:ImagesNews');

        $query = $repository->createQueryBuilder('c')
            ->where('c.news = :news')
            ->setParameter('news', $news)
            ->getQuery();

        $images = $query->getResult();
        for($i = 0; $i < count($images); ++$i)
        {
            $em->remove($images[$i]);
        }
        $em->remove($news);
        $em->flush();

        return $this->redirect($this->generateUrl('dbao_admin_news'));
    }

    public function modifierAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $news = $em->find('DBAOBDDBundle:News', $id);

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:News:modifier.html.twig', array(
	    'news' => $news));
    }

    public function modifierUpdateAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $news = $em->find('DBAOBDDBundle:News', $id);
        $news->setTitre($_POST["form_titre"]);
        $news->setDescription($_POST["form_description"]);
        $news->setTexte($_POST["form_texte"]);

        $em->persist($news);
        $em->flush();

        return $this->redirect($this->generateUrl('dbao_admin_news'));
     }
/************************************/
/*** Traitement des images des news ***/
/************************************/

    public function modifierImageAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $news = $em->find('DBAOBDDBundle:News', $id);
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:News');

        $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:ImagesNews');

        $query = $repository->createQueryBuilder('c')
            ->where('c.news = :news')
            ->setParameter('news', $news)
            ->orderBy('c.emplacement', 'ASC')
            ->getQuery();

        $images = $query->getResult();

        $image = new ImagesNews ();
        $image->setNews($news);
        $form = $this->createFormBuilder($image)
            ->add('emplacement')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $image->upload();

                try {
                    $em->persist($image);
                    $em->flush();
                }
                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_news'));
                }
                return $this->redirect($this->generateUrl('dbao_admin_news_modifierImage', array('id' => $id)));
            }
        }

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:News:contenu.html.twig', 
	    array('image' => $images, 'form' => $form->createView(), 'retour' => $id));
    }

    public function deleteImageAction($id, $retour)
    {
        $em = $this->container->get('doctrine')->getManager();
        $images = $em->find('DBAOBDDBundle:ImagesNews', $id);

        $em->remove($images);
        $em->flush();

        return $this->redirect($this->generateUrl('dbao_admin_news_modifierImage', array('id' => $retour)));
    }

    public function updateImageAction($id, $retour)
    {
        $em = $this->container->get('doctrine')->getManager();
        $images = $em->find('DBAOBDDBundle:ImagesNews', $id);
        $images->setEmplacement($_POST["form_up"]);
        $em->persist($images);
        $em->flush();

        return $this->redirect($this->generateUrl('dbao_admin_news_modifierImage', array('id' => $retour)));
    }
}
