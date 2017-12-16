<?php

/* AppBundle:News:index.html.twig */
class __TwigTemplate_1f4a68b0fcc09ca5b8c1b0f5a9189a36136e3fc0cddf3232c5f3acb89282545f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Главная
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
    </div>
</div>
";
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
        return array (  98 => 31,  94 => 29,  81 => 22,  76 => 20,  72 => 19,  68 => 18,  59 => 14,  55 => 13,  47 => 10,  44 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:News:index.html.twig", "/media/estidea/8240761540761061/IT/mySites/final-next/app/src/AppBundle/Resources/views/News/index.html.twig");
    }
}
