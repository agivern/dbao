<?php

/* DBAOSiteBundle:Default:realisation.html.twig */
class __TwigTemplate_5a2498f7bc0b6a8a9590a6086b8eb835 extends Twig_Template
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
        echo " - Book";
    }

    // line 6
    public function block_import($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/realisations.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_titreHeader($context, array $blocks = array())
    {
        // line 11
        echo "BOOK
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div id=\"tri_div\">
        ";
        // line 17
        if (((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "strategie")) {
            // line 18
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
            echo "\"><div id=\"tri\" class=\"enhaut\">
                <div id=\"background_tri\" class=\"Strategie\"></div>
                Toute catégorie
        ";
        } else {
            // line 22
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations", array("expertise" => "strategie")), "html", null, true);
            echo "\"><div id=\"tri\" class=\"enhaut\">
                <div id=\"background_tri\" class=\"Strategie\"></div>
                Stratégie
        ";
        }
        // line 26
        echo "        </div></a>

        ";
        // line 28
        if (((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "design")) {
            // line 29
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
            echo "\"><div id=\"tri\" class=\"droite enhaut\">
                <div id=\"background_tri\" class=\"Design\"></div>
                Toute catégorie
        ";
        } else {
            // line 33
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations", array("expertise" => "design")), "html", null, true);
            echo "\"><div id=\"tri\" class=\"droite enhaut\">
                <div id=\"background_tri\" class=\"Design\"></div>
                Design
        ";
        }
        // line 37
        echo "        </div></a>

        ";
        // line 39
        if (((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "developpement")) {
            // line 40
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
            echo "\"><div id=\"tri\">
                <div id=\"background_tri\" class=\"Developpement\"></div>
                Toute catégorie
        ";
        } else {
            // line 44
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations", array("expertise" => "developpement")), "html", null, true);
            echo "\"><div id=\"tri\">
                <div id=\"background_tri\" class=\"Developpement\"></div>
                Développement
        ";
        }
        // line 48
        echo "        </div></a>

       ";
        // line 50
        if (((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "motion")) {
            // line 51
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
            echo "\"><div id=\"tri\" style=\"margin-right: 0px;\">
                <div id=\"background_tri\" class=\"Motion\"></div>
                Toute catégorie
        ";
        } else {
            // line 55
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations", array("expertise" => "motion")), "html", null, true);
            echo "\"><div id=\"tri\" style=\"margin-right: 0px;\">
                <div id=\"background_tri\" class=\"Motion\"></div>
                3D/Motion design
        ";
        }
        // line 59
        echo "        </div></a>
    </div>

    ";
        // line 62
        $context["i"] = 0;
        // line 63
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisation"]) ? $context["realisation"] : $this->getContext($context, "realisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 64
            echo "        ";
            if (((((($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "strategie") && ((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "strategie")) || ($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "design") && ((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "design"))) || ($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "developpement") && ((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "developpement"))) || ($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "motion") && ((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == "motion"))) || ((isset($context["expertise"]) ? $context["expertise"] : $this->getContext($context, "expertise")) == ""))) {
                // line 65
                echo "            ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 66
                echo "            ";
                $context["j"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4);
                // line 67
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations_contenu", array("id" => $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "id"))), "html", null, true);
                echo "\">
            ";
                // line 68
                if ((((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 1) || ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 3))) {
                    // line 69
                    echo "                    <div id=\"realisation\">
            ";
                } elseif ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) == 2)) {
                    // line 71
                    echo "                    <div id=\"realisation\" class=\"particulier\">
            ";
                } elseif ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) == 0)) {
                    // line 73
                    echo "                <div id=\"realisation\" style=\"margin-right: 0px;\">
            ";
                }
                // line 75
                echo "                    <img id=\"rubrique_image\" src=\"/dbao_light_site/web/uploads/documents/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "url"), "html", null, true);
                echo "\"></img>
                    <div id=\"filtre\"></div>
                    <div id=\"rubrique_titre\">
                        ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "titre"), "html", null, true);
                echo "
                    </div>
                    <div id=\"realisation_description\">
                        ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "accroche"), "html", null, true);
                echo "
                    </div>
                </div>
            </a>
        ";
            }
            // line 86
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 87
        echo "<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:realisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 87,  207 => 86,  199 => 81,  193 => 78,  186 => 75,  182 => 73,  178 => 71,  174 => 69,  172 => 68,  167 => 67,  164 => 66,  161 => 65,  158 => 64,  153 => 63,  151 => 62,  146 => 59,  138 => 55,  130 => 51,  128 => 50,  124 => 48,  116 => 44,  108 => 40,  106 => 39,  102 => 37,  94 => 33,  86 => 29,  84 => 28,  80 => 26,  72 => 22,  64 => 18,  62 => 17,  59 => 16,  56 => 15,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  31 => 4,);
    }
}
