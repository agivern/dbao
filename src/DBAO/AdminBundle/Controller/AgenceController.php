<?php

namespace DBAO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Personnel;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AgenceController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Personnel');
        $query = $em->createQueryBuilder('p')
        ->getQuery();
        $personnel = $query->getResult();

	    return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Agence:agence.html.twig', 
	    array('personnel' => $personnel));
    }

/************************************/
/*** Edition du personnel ***/
/************************************/
    public function addPersoAction()
    {
        $em = $this->container->get('doctrine')->getManager();

        $personnel = new Personnel();
        $form = $this->createFormBuilder($personnel)
            ->add('nom')
            ->add('statut')
            ->add('phrase')
            ->add('fonction')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {

                $personnel->upload();

                try {
                    $em->persist($personnel);
                    $em->flush();
                }

                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_agence'));
                }

                return $this->redirect($this->generateUrl('dbao_admin_agence'));
            }
        }

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Agence:editionPerso.html.twig', array(
	    'form' => $form->createView()));
    }
    
/************************************/
/*** Supprimer un personnel ***/
/************************************/
    public function supprimerPersoAction ($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $personnel = $em->find('DBAOBDDBundle:Personnel', $id);

        $em->remove($personnel);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_agence'));
    }
}
