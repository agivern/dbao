<?php

namespace DBAO\AdminBundle\Controller;

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

	    return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Client:clients.html.twig', 
	    array('client' => $clients));
    }

    public function editionAction()
    {
        $client = new Client();
        $form = $this->createFormBuilder($client)
            ->add('emplacement')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $client->upload();
                
                try {
                    $em->persist($client);
                    $em->flush();
                }
                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_clients'));
                }

                return $this->redirect($this->generateUrl('dbao_admin_clients'));
            }
        }

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Client:edition.html.twig', array(
	    'form' => $form->createView()));
    }
    
    
    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $client = $em->find('DBAOBDDBundle:Client', $id);

        $em->remove($client);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_clients'));
    }

    public function modifierAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $client = $em->find('DBAOBDDBundle:Client', $id);
        $client->setEmplacement($_POST["form_id"]);
        $em->persist($client);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_clients'));
    }
}
