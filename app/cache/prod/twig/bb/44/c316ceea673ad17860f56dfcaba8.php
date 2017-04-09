<?php

/* DBAOSiteBundle:Default:dbao.html.twig */
class __TwigTemplate_bb44c316ceea673ad17860f56dfcaba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DBAOSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'import' => array($this, 'block_import'),
            'titreHeader' => array($this, 'block_titreHeader'),
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
        echo " - Agence";
    }

    // line 6
    public function block_import($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/agence.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_titreHeader($context, array $blocks = array())
    {
        // line 11
        echo "AGENCE
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <p class=\"phraseAgence\">de bouche à oreille...</p>

    <div id=\"slider\">
        <div id=\"mask\">
            <ul>
            ";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 22
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 2)) {
                // line 23
                echo "                    ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 24
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    // line 25
                    echo "                        <li id=\"first\" class=\"firstanimation\">
                    ";
                } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 2)) {
                    // line 27
                    echo "                        <li id=\"second\" class=\"secondanimation\">
                    ";
                }
                // line 29
                echo "                            <img src=\"/dbao_light_site/web/uploads/documents/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "bigUrl"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
                echo "\"/>
                            <div class=\"slideTitre\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
                echo "</div>
                        </li>
                ";
            }
            // line 33
            echo "            ";
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
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 2)) {
                // line 45
                echo "                    ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 46
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    // line 47
                    echo "                        <li id=\"first\" class=\"firstanimation\">
                    ";
                } elseif (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 2)) {
                    // line 49
                    echo "                        <li id=\"second\" class=\"secondanimation\">
                    ";
                }
                // line 51
                echo "                            <img src=\"/dbao_light_site/web/uploads/documents/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "littleUrl"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "titre"), "html", null, true);
                echo "\"/>
                        </li>
                ";
            }
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "            </ul>
        </div>
        <div class=\"progress-bar\"></div>
    </div>

    <div id=\"texteAgence\">
        <p>Dein Syria per speciosam interpatet diffusa planitiem. hanc nobilitat Antiochia, mundo cognita civitas, cui non certaverit alia  advecticiis ita adfluere copiis et internis, et Laodicia et Apamia itidemque Seleucia iam inde a primis auspiciis florentissimae.</p>
        </br>
        <p>Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae. Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.</p>
        </br>
        <p>Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.</p>
        
        <div id=\"metier\">
            <p class=\"titreMetier\"> Notre métier :</p>
            Iam in altera philosophiae parte. quae est quaerendi ac disserendi, quae logikh dicitur, iste vester plane, ut mihi quidem videtur, inermis ac nudus est. tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua.
            
            <p class=\"titreExpertise\">Expertises</p>
                <div id=\"picto\" class=\"strategie\"></div>
                <div id=\"picto\" class=\"design\"></div>
                <div id=\"picto\" class=\"developpement\"></div>
                <div id=\"picto\" class=\"motion\"></div>
            <div id=\"line\"></div>
            <a id=\"lien_acces\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_expertises"), "html", null, true);
        echo "\" class=\"lienHeader\">Découvrir la page <p>></p></a>
        </div>
    </div>

    <div id=\"personnel\">
        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 83
            echo "            <div class=\"perso\">
                <div class=\"name\">
                    <p class=\"nomPerso\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom"), "html", null, true);
            echo "</p>
                    <p class=\"statutPerso\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "statut"), "html", null, true);
            echo "</p>
                    <p class=\"fonctionPerso\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "fonction"), "html", null, true);
            echo "</p>
                </div>
                <img class=\"imagePerso\" src=\"/dbao_light_site/web/uploads/documents/";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "url"), "html", null, true);
            echo "\"></img>
                <div class=\"phrasePerso\"><p>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "phrase"), "html", null, true);
            echo "</p></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 93
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:dbao.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 93,  215 => 90,  211 => 89,  206 => 87,  202 => 86,  198 => 85,  194 => 83,  190 => 82,  182 => 77,  158 => 55,  152 => 54,  143 => 51,  139 => 49,  135 => 47,  132 => 46,  129 => 45,  126 => 44,  121 => 43,  119 => 42,  109 => 34,  103 => 33,  97 => 30,  90 => 29,  86 => 27,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  68 => 21,  66 => 20,  59 => 15,  56 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  31 => 4,);
    }
}
