<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cb209f067b6643ee6078911822c98550cc5d1c18a9ac78ad53638f40156096d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1616a60b4d785a6f5a889e5d4be8ffe134c2b4de960614eda29edd3b12d82dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1616a60b4d785a6f5a889e5d4be8ffe134c2b4de960614eda29edd3b12d82dfe->enter($__internal_1616a60b4d785a6f5a889e5d4be8ffe134c2b4de960614eda29edd3b12d82dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0fb3fca3886986878e28a862d7566b016530d2e9c9e7f23796c8f6a2f3e8f7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb3fca3886986878e28a862d7566b016530d2e9c9e7f23796c8f6a2f3e8f7f6->enter($__internal_0fb3fca3886986878e28a862d7566b016530d2e9c9e7f23796c8f6a2f3e8f7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1616a60b4d785a6f5a889e5d4be8ffe134c2b4de960614eda29edd3b12d82dfe->leave($__internal_1616a60b4d785a6f5a889e5d4be8ffe134c2b4de960614eda29edd3b12d82dfe_prof);

        
        $__internal_0fb3fca3886986878e28a862d7566b016530d2e9c9e7f23796c8f6a2f3e8f7f6->leave($__internal_0fb3fca3886986878e28a862d7566b016530d2e9c9e7f23796c8f6a2f3e8f7f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33309c9247a7218ca493fc564aa477647182dc09d4234f24b5d834ae72522f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33309c9247a7218ca493fc564aa477647182dc09d4234f24b5d834ae72522f00->enter($__internal_33309c9247a7218ca493fc564aa477647182dc09d4234f24b5d834ae72522f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b23ea226bec58141aa486da4ba920686be2754633559768a4d09d81d310b30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b23ea226bec58141aa486da4ba920686be2754633559768a4d09d81d310b30c->enter($__internal_5b23ea226bec58141aa486da4ba920686be2754633559768a4d09d81d310b30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5b23ea226bec58141aa486da4ba920686be2754633559768a4d09d81d310b30c->leave($__internal_5b23ea226bec58141aa486da4ba920686be2754633559768a4d09d81d310b30c_prof);

        
        $__internal_33309c9247a7218ca493fc564aa477647182dc09d4234f24b5d834ae72522f00->leave($__internal_33309c9247a7218ca493fc564aa477647182dc09d4234f24b5d834ae72522f00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
