<?php

/* DBAOSiteBundle:Default:expertises.html.twig */
class __TwigTemplate_dc04536857bf40b6df3c237473eef3e5 extends Twig_Template
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
        echo " - Expertises";
    }

    // line 6
    public function block_import($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dbaosite/css/expertise.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_titreHeader($context, array $blocks = array())
    {
        // line 11
        echo "EXPERTISES
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"phraseExpertise\">
        DONNER VIE AUX BONNES IDÉES
    </div>

    <div id=\"methodologie\">Méthodologie</div>
    <div class=\"methode\">
        <center><p class=\"nombre\">1.</p></center>
        <p class=\"titreMethode\">Découvrir</p>
        <p class=\"detailMethode\">Vous rencontrer, vous écouter, vous comprendre.</p>
    </div>

    <div class=\"methode\">
        <center><p class=\"nombre\">2.</p></center>
        <p class=\"titreMethode\">Définir</p>
        <p class=\"detailMethode\">Statuer sur vos besoins, les anticiper.</p>
    </div>

    <div class=\"methode\">
        <center><p class=\"nombre\">3.</p></center>
        <p class=\"titreMethode\">Planifier</p>
        <p class=\"detailMethode\">Éstimer la durée, créer un retro-plannig.</p>
    </div>

    <div class=\"methode\">
        <center><p class=\"nombre\">4.</p></center>
        <p class=\"titreMethode\">Designer & Développer</p>
        <p class=\"detailMethode\">Beau, intuitif & fonctionnel... mais surtout opérationnel !</p>
    </div>

    <div class=\"methode\">
        <center><p class=\"nombre\">5.</p></center>
        <p class=\"titreMethode\">Livrer</p>
        <p class=\"detailMethode\">L’occasion de trinquer :)</p>
    </div>

    <div class=\"methode lastMethode\">
        <center><p class=\"nombre\">6.</p></center>
        <p class=\"titreMethode\">Optimiser</p>
        <p class=\"detailMethode\">Nous restons à vos cotés, près à faire évoluer notre projet.</p>
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
";
    }

    public function getTemplateName()
    {
        return "DBAOSiteBundle:Default:expertises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  56 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  31 => 4,);
    }
}
