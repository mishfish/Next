<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e93a50487261fa2d4515231821f16ddb4a517dcd3fc22052564f5683d92221fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::template.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            ";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "        </div>
    </div>
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/media/estidea/8240761540761061/IT/mySites/final-next/app/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
