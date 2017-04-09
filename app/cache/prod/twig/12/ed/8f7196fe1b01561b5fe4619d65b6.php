<?php

/* DBAOSiteBundle:Default:clients.html.twig */
class __TwigTemplate_12ed8f7196fe1b01561b5fe4619d65b6 extends Twig_Template
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
        echo " - Clients";
    }

    // line 6
    public function block_import($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/clients.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_titreHeader($context, array $blocks = array())
    {
        // line 11
        echo "CLIENTS
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"phraseClient\">
        nos clients contents
    </div>

    ";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 22
            echo "        ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 23
            echo "        ";
            $context["j"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 8);
            // line 24
            echo "
        ";
            // line 25
            if ((((((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 1) || ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 3)) || ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 5)) || ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 7))) {
                // line 26
                echo "            <div class=\"client\">
        ";
            } elseif ((((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 2) || ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 6))) {
                // line 28
                echo "            <div class=\"client particulierUn\">
        ";
            } elseif (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 4)) {
                // line 30
                echo "            <div class=\"client particulierDeux\">
        ";
            } else {
                // line 32
                echo "            <div class=\"client particulierTrois\">
        ";
            }
            // line 34
            echo "                <img src=\"/dbao_light_site/web/uploads/documents/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "url"), "html", null, true);
            echo "\"/>
                <div class=\"filtre\"></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  95 => 32,  91 => 30,  87 => 28,  83 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  67 => 21,  65 => 20,  59 => 16,  56 => 15,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  31 => 4,);
    }
}
