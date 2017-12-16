<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a986544a69801bdd9c6817411c9b11d19f5dfc01d15f34b79e3ca2f612d8e4ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_834049907dcb6fe576c88e53caa10e7c1bd43827be6795467b43d98dfaf32c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834049907dcb6fe576c88e53caa10e7c1bd43827be6795467b43d98dfaf32c7b->enter($__internal_834049907dcb6fe576c88e53caa10e7c1bd43827be6795467b43d98dfaf32c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca1f81b86afcc56be8e09b756800a8ff488573b38108544d3a63904709c99a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1f81b86afcc56be8e09b756800a8ff488573b38108544d3a63904709c99a54->enter($__internal_ca1f81b86afcc56be8e09b756800a8ff488573b38108544d3a63904709c99a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_834049907dcb6fe576c88e53caa10e7c1bd43827be6795467b43d98dfaf32c7b->leave($__internal_834049907dcb6fe576c88e53caa10e7c1bd43827be6795467b43d98dfaf32c7b_prof);

        
        $__internal_ca1f81b86afcc56be8e09b756800a8ff488573b38108544d3a63904709c99a54->leave($__internal_ca1f81b86afcc56be8e09b756800a8ff488573b38108544d3a63904709c99a54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f64e9298731f320d1005c65b006ac2587ac5eb2b7222178623e5320490fe9ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64e9298731f320d1005c65b006ac2587ac5eb2b7222178623e5320490fe9ebb->enter($__internal_f64e9298731f320d1005c65b006ac2587ac5eb2b7222178623e5320490fe9ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d448f12656c21287f11004db4f02145865c0369df9f7cbaa855d044b6ff60c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d448f12656c21287f11004db4f02145865c0369df9f7cbaa855d044b6ff60c6->enter($__internal_7d448f12656c21287f11004db4f02145865c0369df9f7cbaa855d044b6ff60c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d448f12656c21287f11004db4f02145865c0369df9f7cbaa855d044b6ff60c6->leave($__internal_7d448f12656c21287f11004db4f02145865c0369df9f7cbaa855d044b6ff60c6_prof);

        
        $__internal_f64e9298731f320d1005c65b006ac2587ac5eb2b7222178623e5320490fe9ebb->leave($__internal_f64e9298731f320d1005c65b006ac2587ac5eb2b7222178623e5320490fe9ebb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b37fc193e143e894e4981e90a662e9f2bdd81cd2be9d02f19efdb39642fef0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37fc193e143e894e4981e90a662e9f2bdd81cd2be9d02f19efdb39642fef0c0->enter($__internal_b37fc193e143e894e4981e90a662e9f2bdd81cd2be9d02f19efdb39642fef0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_119e10537d6fc3ff954b81d8b9dd461758a8cead7ef1870dfb2d8e57f13468d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119e10537d6fc3ff954b81d8b9dd461758a8cead7ef1870dfb2d8e57f13468d9->enter($__internal_119e10537d6fc3ff954b81d8b9dd461758a8cead7ef1870dfb2d8e57f13468d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_119e10537d6fc3ff954b81d8b9dd461758a8cead7ef1870dfb2d8e57f13468d9->leave($__internal_119e10537d6fc3ff954b81d8b9dd461758a8cead7ef1870dfb2d8e57f13468d9_prof);

        
        $__internal_b37fc193e143e894e4981e90a662e9f2bdd81cd2be9d02f19efdb39642fef0c0->leave($__internal_b37fc193e143e894e4981e90a662e9f2bdd81cd2be9d02f19efdb39642fef0c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c9d637fa6f75636a9f90f649837d2d42418e227e77ee2897547db3355228cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9d637fa6f75636a9f90f649837d2d42418e227e77ee2897547db3355228cc3->enter($__internal_4c9d637fa6f75636a9f90f649837d2d42418e227e77ee2897547db3355228cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_027b0e29a449f599895ee89ffee61be12a0b704ce4c6cb59058d628abf4dba99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027b0e29a449f599895ee89ffee61be12a0b704ce4c6cb59058d628abf4dba99->enter($__internal_027b0e29a449f599895ee89ffee61be12a0b704ce4c6cb59058d628abf4dba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_027b0e29a449f599895ee89ffee61be12a0b704ce4c6cb59058d628abf4dba99->leave($__internal_027b0e29a449f599895ee89ffee61be12a0b704ce4c6cb59058d628abf4dba99_prof);

        
        $__internal_4c9d637fa6f75636a9f90f649837d2d42418e227e77ee2897547db3355228cc3->leave($__internal_4c9d637fa6f75636a9f90f649837d2d42418e227e77ee2897547db3355228cc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
