<?php

/* AppBundle:News:index.html.twig */
class __TwigTemplate_11bc66b86b821fca4c1e01cf1ec871709b48d9d2ed160eaef176662255c4852a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::template.html.twig", "AppBundle:News:index.html.twig", 1);
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
        $__internal_aca75a0a38b06e64988ed22465f8d0087b6d5dfa0a10ed90c26a0c57ec9c6c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca75a0a38b06e64988ed22465f8d0087b6d5dfa0a10ed90c26a0c57ec9c6c57->enter($__internal_aca75a0a38b06e64988ed22465f8d0087b6d5dfa0a10ed90c26a0c57ec9c6c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:News:index.html.twig"));

        $__internal_49a8ee4d99f72b81f59f5c1c174eff68120ede1d08cdbc633a3bb85929aa4fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a8ee4d99f72b81f59f5c1c174eff68120ede1d08cdbc633a3bb85929aa4fa0->enter($__internal_49a8ee4d99f72b81f59f5c1c174eff68120ede1d08cdbc633a3bb85929aa4fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:News:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca75a0a38b06e64988ed22465f8d0087b6d5dfa0a10ed90c26a0c57ec9c6c57->leave($__internal_aca75a0a38b06e64988ed22465f8d0087b6d5dfa0a10ed90c26a0c57ec9c6c57_prof);

        
        $__internal_49a8ee4d99f72b81f59f5c1c174eff68120ede1d08cdbc633a3bb85929aa4fa0->leave($__internal_49a8ee4d99f72b81f59f5c1c174eff68120ede1d08cdbc633a3bb85929aa4fa0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55230f109038cf77c6285b75bb69f0f6ca7c9a16df6812419a6ea12c0a1ee107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55230f109038cf77c6285b75bb69f0f6ca7c9a16df6812419a6ea12c0a1ee107->enter($__internal_55230f109038cf77c6285b75bb69f0f6ca7c9a16df6812419a6ea12c0a1ee107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_923bb50294993c05f40beed8db76104954b88168a2ef2356f40fc56f1a78ae06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923bb50294993c05f40beed8db76104954b88168a2ef2356f40fc56f1a78ae06->enter($__internal_923bb50294993c05f40beed8db76104954b88168a2ef2356f40fc56f1a78ae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Главная
";
        
        $__internal_923bb50294993c05f40beed8db76104954b88168a2ef2356f40fc56f1a78ae06->leave($__internal_923bb50294993c05f40beed8db76104954b88168a2ef2356f40fc56f1a78ae06_prof);

        
        $__internal_55230f109038cf77c6285b75bb69f0f6ca7c9a16df6812419a6ea12c0a1ee107->leave($__internal_55230f109038cf77c6285b75bb69f0f6ca7c9a16df6812419a6ea12c0a1ee107_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a9448ba70bb52b5d9051f5df2c5b4e6faaaef83a49b9b423d62bb52d5db69a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9448ba70bb52b5d9051f5df2c5b4e6faaaef83a49b9b423d62bb52d5db69a9->enter($__internal_3a9448ba70bb52b5d9051f5df2c5b4e6faaaef83a49b9b423d62bb52d5db69a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_889da3cc437c3e70d987587c27cc70a69acfb42f05ef18aed22971d23611221b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889da3cc437c3e70d987587c27cc70a69acfb42f05ef18aed22971d23611221b->enter($__internal_889da3cc437c3e70d987587c27cc70a69acfb42f05ef18aed22971d23611221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "<div class=\"post\">
    <a href=\"/news/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "relativeUrl", array()), "html", null, true);
            echo "\"><h3 class=\"post-caption\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "caption", array()), "html", null, true);
            echo "</h3></a>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"/news/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "relativeUrl", array()), "html", null, true);
            echo "\">
                <img class=\"img-fluid img-polaroid\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["item"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "caption", array()), "html", null, true);
            echo "\">
            </a> 
        </div>
        <div class=\"col-md-6 post-announce\">
            <div><p class=\"post-attributes\">Дата публикации: ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "creationdate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</p> 
            <p class=\"post-attributes\">Автор: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "author", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "announce", array()), "html", null, true);
            echo "</p> 
            </div>
            <a href=\"/news/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "relativeUrl", array()), "html", null, true);
            echo "\" class=\"btn\">
                Читать далее...
            </a>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<div class=\"row justify-content-center\">
    <div class=\"navigation\">
        ";
        // line 31
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 31, $this->getSourceContext()); })()));
        echo "
    </div>
</div>
";
        
        $__internal_889da3cc437c3e70d987587c27cc70a69acfb42f05ef18aed22971d23611221b->leave($__internal_889da3cc437c3e70d987587c27cc70a69acfb42f05ef18aed22971d23611221b_prof);

        
        $__internal_3a9448ba70bb52b5d9051f5df2c5b4e6faaaef83a49b9b423d62bb52d5db69a9->leave($__internal_3a9448ba70bb52b5d9051f5df2c5b4e6faaaef83a49b9b423d62bb52d5db69a9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:News:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  124 => 29,  111 => 22,  106 => 20,  102 => 19,  98 => 18,  89 => 14,  85 => 13,  77 => 10,  74 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::template.html.twig' %}

{% block title %}
    Главная
{% endblock %}

{% block content %}
{% for item in pagination %}
<div class=\"post\">
    <a href=\"/news/{{item.relativeUrl}}\"><h3 class=\"post-caption\">{{ item.caption }}</h3></a>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"/news/{{item.relativeUrl}}\">
                <img class=\"img-fluid img-polaroid\" src=\"{{ vich_uploader_asset(item, 'imageFile') }}\" alt=\"{{ item.caption }}\">
            </a> 
        </div>
        <div class=\"col-md-6 post-announce\">
            <div><p class=\"post-attributes\">Дата публикации: {{ item.creationdate|date(\"F jS \\\\a\\\\t g:ia\")}}</p> 
            <p class=\"post-attributes\">Автор: {{ item.author }}</p>
            <p>{{ item.announce }}</p> 
            </div>
            <a href=\"/news/{{item.relativeUrl}}\" class=\"btn\">
                Читать далее...
            </a>
        </div>
    </div>
</div>
{% endfor %}
<div class=\"row justify-content-center\">
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>
</div>
{% endblock %}
", "AppBundle:News:index.html.twig", "/var/www/project/src/AppBundle/Resources/views/News/index.html.twig");
    }
}
