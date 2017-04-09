<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // dbao_utilisateur_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_utilisateur_homepage')), array (  '_controller' => 'DBAO\\UtilisateurBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/dbao')) {
            if (0 === strpos($pathinfo, '/dbao/admin')) {
                // dbao_admin_homepage
                if ($pathinfo === '/dbao/admin/index') {
                    return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dbao_admin_homepage',);
                }

                if (0 === strpos($pathinfo, '/dbao/admin/agence')) {
                    // dbao_admin_agence
                    if ($pathinfo === '/dbao/admin/agence') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\AgenceController::indexAction',  '_route' => 'dbao_admin_agence',);
                    }

                    // dbao_admin_agence_add_personnel
                    if ($pathinfo === '/dbao/admin/agence/addPerso') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\AgenceController::addPersoAction',  '_route' => 'dbao_admin_agence_add_personnel',);
                    }

                    // dbao_admin_agence_supprimer
                    if (0 === strpos($pathinfo, '/dbao/admin/agence/deletePerso') && preg_match('#^/dbao/admin/agence/deletePerso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_agence_supprimer')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\AgenceController::supprimerPersoAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/news')) {
                    // dbao_admin_news
                    if ($pathinfo === '/dbao/admin/news') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::indexAction',  '_route' => 'dbao_admin_news',);
                    }

                    // dbao_admin_news_edition
                    if ($pathinfo === '/dbao/admin/news/edition') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::editionAction',  '_route' => 'dbao_admin_news_edition',);
                    }

                    // dbao_admin_news_modifier
                    if (0 === strpos($pathinfo, '/dbao/admin/news/modifier') && preg_match('#^/dbao/admin/news/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_news_modifier')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::modifierAction',));
                    }

                    // dbao_admin_news_modifierImage
                    if (0 === strpos($pathinfo, '/dbao/admin/news/image') && preg_match('#^/dbao/admin/news/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_news_modifierImage')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::modifierImageAction',));
                    }

                    // dbao_admin_news_updateImages
                    if (0 === strpos($pathinfo, '/dbao/admin/news/update/contenu') && preg_match('#^/dbao/admin/news/update/contenu/(?P<id>[^/]++)/(?P<retour>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_news_updateImages')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::updateImageAction',));
                    }

                    if (0 === strpos($pathinfo, '/dbao/admin/news/delete')) {
                        // dbao_admin_news_supprimerImages
                        if (0 === strpos($pathinfo, '/dbao/admin/news/delete/contenu') && preg_match('#^/dbao/admin/news/delete/contenu/(?P<id>[^/]++)/(?P<retour>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_news_supprimerImages')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::deleteImageAction',));
                        }

                        // dbao_admin_news_supprimer
                        if (preg_match('#^/dbao/admin/news/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_news_supprimer')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::supprimerAction',));
                        }

                    }

                    // dbao_admin_news_modifierUp
                    if (0 === strpos($pathinfo, '/dbao/admin/news/modifier/update') && preg_match('#^/dbao/admin/news/modifier/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_news_modifierUp')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\NewsController::modifierUpdateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/slider')) {
                    // dbao_admin_slider
                    if ($pathinfo === '/dbao/admin/slider') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\SliderController::indexAction',  '_route' => 'dbao_admin_slider',);
                    }

                    // dbao_admin_slider_edition
                    if ($pathinfo === '/dbao/admin/slider/edition') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\SliderController::editionAction',  '_route' => 'dbao_admin_slider_edition',);
                    }

                    // dbao_admin_slider_delete
                    if (0 === strpos($pathinfo, '/dbao/admin/slider/delete') && preg_match('#^/dbao/admin/slider/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_slider_delete')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\SliderController::deleteAction',));
                    }

                    // dbao_admin_slider_update
                    if (0 === strpos($pathinfo, '/dbao/admin/slider/update') && preg_match('#^/dbao/admin/slider/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_slider_update')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\SliderController::updateAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/realisations')) {
                    // dbao_admin_realisations
                    if ($pathinfo === '/dbao/admin/realisations') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::indexAction',  '_route' => 'dbao_admin_realisations',);
                    }

                    // dbao_admin_realisations_edition
                    if ($pathinfo === '/dbao/admin/realisations/creation') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::editionAction',  '_route' => 'dbao_admin_realisations_edition',);
                    }

                    if (0 === strpos($pathinfo, '/dbao/admin/realisations/update')) {
                        // dbao_admin_realisations_update
                        if (preg_match('#^/dbao/admin/realisations/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_update')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::updateAction',));
                        }

                        // dbao_admin_realisations_updateFirst
                        if (0 === strpos($pathinfo, '/dbao/admin/realisations/updateFirst') && preg_match('#^/dbao/admin/realisations/updateFirst/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_updateFirst')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::updateFirstAction',));
                        }

                        // dbao_admin_realisations_update_contenu
                        if (0 === strpos($pathinfo, '/dbao/admin/realisations/update/contenu') && preg_match('#^/dbao/admin/realisations/update/contenu/(?P<id>[^/]++)/(?P<retour>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_update_contenu')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::updateContenuAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/dbao/admin/realisations/modifi')) {
                        if (0 === strpos($pathinfo, '/dbao/admin/realisations/modifier')) {
                            // dbao_admin_realisations_modifier
                            if (preg_match('#^/dbao/admin/realisations/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_modifier')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::modifierAction',));
                            }

                            // dbao_admin_realisations_modifier_update
                            if (0 === strpos($pathinfo, '/dbao/admin/realisations/modifier/update') && preg_match('#^/dbao/admin/realisations/modifier/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_modifier_update')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::modifierUpdateAction',));
                            }

                        }

                        // dbao_admin_realisations_modification
                        if (0 === strpos($pathinfo, '/dbao/admin/realisations/modification') && preg_match('#^/dbao/admin/realisations/modification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_modification')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::modificationAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/dbao/admin/realisations/supprimer')) {
                        // dbao_admin_realisations_supprimer
                        if (preg_match('#^/dbao/admin/realisations/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_supprimer')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::supprimerAction',));
                        }

                        // dbao_admin_realisations_supprimer_contenu
                        if (0 === strpos($pathinfo, '/dbao/admin/realisations/supprimer/contenu') && preg_match('#^/dbao/admin/realisations/supprimer/contenu/(?P<id>[^/]++)/(?P<retour>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_realisations_supprimer_contenu')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\RealisationsController::supprimerContenuAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/clients')) {
                    // dbao_admin_clients
                    if ($pathinfo === '/dbao/admin/clients') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\ClientsController::indexAction',  '_route' => 'dbao_admin_clients',);
                    }

                    // dbao_admin_clients_edition
                    if ($pathinfo === '/dbao/admin/clients/edition') {
                        return array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\ClientsController::editionAction',  '_route' => 'dbao_admin_clients_edition',);
                    }

                    // dbao_admin_clients_supprimer
                    if (0 === strpos($pathinfo, '/dbao/admin/clients/supprimer') && preg_match('#^/dbao/admin/clients/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_clients_supprimer')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\ClientsController::supprimerAction',));
                    }

                    // dbao_admin_clients_modifier
                    if (0 === strpos($pathinfo, '/dbao/admin/clients/modifier') && preg_match('#^/dbao/admin/clients/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_admin_clients_modifier')), array (  '_controller' => 'DBAO\\AdminBundle\\Controller\\ClientsController::modifierAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/log')) {
                    if (0 === strpos($pathinfo, '/dbao/admin/login')) {
                        // fos_user_security_login
                        if ($pathinfo === '/dbao/admin/login') {
                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                        }

                        // fos_user_security_check
                        if ($pathinfo === '/dbao/admin/login_check') {
                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                        }

                    }

                    // fos_user_security_logout
                    if ($pathinfo === '/dbao/admin/logout') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/profile')) {
                    // fos_user_profile_show
                    if (rtrim($pathinfo, '/') === '/dbao/admin/profile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_profile_show;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                    }
                    not_fos_user_profile_show:

                    // fos_user_profile_edit
                    if ($pathinfo === '/dbao/admin/profile/edit') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                    }

                }

                if (0 === strpos($pathinfo, '/dbao/admin/re')) {
                    if (0 === strpos($pathinfo, '/dbao/admin/register')) {
                        // fos_user_registration_register
                        if (rtrim($pathinfo, '/') === '/dbao/admin/register') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                        }

                        if (0 === strpos($pathinfo, '/dbao/admin/register/c')) {
                            // fos_user_registration_check_email
                            if ($pathinfo === '/dbao/admin/register/check-email') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_check_email;
                                }

                                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                            }
                            not_fos_user_registration_check_email:

                            if (0 === strpos($pathinfo, '/dbao/admin/register/confirm')) {
                                // fos_user_registration_confirm
                                if (preg_match('#^/dbao/admin/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_fos_user_registration_confirm;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                                }
                                not_fos_user_registration_confirm:

                                // fos_user_registration_confirmed
                                if ($pathinfo === '/dbao/admin/register/confirmed') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_fos_user_registration_confirmed;
                                    }

                                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                                }
                                not_fos_user_registration_confirmed:

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/dbao/admin/resetting')) {
                        // fos_user_resetting_request
                        if ($pathinfo === '/dbao/admin/resetting/request') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_resetting_request;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                        }
                        not_fos_user_resetting_request:

                        // fos_user_resetting_send_email
                        if ($pathinfo === '/dbao/admin/resetting/send-email') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_fos_user_resetting_send_email;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                        }
                        not_fos_user_resetting_send_email:

                        // fos_user_resetting_check_email
                        if ($pathinfo === '/dbao/admin/resetting/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_resetting_check_email;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                        }
                        not_fos_user_resetting_check_email:

                        // fos_user_resetting_reset
                        if (0 === strpos($pathinfo, '/dbao/admin/resetting/reset') && preg_match('#^/dbao/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_fos_user_resetting_reset;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                        }
                        not_fos_user_resetting_reset:

                    }

                }

                // fos_user_change_password
                if ($pathinfo === '/dbao/admin/change-password/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

            // dbao_site_homepage
            if ($pathinfo === '/dbao/index') {
                return array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dbao_site_homepage',);
            }

            // dbao_site_agence
            if ($pathinfo === '/dbao/agence') {
                return array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\DBAOController::indexAction',  '_route' => 'dbao_site_agence',);
            }

            // dbao_site_expertises
            if ($pathinfo === '/dbao/expertises') {
                return array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\ExpertisesController::indexAction',  '_route' => 'dbao_site_expertises',);
            }

            if (0 === strpos($pathinfo, '/dbao/realisations')) {
                // dbao_site_realisations
                if (preg_match('#^/dbao/realisations(?:/(?P<expertise>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_site_realisations')), array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\RealisationsController::indexAction',  'expertise' => NULL,));
                }

                // dbao_site_realisations_contenu
                if (0 === strpos($pathinfo, '/dbao/realisations/contenu') && preg_match('#^/dbao/realisations/contenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_site_realisations_contenu')), array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\RealisationsController::contenuAction',));
                }

            }

            if (0 === strpos($pathinfo, '/dbao/c')) {
                // dbao_site_clients
                if ($pathinfo === '/dbao/clients') {
                    return array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\ClientsController::indexAction',  '_route' => 'dbao_site_clients',);
                }

                // dbao_site_contact
                if ($pathinfo === '/dbao/contact') {
                    return array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\ContactController::indexAction',  '_route' => 'dbao_site_contact',);
                }

            }

            if (0 === strpos($pathinfo, '/dbao/news')) {
                // dbao_site_news
                if ($pathinfo === '/dbao/news') {
                    return array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\NewsController::indexAction',  '_route' => 'dbao_site_news',);
                }

                // dbao_site_news_redi
                if (0 === strpos($pathinfo, '/dbao/news/redir') && preg_match('#^/dbao/news/redir/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbao_site_news_redi')), array (  '_controller' => 'DBAO\\SiteBundle\\Controller\\NewsController::redirectAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
