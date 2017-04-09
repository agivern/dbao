<?php

/* DBAOSiteBundle::layout.html.twig */
class __TwigTemplate_5f6f9eeffbb27543761031431d3fd68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'import' => array($this, 'block_import'),
            'titreHeader' => array($this, 'block_titreHeader'),
            'body' => array($this, 'block_body'),
            'map' => array($this, 'block_map'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- on fixe le zoom des smartphones et tablettes -->
        <meta name=\"viewport\" content=\"user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/helvetib/stylesheet.css"), "html", null, true);
        echo "\" type=\"text/css\" charset=\"utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/open/stylesheet.css"), "html", null, true);
        echo "\" type=\"text/css\" charset=\"utf-8\" />
        ";
        // line 14
        $this->displayBlock('import', $context, $blocks);
        // line 16
        echo "    </head>

    <body>
        <div id=\"page\" class=\"general\">
            <header>
                <div class=\"titre\">
                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_homepage"), "html", null, true);
        echo "\">
                        <div class=\"logo\"></div><div class=\"star\"></div><br/><div class=\"creative\"></div>
                    </a>
                    <div class=\"titreHeader\">";
        // line 25
        $this->displayBlock('titreHeader', $context, $blocks);
        echo "</div>
                </div>

                <nav>
                    <ul>
                        <li id=\"lien_menu\" class=\"ouvrant agence\">DBAO*
                            <ul class=\"subMenu\">
                                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_agence"), "html", null, true);
        echo "\">Agence</a></li>
                                <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_expertises"), "html", null, true);
        echo "\">Expertises</a></li>
                            </ul>
                        </li>
                        <li id=\"lien_menu\" class=\"ouvrant\">Production
                            <ul class=\"subMenu\">
                                <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
        echo "\">Book</a></li>
                                <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_clients"), "html", null, true);
        echo "\">Clients</a></li>
                            </ul>
                        </li>
                        <div id=\"menuOrdi\">
                            <a id=\"lien_menu\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_news"), "html", null, true);
        echo "\">News</a>
                            <a id=\"lien_menu\" style=\"margin-right: 0px;\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_contact"), "html", null, true);
        echo "\">Contact</a>
                        </div>
                    </ul>                        
                </nav>
                    <div id=\"menuMobile\">
                        <a id=\"lien_menu\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_news"), "html", null, true);
        echo "\">News</a>
                        <a id=\"lien_menu\" style=\"margin-right: 0px;\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_contact"), "html", null, true);
        echo "\">Contact</a>
                    </div>
            </header>

            <div id=\"contenu\">
                ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "            </div>
        </div>
        ";
        // line 59
        $this->displayBlock('map', $context, $blocks);
        // line 61
        echo "        <footer id=\"page\">
            <div id=\"pied_de_page\">
                <div id=\"img_footer\"></div>
                <div id=\"footer_contact\">
                    <a id=\"footer_picto\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_contact"), "html", null, true);
        echo "\"></a>
                    24, Boulevard de résistance</br>
                    56 000 - Vannes - FRANCE</br>
                    <div id=\"footer_contact\" class=\"bold\">
                        +33 2 97 67 54 93</br>
                        contact@db-ao.com
                    </div>
                </div>
                <div id=\"footer_lien\">
                    <a href=\"http://www.db-ao.com\">www.db-ao.com</a></br>
                    DBAO* © 2013 - Mentions légales
                </div>
                <nav id=\"navigation_menu\">
                    <ul>
                        <li><span id=\"footer_menu\">DBAO*</span>
                            <ul class=\"subMenu\">
                                <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_agence"), "html", null, true);
        echo "\">Agence</a></li>
                                <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_expertises"), "html", null, true);
        echo "\">Expertises</a></li>
                            </ul>
                        </li>
                        <li><span id=\"footer_menu\">Production</span>
                            <ul class=\"subMenu\">
                                <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_realisations"), "html", null, true);
        echo "\">Réalisations</a></li>
                                <li><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_clients"), "html", null, true);
        echo "\">Clients</a></li>
                            </ul>
                        </li>
                        <a id=\"footer_menu\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_news"), "html", null, true);
        echo "\">News</a>
                        <a id=\"footer_menu\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbao_site_contact"), "html", null, true);
        echo "\"  style=\"margin-right: 0px;\">Contact</a>
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "DBAO";
    }

    // line 14
    public function block_import($context, array $blocks = array())
    {
        // line 15
        echo "        ";
    }

    // line 25
    public function block_titreHeader($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "                ";
    }

    // line 59
    public function block_map($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 60,  219 => 59,  215 => 56,  207 => 25,  203 => 15,  194 => 10,  178 => 91,  172 => 88,  168 => 87,  160 => 82,  156 => 81,  137 => 65,  131 => 61,  129 => 59,  123 => 55,  111 => 49,  103 => 44,  99 => 43,  92 => 39,  88 => 38,  80 => 33,  76 => 32,  60 => 22,  52 => 16,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  24 => 2,  418 => 220,  409 => 217,  404 => 216,  398 => 215,  392 => 213,  389 => 212,  384 => 211,  380 => 209,  376 => 207,  372 => 205,  368 => 203,  365 => 202,  362 => 201,  359 => 200,  354 => 199,  352 => 198,  345 => 194,  244 => 96,  238 => 92,  232 => 91,  225 => 87,  221 => 86,  216 => 85,  212 => 55,  208 => 81,  204 => 79,  200 => 14,  198 => 76,  193 => 75,  190 => 74,  187 => 73,  182 => 92,  180 => 71,  173 => 67,  164 => 60,  155 => 57,  148 => 56,  144 => 54,  140 => 52,  136 => 50,  132 => 48,  128 => 46,  125 => 57,  122 => 44,  117 => 43,  115 => 50,  105 => 34,  96 => 31,  89 => 30,  85 => 28,  81 => 26,  77 => 24,  73 => 22,  69 => 20,  66 => 25,  63 => 18,  58 => 17,  56 => 16,  50 => 14,  47 => 11,  40 => 7,  37 => 6,  30 => 4,);
    }
}
