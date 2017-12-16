<?php

/* AppBundle:News:show.html.twig */
class __TwigTemplate_384b56d4a5db5bc2633c7bfa86a0b7757447d33426f2ed64a0cf72471ad22bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::template.html.twig", "AppBundle:News:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "caption", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"show-post-wrap\">
    <h1 class=\"text-centered show-post-header\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "caption", array()), "html", null, true);
        echo "</h1>
    <img class=\"img-fluid img-in-post\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["item"] ?? null), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "caption", array()), "html", null, true);
        echo "\" align=\"left\">
    <p class=\"post-attributes in-posts\">Дата публикации: ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "creationdate", array()), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</p> 
    <p class=\"post-attributes in-posts\">Категория: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "categorieId", array()), "html", null, true);
        echo "</p> 
    
    <p>";
        // line 14
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "textfull", array());
        echo "</p> 
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  59 => 12,  55 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:News:show.html.twig", "/media/estidea/8240761540761061/IT/mySites/final-next/app/src/AppBundle/Resources/views/News/show.html.twig");
    }
}
