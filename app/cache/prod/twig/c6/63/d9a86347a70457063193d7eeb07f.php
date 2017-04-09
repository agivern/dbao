<?php

/* DBAOSiteBundle:Default:accueil.html.twig */
class __TwigTemplate_c663d9a86347a70457063193d7eeb07f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DBAOSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'import' => array($this, 'block_import'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DBAOSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 6
    public function block_import($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/accueil.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <div id=\"slider\">
        <div id=\"mask\">
            <ul>
            ";
        // line 16
        $context["i"] = 0;
        // line 17
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 18
            echo "                ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 19
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 20
                echo "                    <li id=\"first\" class=\"firstanimation\">
                ";
            } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 2)) {
                // line 22
                echo "                    <li id=\"second\" class=\"secondanimation\">
                ";
            } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 3)) {
                // line 24
                echo "                    <li id=\"third\" class=\"thirdanimation\">
                ";
            } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                // line 26
                echo "                    <li id=\"fourth\" class=\"fourthanimation\">
                ";
            } else {
                // line 28
                echo "                    <li id=\"fifth\" class=\"fifthanimation\">
                ";
            }
            // line 30
            echo "                        <img src=\"/dbao_light_site/web/uploads/documents/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "bigUrl"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
            echo "\"/>
                        <div class=\"slideTitre\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
            echo "</div>
                    </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "            </ul>
        </div>
        <div class=\"progress-bar\"></div>
    </div>

    <div id=\"minSlider\">
        <div id=\"mask\">
            <ul>
            ";
        // line 42
        $context["i"] = 0;
        // line 43
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 44
            echo "                ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 45
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 46
                echo "                    <li id=\"first\" class=\"firstanimation\">
                ";
            } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 2)) {
                // line 48
                echo "                    <li id=\"second\" class=\"secondanimation\">
                ";
            } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 3)) {
                // line 50
                echo "                    <li id=\"third\" class=\"thirdanimation\">
                ";
            } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                // line 52
                echo "                    <li id=\"fourth\" class=\"fourthanimation\">
                ";
            } else {
                // line 54
                echo "                    <li id=\"fifth\" class=\"fifthanimation\">
                ";
            }
            // line 56
            echo "                        <img src=\"/dbao_light_site/web/uploads/documents/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "littleUrl"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
            echo "\"/>
                        <div class=\"slideTitre\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
            echo "</div>
                    </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "            </ul>
        </div>
        <div class=\"progress-bar\"></div>
    </div>

    <div id=\"titre_rubrique\">
        BOOK</br>
        <a id=\"lien_acces\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
        echo "\">Découvrir le book <p>></p></a>
    </div>

    <div class=\"realisationRubrique\">
    ";
        // line 71
        $context["i"] = 0;
        // line 72
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisation"]) ? $context["realisation"] : $this->getContext($context, "realisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 73
            echo "    ";
            if ($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "first")) {
                // line 74
                echo "        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 75
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations_contenu", array("id" => $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "id"))), "html", null, true);
                echo "\">
        ";
                // line 76
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    // line 77
                    echo "            <div id=\"realisation\" class=\"gauche\">
        ";
                } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 2)) {
                    // line 79
                    echo "            <div id=\"realisation\" class=\"gauche\" style=\"margin-right: 0px;\">
        ";
                } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 3)) {
                    // line 81
                    echo "            <div id=\"realisation\" class=\"droite\">
        ";
                } else {
                    // line 83
                    echo "            <div id=\"realisation\" class=\"droite\" style=\"margin-left: 10px;\">
        ";
                }
                // line 85
                echo "                <img id=\"rubrique_image\" src=\"/dbao_light_site/web/uploads/documents/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "url"), "html", null, true);
                echo "\"></img>
                <div id=\"rubrique_titre\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "titre"), "html", null, true);
                echo "</div>
                <div class=\"realisationAccroche\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "accroche"), "html", null, true);
                echo "</div>
            </div>
        </a>
    ";
            }
            // line 91
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        echo "    </div>

    <div id=\"titre_rubrique\">
        EXPERTISE</br>
        <a id=\"lien_acces\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_expertises"), "html", null, true);
        echo "\">Visiter la page <p>></p></a>
    </div>

    <div class=\"expertiseRubrique\">
        <div id=\"expertise\">
            <div id=\"rubrique_titre\">Stratégie</div>

            <div class=\"expertiseCadre\">
                <div id=\"logo\" class=\"strategie\"></div>

                <p class=\"accrocheExpertise\">
                    Nous élaborons</br>
                    des univers cohérents...
                </p>

                <p class=\"texteExpertise\">
                    ... en adéquation avec vous, avec votre
                    cible, pour une meilleure connivence entre
                    eux, et vous !
                </p>
            </div>
            <p class=\"motCleExpertise\">Identité</p>
            <p class=\"motCleExpertise\">Positionnement</p>
            <p class=\"motCleExpertise\">Diffusion</p>
        </div>

        <div id=\"expertise\" class=\"particulier\">
            <div id=\"rubrique_titre\">Design</div>

            <div class=\"expertiseCadre\">
                <div id=\"logo\" class=\"design\"></div>

                <p class=\"accrocheExpertise\">
                   Ecouter vos mots,</br>
                   pour communiquer sans !
                </p>

                <p class=\"texteExpertise\">
                    Nous utilisons le design comme un outil
                    purement fonctionnel : la forme au  service
                    du fond, pour valoriser le message.
                </p>
            </div>

            <p class=\"motCleExpertise\">Design Print</p>
            <p class=\"motCleExpertise\">Webdesign</p>
            <p class=\"motCleExpertise\">Aménagement de volumes</p>
        </div>

        <div id=\"expertise\">
            <div id=\"rubrique_titre\">Développement</div>

            <div class=\"expertiseCadre\">
                <div id=\"logo\" class=\"developpement\"></div>

                <p class=\"accrocheExpertise\">
                    L'architecture digitale</br>
                    multi-devices !
                </p>

                <p class=\"texteExpertise\">
                    Nous maîtrisons aussi bien les toutes
                    dernières technologies, que l'ensemble
                    des problématiques liées au web.
                </p>
            </div>

            <p class=\"motCleExpertise\">Back office</p>
            <p class=\"motCleExpertise\">Référencement naturel</p>
            <p class=\"motCleExpertise\">Hébergement</p>
        </div>

        <div id=\"expertise\" style=\"margin-right: 0px; margin-bottom: 0px;\">
            <div id=\"rubrique_titre\">3D / Motion design</div>

            <div class=\"expertiseCadre\">
                <div id=\"logo\" class=\"motion\"></div>

                <p class=\"accrocheExpertise\">
                    Show the real...</br>
                    with the virtual !
                </p>

                <p class=\"texteExpertise\">
                    Créez une immersion optimale, générez
                    une démarche participative en rendant
                    votre support interactif.
                </p>
            </div>

            <p class=\"motCleExpertise\">3D</p>
            <p class=\"motCleExpertise\">Animation</p>
            <p class=\"motCleExpertise\">Motion design</p>
        </div>
    </div>

    <div id=\"titre_rubrique\">
        NEWS</br>
        <a id=\"lien_acces\" href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_news"), "html", null, true);
        echo "\">Accédez a toutes <p>></p></a>
    </div>

    <div id=\"news_rubrique\">
        ";
        // line 198
        $context["i"] = 0;
        // line 199
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 200
            echo "            ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 201
            echo "            ";
            $context["j"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4);
            // line 202
            echo "            ";
            if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 1)) {
                // line 203
                echo "                <div id=\"news\">
            ";
            } elseif (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 2)) {
                // line 205
                echo "                <div id=\"news\" class=\"deux\">
            ";
            } elseif (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 3)) {
                // line 207
                echo "                <div id=\"news\" class=\"particulier\">
            ";
            } else {
                // line 209
                echo "                <div id=\"news\" class=\"particulier quatre\">
            ";
            }
            // line 211
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 212
                echo "                        ";
                if ((($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "news") == (isset($context["n"]) ? $context["n"] : $this->getContext($context, "n"))) && ($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "emplacement") == 1))) {
                    // line 213
                    echo "                            <img id=\"rubrique_image\" src=\"/dbao_light_site/web/uploads/documents/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"), "html", null, true);
                    echo "\"></img>
                        ";
                }
                // line 215
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 216
            echo "                    <p class=\"newsDescription\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "description"), "html", null, true);
            echo "</p>
                    <a id=\"lien_acces\" class=\"news\" href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_news_redi", array("name" => $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "titre"))), "html", null, true);
            echo "\">Lire la news <p>></p></a>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 220
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 220,  409 => 217,  404 => 216,  398 => 215,  392 => 213,  389 => 212,  384 => 211,  380 => 209,  376 => 207,  372 => 205,  368 => 203,  365 => 202,  362 => 201,  359 => 200,  354 => 199,  352 => 198,  345 => 194,  244 => 96,  238 => 92,  232 => 91,  225 => 87,  221 => 86,  216 => 85,  212 => 83,  208 => 81,  204 => 79,  200 => 77,  198 => 76,  193 => 75,  190 => 74,  187 => 73,  182 => 72,  180 => 71,  173 => 67,  164 => 60,  155 => 57,  148 => 56,  144 => 54,  140 => 52,  136 => 50,  132 => 48,  128 => 46,  125 => 45,  122 => 44,  117 => 43,  115 => 42,  105 => 34,  96 => 31,  89 => 30,  85 => 28,  81 => 26,  77 => 24,  73 => 22,  69 => 20,  66 => 19,  63 => 18,  58 => 17,  56 => 16,  50 => 12,  47 => 11,  40 => 7,  37 => 6,  30 => 4,);
    }
}
