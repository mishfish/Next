<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bfde22579552f7014409791f714516127050016c50baa7507d915562337cc58c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00aa3fd7ab8706f59eed933d42e6f5625cf2c9315aad9ad7a63e358a3bb347d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aa3fd7ab8706f59eed933d42e6f5625cf2c9315aad9ad7a63e358a3bb347d2->enter($__internal_00aa3fd7ab8706f59eed933d42e6f5625cf2c9315aad9ad7a63e358a3bb347d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0e9728382637f71f00a5948a3f9b51849837c5b47130b07abbcf012f9badc20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9728382637f71f00a5948a3f9b51849837c5b47130b07abbcf012f9badc20a->enter($__internal_0e9728382637f71f00a5948a3f9b51849837c5b47130b07abbcf012f9badc20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_00aa3fd7ab8706f59eed933d42e6f5625cf2c9315aad9ad7a63e358a3bb347d2->leave($__internal_00aa3fd7ab8706f59eed933d42e6f5625cf2c9315aad9ad7a63e358a3bb347d2_prof);

        
        $__internal_0e9728382637f71f00a5948a3f9b51849837c5b47130b07abbcf012f9badc20a->leave($__internal_0e9728382637f71f00a5948a3f9b51849837c5b47130b07abbcf012f9badc20a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
