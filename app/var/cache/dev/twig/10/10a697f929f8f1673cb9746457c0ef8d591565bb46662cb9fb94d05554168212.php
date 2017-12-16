<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9269ac385fee2fa25703900304d0b0fc83cdb61ea5fd261e4eecb14adc19d2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6163035598d7b61958307786dba78ceb91d5249dcd718aec318dfa247611ec27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6163035598d7b61958307786dba78ceb91d5249dcd718aec318dfa247611ec27->enter($__internal_6163035598d7b61958307786dba78ceb91d5249dcd718aec318dfa247611ec27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_abd68314785e6f2a3b4e078da977c5fdaa36bf2412b7b7e4a9befc44ad07b11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd68314785e6f2a3b4e078da977c5fdaa36bf2412b7b7e4a9befc44ad07b11d->enter($__internal_abd68314785e6f2a3b4e078da977c5fdaa36bf2412b7b7e4a9befc44ad07b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6163035598d7b61958307786dba78ceb91d5249dcd718aec318dfa247611ec27->leave($__internal_6163035598d7b61958307786dba78ceb91d5249dcd718aec318dfa247611ec27_prof);

        
        $__internal_abd68314785e6f2a3b4e078da977c5fdaa36bf2412b7b7e4a9befc44ad07b11d->leave($__internal_abd68314785e6f2a3b4e078da977c5fdaa36bf2412b7b7e4a9befc44ad07b11d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8099e70fdbaddc1942763a023ebaa7e03eda77492874474486847fc82998981f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8099e70fdbaddc1942763a023ebaa7e03eda77492874474486847fc82998981f->enter($__internal_8099e70fdbaddc1942763a023ebaa7e03eda77492874474486847fc82998981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3eb1b14edc03a50267ad48b2e53a62ba3ee431319c9840673b3669c22a26ad18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb1b14edc03a50267ad48b2e53a62ba3ee431319c9840673b3669c22a26ad18->enter($__internal_3eb1b14edc03a50267ad48b2e53a62ba3ee431319c9840673b3669c22a26ad18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3eb1b14edc03a50267ad48b2e53a62ba3ee431319c9840673b3669c22a26ad18->leave($__internal_3eb1b14edc03a50267ad48b2e53a62ba3ee431319c9840673b3669c22a26ad18_prof);

        
        $__internal_8099e70fdbaddc1942763a023ebaa7e03eda77492874474486847fc82998981f->leave($__internal_8099e70fdbaddc1942763a023ebaa7e03eda77492874474486847fc82998981f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a8a2c9c68df00ba4ed36dbec932ad086989c43c7851f20b3c2daec456d6639b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8a2c9c68df00ba4ed36dbec932ad086989c43c7851f20b3c2daec456d6639b->enter($__internal_6a8a2c9c68df00ba4ed36dbec932ad086989c43c7851f20b3c2daec456d6639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ab20857deea4c2631eaf2d8c20ec9580e14cac8ab243ba5c27b9a040108209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab20857deea4c2631eaf2d8c20ec9580e14cac8ab243ba5c27b9a040108209e->enter($__internal_9ab20857deea4c2631eaf2d8c20ec9580e14cac8ab243ba5c27b9a040108209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9ab20857deea4c2631eaf2d8c20ec9580e14cac8ab243ba5c27b9a040108209e->leave($__internal_9ab20857deea4c2631eaf2d8c20ec9580e14cac8ab243ba5c27b9a040108209e_prof);

        
        $__internal_6a8a2c9c68df00ba4ed36dbec932ad086989c43c7851f20b3c2daec456d6639b->leave($__internal_6a8a2c9c68df00ba4ed36dbec932ad086989c43c7851f20b3c2daec456d6639b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f5c9a8460916cb33090664b17cdf3335e1f9da682fbf407546b88b963b12c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f5c9a8460916cb33090664b17cdf3335e1f9da682fbf407546b88b963b12c1->enter($__internal_18f5c9a8460916cb33090664b17cdf3335e1f9da682fbf407546b88b963b12c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc92584004102bd24474afea679708958d788f3425307be2e7dd9a4cd7e48655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc92584004102bd24474afea679708958d788f3425307be2e7dd9a4cd7e48655->enter($__internal_fc92584004102bd24474afea679708958d788f3425307be2e7dd9a4cd7e48655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc92584004102bd24474afea679708958d788f3425307be2e7dd9a4cd7e48655->leave($__internal_fc92584004102bd24474afea679708958d788f3425307be2e7dd9a4cd7e48655_prof);

        
        $__internal_18f5c9a8460916cb33090664b17cdf3335e1f9da682fbf407546b88b963b12c1->leave($__internal_18f5c9a8460916cb33090664b17cdf3335e1f9da682fbf407546b88b963b12c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
