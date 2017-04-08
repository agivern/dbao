<?php

namespace DBAO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DBAO\BDDBundle\Entity\Realisation;
use DBAO\BDDBundle\Entity\ContenuRealisation;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RealisationsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('DBAOBDDBundle:Realisation');
        $query = $em->createQueryBuilder('r')
        ->orderBy('r.emplacement', 'ASC')
        ->getQuery();
        $realisation = $query->getResult();

	    return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Realisation:realisations.html.twig', 
	    array('realisation' => $realisation));
    }

/************************************/
/*** Création d'une réalisation ***/
/************************************/
    public function editionAction()
    {
        $em = $this->container->get('doctrine')->getManager();

        $realisation = new Realisation();
        $form = $this->createFormBuilder($realisation)
            ->add('titre')
            ->add('accroche')
            ->add('description', 'textarea')
            ->add('emplacement')
            ->add('first', 'checkbox', array('required' => false))
            ->add('strategie', 'checkbox', array('required' => false))
            ->add('design', 'checkbox', array('required' => false))
            ->add('developpement', 'checkbox', array('required' => false))
            ->add('motion', 'checkbox', array('required' => false))
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {

                $realisation->upload();

                try {
                    $em->persist($realisation);
                    $em->flush();
                }
                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_realisations'));
                }

                return $this->redirect($this->generateUrl('dbao_admin_realisations'));
            }
        }

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Realisation:edition.html.twig', array(
	    'form' => $form->createView()));
    }

/************************************/
/*** Supprimer une réalisation ***/
/************************************/
    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $realisation = $em->find('DBAOBDDBundle:Realisation', $id);

        $repository = $this->getDoctrine()->getRepository('DBAOBDDBundle:ContenuRealisation');

        $query = $repository->createQueryBuilder('c')
            ->where('c.realisation = :real')
            ->setParameter('real', $realisation)
            ->orderBy('c.emplacement', 'ASC')
            ->getQuery();

        $contenus = $query->getResult();
        for($i = 0; $i < count($contenus); ++$i)
        {
            $em->remove($contenus[$i]);
        }
        $em->remove($realisation);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_realisations'));
    }

/************************************/
/*** Supprimer un contenu ***/
/************************************/
    public function supprimerContenuAction($id, $retour)
    {
        $em = $this->container->get('doctrine')->getManager();
        $contenu = $em->find('DBAOBDDBundle:ContenuRealisation', $id);

        $em->remove($contenu);
        $em->flush();

        return $this->redirect($this->generateUrl('dbao_admin_realisations_modification', array('id' => $retour)));
    }

/************************************/
/*** Mise a jour des emplacements des réalisations ***/
/************************************/
    public function updateAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $realisation = $em->find('DBAOBDDBundle:Realisation', $id);
        $realisation->setEmplacement($_POST["form_id"]);
        $em->persist($realisation);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_realisations'));
    }

/************************************/
/*** Mise a jour de la premiere page ***/
/************************************/
    public function updateFirstAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $realisation = $em->find('DBAOBDDBundle:Realisation', $id);
        if (!empty($_POST["form_first"]))
            $realisation->setFirst(true);
        else
            $realisation->setFirst(false);
        $em->persist($realisation);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_realisations'));
    }

/************************************/
/*** Mise a jour des emplacements du contenu ***/
/************************************/
    public function updateContenuAction($id, $retour)
    {
        $em = $this->container->get('doctrine')->getManager();
        $contenu = $em->find('DBAOBDDBundle:ContenuRealisation', $id);
        $contenu->setEmplacement($_POST["form_up"]);
        $em->persist($contenu);
        $em->flush();

        return $this->redirect($this->generateUrl('dbao_admin_realisations_modification', array('id' => $retour)));
    }

/************************************/
/*** Rectifier les réalisation***/
/************************************/
    public function modifierAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $realisation = $em->find('DBAOBDDBundle:Realisation', $id);

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Realisation:modifier.html.twig', array(
	    'realisation' => $realisation));
    }

    public function modifierUpdateAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $realisation = $em->find('DBAOBDDBundle:Realisation', $id);
        $realisation->setTitre($_POST["form_titre"]);
        $realisation->setDescription($_POST["form_description"]);
        $realisation->setAccroche($_POST["form_accroche"]);
        if ( isset ( $_POST["form_developpement"] ) )
            $realisation->setDeveloppement(true);
        else
            $realisation->setDeveloppement(false);
        if ( isset ( $_POST["form_design"] ) )
            $realisation->setDesign(true);
        else
            $realisation->setDesign(false);
        if ( isset ( $_POST["form_strategie"] ) )
            $realisation->setStrategie(true);
        else
            $realisation->setStrategie(false);
        if ( isset ( $_POST["form_motion"] ) )
            $realisation->setMotion(true);
        else
            $realisation->setMotion(false);

        $em->persist($realisation);
        $em->flush();

        return new RedirectResponse($this->container->get('router')->generate('dbao_admin_realisations'));
    }

/************************************/
/*** Modification et ajout de contenu ***/
/************************************/
    public function modificationAction($id)
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

        $contenu = new ContenuRealisation();
        $contenu->setRealisation($realisation);
        $form = $this->createFormBuilder($contenu)
            ->add('emplacement')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $contenu->upload();

                try {
                    $em->persist($contenu);
                    $em->flush();
                }
                catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('dbao_admin_realisations'));
                }
                return $this->redirect($this->generateUrl('dbao_admin_realisations_modification', array('id' => $id)));
            }
        }

        return $this->container->get('templating')->renderResponse('DBAOAdminBundle:Realisation:contenu.html.twig', 
	    array('contenu' => $contenus, 'form' => $form->createView(), 'retour' => $id));
    }
}
