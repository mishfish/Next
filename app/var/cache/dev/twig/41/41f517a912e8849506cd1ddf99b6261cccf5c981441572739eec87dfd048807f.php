<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_0419bf8dff740845ca680734032ae4424cb0a1bf7a858dd3c96633d3756f29a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6eca338ec76bfb1b0515ef4c52bde114e6fb9ea6fd75df2d082b2ce18e30097a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eca338ec76bfb1b0515ef4c52bde114e6fb9ea6fd75df2d082b2ce18e30097a->enter($__internal_6eca338ec76bfb1b0515ef4c52bde114e6fb9ea6fd75df2d082b2ce18e30097a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_db6acab50e10bbd5f796ec98a075064f447683fadcfd5bfd9a0ac738249238c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6acab50e10bbd5f796ec98a075064f447683fadcfd5bfd9a0ac738249238c5->enter($__internal_db6acab50e10bbd5f796ec98a075064f447683fadcfd5bfd9a0ac738249238c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_6eca338ec76bfb1b0515ef4c52bde114e6fb9ea6fd75df2d082b2ce18e30097a->leave($__internal_6eca338ec76bfb1b0515ef4c52bde114e6fb9ea6fd75df2d082b2ce18e30097a_prof);

        
        $__internal_db6acab50e10bbd5f796ec98a075064f447683fadcfd5bfd9a0ac738249238c5->leave($__internal_db6acab50e10bbd5f796ec98a075064f447683fadcfd5bfd9a0ac738249238c5_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_342299a0bc3e735c8c4c0bdfff6b33328061b93f9ffa80ef16c83927473cb1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342299a0bc3e735c8c4c0bdfff6b33328061b93f9ffa80ef16c83927473cb1f5->enter($__internal_342299a0bc3e735c8c4c0bdfff6b33328061b93f9ffa80ef16c83927473cb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_f81b5866b80949c9b07d17e8c3bf59db90d63ec862daed2e394f9462a176df19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81b5866b80949c9b07d17e8c3bf59db90d63ec862daed2e394f9462a176df19->enter($__internal_f81b5866b80949c9b07d17e8c3bf59db90d63ec862daed2e394f9462a176df19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f81b5866b80949c9b07d17e8c3bf59db90d63ec862daed2e394f9462a176df19->leave($__internal_f81b5866b80949c9b07d17e8c3bf59db90d63ec862daed2e394f9462a176df19_prof);

        
        $__internal_342299a0bc3e735c8c4c0bdfff6b33328061b93f9ffa80ef16c83927473cb1f5->leave($__internal_342299a0bc3e735c8c4c0bdfff6b33328061b93f9ffa80ef16c83927473cb1f5_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_cc8f2e6364b7badc0e6b5dd23acda2d3668cb0b95301ab2e7aad14aaf83f321c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8f2e6364b7badc0e6b5dd23acda2d3668cb0b95301ab2e7aad14aaf83f321c->enter($__internal_cc8f2e6364b7badc0e6b5dd23acda2d3668cb0b95301ab2e7aad14aaf83f321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_ef2c7e4aa9972532d2b5c2c85fad9f4cfabbd70c1852dc99737b1bea447a929a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2c7e4aa9972532d2b5c2c85fad9f4cfabbd70c1852dc99737b1bea447a929a->enter($__internal_ef2c7e4aa9972532d2b5c2c85fad9f4cfabbd70c1852dc99737b1bea447a929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef2c7e4aa9972532d2b5c2c85fad9f4cfabbd70c1852dc99737b1bea447a929a->leave($__internal_ef2c7e4aa9972532d2b5c2c85fad9f4cfabbd70c1852dc99737b1bea447a929a_prof);

        
        $__internal_cc8f2e6364b7badc0e6b5dd23acda2d3668cb0b95301ab2e7aad14aaf83f321c->leave($__internal_cc8f2e6364b7badc0e6b5dd23acda2d3668cb0b95301ab2e7aad14aaf83f321c_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_ad4e9037b1200b9e29b3e88129f25236feac7835d87ca4f96f911d1eee2d9b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4e9037b1200b9e29b3e88129f25236feac7835d87ca4f96f911d1eee2d9b7e->enter($__internal_ad4e9037b1200b9e29b3e88129f25236feac7835d87ca4f96f911d1eee2d9b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_377d78842f3b88676e7782f3a25526d56cfb0d2f87cefde2d3e05622e098729d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377d78842f3b88676e7782f3a25526d56cfb0d2f87cefde2d3e05622e098729d->enter($__internal_377d78842f3b88676e7782f3a25526d56cfb0d2f87cefde2d3e05622e098729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_377d78842f3b88676e7782f3a25526d56cfb0d2f87cefde2d3e05622e098729d->leave($__internal_377d78842f3b88676e7782f3a25526d56cfb0d2f87cefde2d3e05622e098729d_prof);

        
        $__internal_ad4e9037b1200b9e29b3e88129f25236feac7835d87ca4f96f911d1eee2d9b7e->leave($__internal_ad4e9037b1200b9e29b3e88129f25236feac7835d87ca4f96f911d1eee2d9b7e_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_db64ddf494ea4f3b50b81c9aa70495defad83536728d5322c17cefaae3fe26a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db64ddf494ea4f3b50b81c9aa70495defad83536728d5322c17cefaae3fe26a0->enter($__internal_db64ddf494ea4f3b50b81c9aa70495defad83536728d5322c17cefaae3fe26a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_892e98d931dd34f4ce56fb2254314a44113b43c4910fc4440292af983ec7704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892e98d931dd34f4ce56fb2254314a44113b43c4910fc4440292af983ec7704f->enter($__internal_892e98d931dd34f4ce56fb2254314a44113b43c4910fc4440292af983ec7704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_892e98d931dd34f4ce56fb2254314a44113b43c4910fc4440292af983ec7704f->leave($__internal_892e98d931dd34f4ce56fb2254314a44113b43c4910fc4440292af983ec7704f_prof);

        
        $__internal_db64ddf494ea4f3b50b81c9aa70495defad83536728d5322c17cefaae3fe26a0->leave($__internal_db64ddf494ea4f3b50b81c9aa70495defad83536728d5322c17cefaae3fe26a0_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "@VichUploader/Form/fields.html.twig", "/var/www/project/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
