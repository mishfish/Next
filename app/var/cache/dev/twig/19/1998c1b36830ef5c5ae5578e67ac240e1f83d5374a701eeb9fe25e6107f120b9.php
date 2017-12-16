<?php

/* AppBundle:News:create.html.twig */
class __TwigTemplate_f0cccac097928f9ec5ff4dbf345509c9ac8c3159cca402a5cc9ce1edd5febe84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::template.html.twig", "AppBundle:News:create.html.twig", 1);
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
        $__internal_535205d379d8a89b12121133ff5dffb2e71f01c1b1b9f2c0819a637b92243b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535205d379d8a89b12121133ff5dffb2e71f01c1b1b9f2c0819a637b92243b19->enter($__internal_535205d379d8a89b12121133ff5dffb2e71f01c1b1b9f2c0819a637b92243b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:News:create.html.twig"));

        $__internal_e5bc1f83a92bd793ecf82ee7f7336c007106be3fc01dc557b4b66d23181aea2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bc1f83a92bd793ecf82ee7f7336c007106be3fc01dc557b4b66d23181aea2c->enter($__internal_e5bc1f83a92bd793ecf82ee7f7336c007106be3fc01dc557b4b66d23181aea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:News:create.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535205d379d8a89b12121133ff5dffb2e71f01c1b1b9f2c0819a637b92243b19->leave($__internal_535205d379d8a89b12121133ff5dffb2e71f01c1b1b9f2c0819a637b92243b19_prof);

        
        $__internal_e5bc1f83a92bd793ecf82ee7f7336c007106be3fc01dc557b4b66d23181aea2c->leave($__internal_e5bc1f83a92bd793ecf82ee7f7336c007106be3fc01dc557b4b66d23181aea2c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c7a93d81fb02bb15068d3794e9d4fe098bd799a4e46c18c5849b9360d42895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c7a93d81fb02bb15068d3794e9d4fe098bd799a4e46c18c5849b9360d42895->enter($__internal_92c7a93d81fb02bb15068d3794e9d4fe098bd799a4e46c18c5849b9360d42895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6eba6fbfbebf853ebf447a53ee2d875a2e9f68e099c23e1dc0a7825854f5925f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eba6fbfbebf853ebf447a53ee2d875a2e9f68e099c23e1dc0a7825854f5925f->enter($__internal_6eba6fbfbebf853ebf447a53ee2d875a2e9f68e099c23e1dc0a7825854f5925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Создать новость
";
        
        $__internal_6eba6fbfbebf853ebf447a53ee2d875a2e9f68e099c23e1dc0a7825854f5925f->leave($__internal_6eba6fbfbebf853ebf447a53ee2d875a2e9f68e099c23e1dc0a7825854f5925f_prof);

        
        $__internal_92c7a93d81fb02bb15068d3794e9d4fe098bd799a4e46c18c5849b9360d42895->leave($__internal_92c7a93d81fb02bb15068d3794e9d4fe098bd799a4e46c18c5849b9360d42895_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d5fccbd4767a599c2e83f62bb9bd3cc3946d3007a6b8552861f5352741c9633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5fccbd4767a599c2e83f62bb9bd3cc3946d3007a6b8552861f5352741c9633->enter($__internal_6d5fccbd4767a599c2e83f62bb9bd3cc3946d3007a6b8552861f5352741c9633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1c612b5e0d4c8f789dab153e0ba893b5da85e955f857032e1a4b14a336dcb2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c612b5e0d4c8f789dab153e0ba893b5da85e955f857032e1a4b14a336dcb2e7->enter($__internal_1c612b5e0d4c8f789dab153e0ba893b5da85e955f857032e1a4b14a336dcb2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Создать\" />
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_1c612b5e0d4c8f789dab153e0ba893b5da85e955f857032e1a4b14a336dcb2e7->leave($__internal_1c612b5e0d4c8f789dab153e0ba893b5da85e955f857032e1a4b14a336dcb2e7_prof);

        
        $__internal_6d5fccbd4767a599c2e83f62bb9bd3cc3946d3007a6b8552861f5352741c9633->leave($__internal_6d5fccbd4767a599c2e83f62bb9bd3cc3946d3007a6b8552861f5352741c9633_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:News:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  81 => 12,  77 => 11,  73 => 9,  64 => 8,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::template.html.twig' %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block title %}
    Создать новость
{% endblock %}

{% block content %}
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Создать\" />
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "AppBundle:News:create.html.twig", "/var/www/project/src/AppBundle/Resources/views/News/create.html.twig");
    }
}
