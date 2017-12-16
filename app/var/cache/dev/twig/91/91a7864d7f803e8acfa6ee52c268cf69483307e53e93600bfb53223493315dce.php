<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9da7877dbc39e2e632004ee0bbf742b8f0e3561d760d7239da729ded30f9ffe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca42787384a538e7844eba2365e2204f21e828ec5873ac48ec2b813ad190b797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca42787384a538e7844eba2365e2204f21e828ec5873ac48ec2b813ad190b797->enter($__internal_ca42787384a538e7844eba2365e2204f21e828ec5873ac48ec2b813ad190b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_13454d617bcaa895c9790f9735715ee421633ec6a3de76b88500b545dde48548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13454d617bcaa895c9790f9735715ee421633ec6a3de76b88500b545dde48548->enter($__internal_13454d617bcaa895c9790f9735715ee421633ec6a3de76b88500b545dde48548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca42787384a538e7844eba2365e2204f21e828ec5873ac48ec2b813ad190b797->leave($__internal_ca42787384a538e7844eba2365e2204f21e828ec5873ac48ec2b813ad190b797_prof);

        
        $__internal_13454d617bcaa895c9790f9735715ee421633ec6a3de76b88500b545dde48548->leave($__internal_13454d617bcaa895c9790f9735715ee421633ec6a3de76b88500b545dde48548_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cfd96d84fad1532f0351ad37f3042e4ed15371e2d04ed24991fb6a7c19f1222f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd96d84fad1532f0351ad37f3042e4ed15371e2d04ed24991fb6a7c19f1222f->enter($__internal_cfd96d84fad1532f0351ad37f3042e4ed15371e2d04ed24991fb6a7c19f1222f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f960c87807aa5c6a0ff5c8d115c5764ed27ce9d38cf7fe189ea7c92094ac7ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f960c87807aa5c6a0ff5c8d115c5764ed27ce9d38cf7fe189ea7c92094ac7ac3->enter($__internal_f960c87807aa5c6a0ff5c8d115c5764ed27ce9d38cf7fe189ea7c92094ac7ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f960c87807aa5c6a0ff5c8d115c5764ed27ce9d38cf7fe189ea7c92094ac7ac3->leave($__internal_f960c87807aa5c6a0ff5c8d115c5764ed27ce9d38cf7fe189ea7c92094ac7ac3_prof);

        
        $__internal_cfd96d84fad1532f0351ad37f3042e4ed15371e2d04ed24991fb6a7c19f1222f->leave($__internal_cfd96d84fad1532f0351ad37f3042e4ed15371e2d04ed24991fb6a7c19f1222f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ab959d333fbc71038f9b499b9556ce69ce63045c452aa2adb71fe037d99a0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab959d333fbc71038f9b499b9556ce69ce63045c452aa2adb71fe037d99a0bd->enter($__internal_2ab959d333fbc71038f9b499b9556ce69ce63045c452aa2adb71fe037d99a0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f842fae20cbe6d7744bec10b4858efe630f5bcadca07b3ddccb91a473f4390f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f842fae20cbe6d7744bec10b4858efe630f5bcadca07b3ddccb91a473f4390f2->enter($__internal_f842fae20cbe6d7744bec10b4858efe630f5bcadca07b3ddccb91a473f4390f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f842fae20cbe6d7744bec10b4858efe630f5bcadca07b3ddccb91a473f4390f2->leave($__internal_f842fae20cbe6d7744bec10b4858efe630f5bcadca07b3ddccb91a473f4390f2_prof);

        
        $__internal_2ab959d333fbc71038f9b499b9556ce69ce63045c452aa2adb71fe037d99a0bd->leave($__internal_2ab959d333fbc71038f9b499b9556ce69ce63045c452aa2adb71fe037d99a0bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
