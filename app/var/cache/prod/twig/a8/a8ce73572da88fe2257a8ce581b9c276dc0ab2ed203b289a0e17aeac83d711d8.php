<?php

/* base.html.twig */
class __TwigTemplate_bfa6bf445bc6ed2d94a6819cf0eba699eab69d9f1c5743a9669cfb5adfe04982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'currentstylesheets' => array($this, 'block_currentstylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'topbar' => array($this, 'block_topbar'),
            'wrapper' => array($this, 'block_wrapper'),
            'footer' => array($this, 'block_footer'),
            'currentjavascripts' => array($this, 'block_currentjavascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"TODO DESCRIPTION\">
        <meta name=\"author\" content=\"palemoon\">
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/next-default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/next.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Fonts -->
        <!--<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type='text/css'>-->
        <!-- Additional CSS styles if necessary for current twig page -->
        ";
        // line 18
        $this->displayBlock('currentstylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('wrapper', $context, $blocks);
        // line 28
        echo "        

        ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "
        <!-- Additional javascripts if necessary for current twig page -->
        ";
        // line 33
        $this->displayBlock('currentjavascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Пространство NEXT";
    }

    // line 18
    public function block_currentstylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
    }

    // line 24
    public function block_topbar($context, array $blocks = array())
    {
    }

    // line 26
    public function block_wrapper($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 33
    public function block_currentjavascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  133 => 30,  126 => 26,  121 => 24,  116 => 23,  111 => 21,  106 => 18,  100 => 9,  94 => 34,  92 => 33,  88 => 31,  86 => 30,  82 => 28,  80 => 26,  77 => 25,  74 => 24,  72 => 23,  69 => 22,  67 => 21,  63 => 19,  61 => 18,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 9,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/media/estidea/8240761540761061/IT/mySites/final-next/app/app/Resources/views/base.html.twig");
    }
}
