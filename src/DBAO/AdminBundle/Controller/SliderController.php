<?php

namespace DBAO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Slider;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SliderController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Slider');
        $query = $em->createQueryBuilder('s')
        ->orderBy('s.emplacement', 'ASC')
        ->getQuery();
        $slider = $query->getResult();

	    return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Slider:slider.html.twig', 
	    array('slider' => $slider));
    }

/************************************/
/*** Edition du slider ***/
/************************************/
    public function editionAction()
    {
        $em = $this->container->get('doctrine')->getManager();

        $slider = new Slider();
        $form = $this->createFormBuilder($slider)
            ->add('titre')
            ->add('emplacement')
            ->add('bigFile')
            ->add('littleFile')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {

                $slider->uploadBig();
                $slider->uploadLittle();

                try {
                    $em->persist($slider);
                    $em->flush();
                }

                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_slider'));
                }

                return $this->redirect($this->generateUrl('dbao_admin_slider'));
            }
        }

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Slider:edition.html.twig', array(
	    'form' => $form->createView()));
    }
    
/************************************/
/*** Supprimer un slide ***/
/************************************/
    public function deleteAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $slider = $em->find('DBAOBDDBundle:Slider', $id);

        $em->remove($slider);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_slider'));
    }

/************************************/
/*** Mise a jour des emplacements des slides ***/
/************************************/
    public function updateAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $slider = $em->find('DBAOBDDBundle:Slider', $id);
        $slider->setEmplacement($_POST["form_id"]);
        $em->persist($slider);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_slider'));
    }
}
