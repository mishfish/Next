<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7301be0a8a124dcf5849cb5596ae80bda4ea1757994b71d62683718fb4985ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d12dfc7886de3a8e7abb6614e85718828964ccae4d78610e0cc6c968d6197d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12dfc7886de3a8e7abb6614e85718828964ccae4d78610e0cc6c968d6197d3d->enter($__internal_d12dfc7886de3a8e7abb6614e85718828964ccae4d78610e0cc6c968d6197d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2cf4e28457fd34ce78c163331097389b01b52f111592a43529619f2357842110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf4e28457fd34ce78c163331097389b01b52f111592a43529619f2357842110->enter($__internal_2cf4e28457fd34ce78c163331097389b01b52f111592a43529619f2357842110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12dfc7886de3a8e7abb6614e85718828964ccae4d78610e0cc6c968d6197d3d->leave($__internal_d12dfc7886de3a8e7abb6614e85718828964ccae4d78610e0cc6c968d6197d3d_prof);

        
        $__internal_2cf4e28457fd34ce78c163331097389b01b52f111592a43529619f2357842110->leave($__internal_2cf4e28457fd34ce78c163331097389b01b52f111592a43529619f2357842110_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bf6b2c26e2b73169f08f7874fcce590986a210250fa6cee6cadfbf2b4ad57db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf6b2c26e2b73169f08f7874fcce590986a210250fa6cee6cadfbf2b4ad57db->enter($__internal_1bf6b2c26e2b73169f08f7874fcce590986a210250fa6cee6cadfbf2b4ad57db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6fcf54292b40586cf11327d4e5811ee21cd63f8053da0f1889795c09f6aefd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fcf54292b40586cf11327d4e5811ee21cd63f8053da0f1889795c09f6aefd1->enter($__internal_c6fcf54292b40586cf11327d4e5811ee21cd63f8053da0f1889795c09f6aefd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c6fcf54292b40586cf11327d4e5811ee21cd63f8053da0f1889795c09f6aefd1->leave($__internal_c6fcf54292b40586cf11327d4e5811ee21cd63f8053da0f1889795c09f6aefd1_prof);

        
        $__internal_1bf6b2c26e2b73169f08f7874fcce590986a210250fa6cee6cadfbf2b4ad57db->leave($__internal_1bf6b2c26e2b73169f08f7874fcce590986a210250fa6cee6cadfbf2b4ad57db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92abaea85ba2bb8cf6e1f12e4a46ee40393425ecfb582bd83d2f2b1585db7f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92abaea85ba2bb8cf6e1f12e4a46ee40393425ecfb582bd83d2f2b1585db7f30->enter($__internal_92abaea85ba2bb8cf6e1f12e4a46ee40393425ecfb582bd83d2f2b1585db7f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ee71e27819473be92bf3dd0e36a790d3e5d6ddfd901b09417feb435f114df0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee71e27819473be92bf3dd0e36a790d3e5d6ddfd901b09417feb435f114df0e->enter($__internal_9ee71e27819473be92bf3dd0e36a790d3e5d6ddfd901b09417feb435f114df0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9ee71e27819473be92bf3dd0e36a790d3e5d6ddfd901b09417feb435f114df0e->leave($__internal_9ee71e27819473be92bf3dd0e36a790d3e5d6ddfd901b09417feb435f114df0e_prof);

        
        $__internal_92abaea85ba2bb8cf6e1f12e4a46ee40393425ecfb582bd83d2f2b1585db7f30->leave($__internal_92abaea85ba2bb8cf6e1f12e4a46ee40393425ecfb582bd83d2f2b1585db7f30_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f44f1ac4288b921e2dbb1379053bc9e14f7822d5f2317294aa6677de43749625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44f1ac4288b921e2dbb1379053bc9e14f7822d5f2317294aa6677de43749625->enter($__internal_f44f1ac4288b921e2dbb1379053bc9e14f7822d5f2317294aa6677de43749625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ab11f99bdc0e0915b5ae3b8171326851babc5e0b6206d2a7dab2a81e078894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab11f99bdc0e0915b5ae3b8171326851babc5e0b6206d2a7dab2a81e078894d->enter($__internal_6ab11f99bdc0e0915b5ae3b8171326851babc5e0b6206d2a7dab2a81e078894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6ab11f99bdc0e0915b5ae3b8171326851babc5e0b6206d2a7dab2a81e078894d->leave($__internal_6ab11f99bdc0e0915b5ae3b8171326851babc5e0b6206d2a7dab2a81e078894d_prof);

        
        $__internal_f44f1ac4288b921e2dbb1379053bc9e14f7822d5f2317294aa6677de43749625->leave($__internal_f44f1ac4288b921e2dbb1379053bc9e14f7822d5f2317294aa6677de43749625_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
