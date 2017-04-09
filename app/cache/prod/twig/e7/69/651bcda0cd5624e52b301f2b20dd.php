<?php

/* DBAOSiteBundle:Default:contact.html.twig */
class __TwigTemplate_e769651bcda0cd5624e52b301f2b20dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DBAOSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titreHeader' => array($this, 'block_titreHeader'),
            'import' => array($this, 'block_import'),
            'body' => array($this, 'block_body'),
            'map' => array($this, 'block_map'),
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
        echo " - Contact";
    }

    // line 6
    public function block_titreHeader($context, array $blocks = array())
    {
        // line 7
        echo "CONTACT
";
    }

    // line 10
    public function block_import($context, array $blocks = array())
    {
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/contact.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <script type=\"text/javascript\"
        src=\"https://maps.googleapis.com/maps/api/js?AIzaSyDr2CQYrUSaKuEnMa30FNefiaPByzs2gIo&sensor=false\">
    </script>

    <script type=\"text/javascript\">
        function initialize() {

            var styles = {
            'monTheme':
                [{
                    featureType: 'all',
                    stylers: [
                        {saturation: -150},
                        {gamma: 1.5}
                    ]
                },
                {
                    featureType: \"all\",
                    elementType: \"labels\",
                        stylers: [
                            {hue: \"#333333\"}
                        ]
                },
                {
                    featureType: \"water\",
                    stylers: [
                        {color: \"#7aa3d9\"},
                        {saturation: 0},
                        {gamma: 0}
                    ]
                },
            ]};

            if(window.innerWidth >= 1190)
            {
                var mapOptions = {
                    center: new google.maps.LatLng(47.6495, -2.7775),
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    disableDefaultUI: true,
                    mapTypeId: 'monTheme'
                };
            }
            else
            {
                var mapOptions = {
                    center: new google.maps.LatLng(47.6515, -2.7840),
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    disableDefaultUI: true,
                    mapTypeId: 'monTheme'
                };
            }

            var map = new google.maps.Map(document.getElementById(\"map\"),
                mapOptions);
            var styledMapType = new google.maps.StyledMapType(styles['monTheme'], {name: 'monTheme'});
            map.mapTypes.set('monTheme', styledMapType);

            var myLatlng = new google.maps.LatLng(47.6500682, -2.784085299999989);
            var image = \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/images/GOOGLE-green.png"), "html", null, true);
        echo "\";

            var myMarker = new google.maps.Marker({
\t            position: myLatlng,
\t            map: map,
\t            title: \"DBAO*\",
\t            icon: image
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
";
    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        // line 88
        echo "        <p class=\"phraseNews\">passez nous le bonjour !</p>
    </div> <!-- On ferme le contenu pour afficher la map corectement -->
    <div class=\"blockMap\"> <!-- Le template fermera cette div -->
        <div class=\"blockMapImage\"></div>
        <p class=\"adresse\">
            24, Boulevard de la résistance</br>
            56 000 - Vannes - FRANCE
        </p>
        <p class=\"contact\">
            Tél. : +33 2 97 67 54 93</br>
            contact@db-ao.com
        </p>
        <a href=\"mailto:contact@db-ao.com\" class=\"mail\"></a>
";
    }

    // line 104
    public function block_map($context, array $blocks = array())
    {
        // line 105
        echo "    <div id=\"map\"></div>
    <script type=\"text/javascript\">
        if(window.innerHeight >= 1080)
\t        document.getElementById('map').style.height = 600 + \"px\";
\t    else
            document.getElementById('map').style.height = 450 + \"px\";
\t</script>
";
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 105,  152 => 104,  135 => 88,  132 => 87,  116 => 73,  50 => 11,  47 => 10,  42 => 7,  39 => 6,  32 => 4,);
    }
}
