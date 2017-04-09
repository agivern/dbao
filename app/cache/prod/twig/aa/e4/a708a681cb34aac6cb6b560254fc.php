<?php

/* DBAOSiteBundle:Default:news.html.twig */
class __TwigTemplate_aae4a708a681cb34aac6cb6b560254fc extends Twig_Template
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
        echo " - News";
    }

    // line 6
    public function block_import($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/news.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_titreHeader($context, array $blocks = array())
    {
        // line 11
        echo "NEWS
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"phraseNews\">
        QUOI DE NEUF CHEZ DBAO<p class=\"etoileNews\">*</p> ?
    </div>

    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 21
            echo "        <div id=\"news\">
        <div class=\"zoneImage\">
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 24
                echo "                ";
                if (($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "news") == (isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")))) {
                    // line 25
                    echo "                    <img class=\"news\" src=\"/dbao_light_site/web/uploads/documents/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "url"), "html", null, true);
                    echo "\"></img>
                ";
                }
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "        </div>

        <div class=\"zoneTexte\">
            <p class=\"titreNews\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "titre"), "html", null, true);
            echo "</p>
            <p class=\"dateNews\">";
            // line 32
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "date"), "long", "none", "fr"), "html", null, true);
            echo "</p>
            <p class=\"accrocheNews\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "description"), "html", null, true);
            echo "</p>
            <p class=\"texteNews\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "texte"), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  105 => 33,  101 => 32,  97 => 31,  92 => 28,  86 => 27,  80 => 25,  77 => 24,  73 => 23,  69 => 21,  65 => 20,  59 => 16,  56 => 15,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  31 => 4,);
    }
}
