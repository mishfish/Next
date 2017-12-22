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
        $__internal_7143dc78870098bc992a866a3871a8c25986aaddac3c982f9ea90969fab7887a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7143dc78870098bc992a866a3871a8c25986aaddac3c982f9ea90969fab7887a->enter($__internal_7143dc78870098bc992a866a3871a8c25986aaddac3c982f9ea90969fab7887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:News:index.html.twig"));

        $__internal_2f5d122d00ec071f1a16147e4dc0e089b41d9a023ac7cba654eabdc2dc70c3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5d122d00ec071f1a16147e4dc0e089b41d9a023ac7cba654eabdc2dc70c3d8->enter($__internal_2f5d122d00ec071f1a16147e4dc0e089b41d9a023ac7cba654eabdc2dc70c3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:News:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7143dc78870098bc992a866a3871a8c25986aaddac3c982f9ea90969fab7887a->leave($__internal_7143dc78870098bc992a866a3871a8c25986aaddac3c982f9ea90969fab7887a_prof);

        
        $__internal_2f5d122d00ec071f1a16147e4dc0e089b41d9a023ac7cba654eabdc2dc70c3d8->leave($__internal_2f5d122d00ec071f1a16147e4dc0e089b41d9a023ac7cba654eabdc2dc70c3d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad91c6bdd8d93baf2c577df6043570de5649da80182afb71e3c5c639e1d49bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad91c6bdd8d93baf2c577df6043570de5649da80182afb71e3c5c639e1d49bf3->enter($__internal_ad91c6bdd8d93baf2c577df6043570de5649da80182afb71e3c5c639e1d49bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ffd4219d26950b299018f74b28b0543739320b2b98bb9ed5d86f4e2670eaadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffd4219d26950b299018f74b28b0543739320b2b98bb9ed5d86f4e2670eaadc->enter($__internal_9ffd4219d26950b299018f74b28b0543739320b2b98bb9ed5d86f4e2670eaadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Главная
";
        
        $__internal_9ffd4219d26950b299018f74b28b0543739320b2b98bb9ed5d86f4e2670eaadc->leave($__internal_9ffd4219d26950b299018f74b28b0543739320b2b98bb9ed5d86f4e2670eaadc_prof);

        
        $__internal_ad91c6bdd8d93baf2c577df6043570de5649da80182afb71e3c5c639e1d49bf3->leave($__internal_ad91c6bdd8d93baf2c577df6043570de5649da80182afb71e3c5c639e1d49bf3_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_21a6ca8c5a7af78f288130adf507e560f1ea837f03799491cb39e195a19736ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a6ca8c5a7af78f288130adf507e560f1ea837f03799491cb39e195a19736ef->enter($__internal_21a6ca8c5a7af78f288130adf507e560f1ea837f03799491cb39e195a19736ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d8bc60c3520d5c57130203f32d4e6804ed8f6f96504cbbb7f7f00cbcb60d2042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bc60c3520d5c57130203f32d4e6804ed8f6f96504cbbb7f7f00cbcb60d2042->enter($__internal_d8bc60c3520d5c57130203f32d4e6804ed8f6f96504cbbb7f7f00cbcb60d2042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 9
            echo "    <div class=\"alert alert-success\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "<div class=\"post\">
    <a href=\"/news/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "relativeUrl", array()), "html", null, true);
            echo "\"><h3 class=\"post-caption\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "caption", array()), "html", null, true);
            echo "</h3></a>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"/news/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "relativeUrl", array()), "html", null, true);
            echo "\">
                <img class=\"img-fluid img-polaroid\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["item"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "caption", array()), "html", null, true);
            echo "\">
            </a> 
        </div>
        <div class=\"col-md-6 post-announce\">
            <div><p class=\"post-attributes\">Дата публикации: ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "creationdate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</p> 
            <p class=\"post-attributes\">Автор: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "author", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "announce", array()), "html", null, true);
            echo "</p> 
            </div>
            <a href=\"/news/";
            // line 27
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
        // line 34
        echo "<div class=\"row justify-content-center\">
    <div class=\"navigation\">
        ";
        // line 36
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->getSourceContext()); })()));
        echo "
    </div>
</div>
";
        
        $__internal_d8bc60c3520d5c57130203f32d4e6804ed8f6f96504cbbb7f7f00cbcb60d2042->leave($__internal_d8bc60c3520d5c57130203f32d4e6804ed8f6f96504cbbb7f7f00cbcb60d2042_prof);

        
        $__internal_21a6ca8c5a7af78f288130adf507e560f1ea837f03799491cb39e195a19736ef->leave($__internal_21a6ca8c5a7af78f288130adf507e560f1ea837f03799491cb39e195a19736ef_prof);

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
        return array (  144 => 36,  140 => 34,  127 => 27,  122 => 25,  118 => 24,  114 => 23,  105 => 19,  101 => 18,  93 => 15,  90 => 14,  86 => 13,  77 => 10,  74 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::template.html.twig' %}

{% block title %}
    Главная
{% endblock %}

{% block content %}
{% for msg in app.session.flashBag.get('success') %}
    <div class=\"alert alert-success\">
        {{ msg }}
    </div>
{% endfor %}
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
