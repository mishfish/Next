<?php

/* base.html.twig */
class __TwigTemplate_543a8056e9e9c43c540a826ff73e760139be65c51e497a334aac576804d66450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'currentstylesheets' => array($this, 'block_currentstylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'topbar' => array($this, 'block_topbar'),
            'wrapper' => array($this, 'block_wrapper'),
            'footer' => array($this, 'block_footer'),
            'currentjavascripts' => array($this, 'block_currentjavascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53d27b01b703a63520afcb6c5971b6cdeed16104ffb0f236c000926943688623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d27b01b703a63520afcb6c5971b6cdeed16104ffb0f236c000926943688623->enter($__internal_53d27b01b703a63520afcb6c5971b6cdeed16104ffb0f236c000926943688623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_95df22a1012930bcd4cc6afb92ce47cd42823a9d6fd32ed1c6611d788dc8d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95df22a1012930bcd4cc6afb92ce47cd42823a9d6fd32ed1c6611d788dc8d728->enter($__internal_95df22a1012930bcd4cc6afb92ce47cd42823a9d6fd32ed1c6611d788dc8d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"TODO DESCRIPTION\">
        <meta name=\"author\" content=\"palemoon\">
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/next-default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/next.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Fonts -->
        <!--<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type='text/css'>-->
        <!-- Additional CSS styles if necessary for current twig page -->
        ";
        // line 18
        $this->displayBlock('currentstylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('wrapper', $context, $blocks);
        // line 28
        echo "        

        ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "
        <!-- Additional javascripts if necessary for current twig page -->
        ";
        // line 33
        $this->displayBlock('currentjavascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_53d27b01b703a63520afcb6c5971b6cdeed16104ffb0f236c000926943688623->leave($__internal_53d27b01b703a63520afcb6c5971b6cdeed16104ffb0f236c000926943688623_prof);

        
        $__internal_95df22a1012930bcd4cc6afb92ce47cd42823a9d6fd32ed1c6611d788dc8d728->leave($__internal_95df22a1012930bcd4cc6afb92ce47cd42823a9d6fd32ed1c6611d788dc8d728_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_182cc3df74dc8cc73585789b809cb1b1e878dc8385377bf960fa539f8dc6af68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182cc3df74dc8cc73585789b809cb1b1e878dc8385377bf960fa539f8dc6af68->enter($__internal_182cc3df74dc8cc73585789b809cb1b1e878dc8385377bf960fa539f8dc6af68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_539de5b5c0d2ce4b26ede0bda186f0aeb3068d92b0744f69b79c86832ce8791d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539de5b5c0d2ce4b26ede0bda186f0aeb3068d92b0744f69b79c86832ce8791d->enter($__internal_539de5b5c0d2ce4b26ede0bda186f0aeb3068d92b0744f69b79c86832ce8791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Пространство NEXT";
        
        $__internal_539de5b5c0d2ce4b26ede0bda186f0aeb3068d92b0744f69b79c86832ce8791d->leave($__internal_539de5b5c0d2ce4b26ede0bda186f0aeb3068d92b0744f69b79c86832ce8791d_prof);

        
        $__internal_182cc3df74dc8cc73585789b809cb1b1e878dc8385377bf960fa539f8dc6af68->leave($__internal_182cc3df74dc8cc73585789b809cb1b1e878dc8385377bf960fa539f8dc6af68_prof);

    }

    // line 18
    public function block_currentstylesheets($context, array $blocks = array())
    {
        $__internal_4fcde22452d7869950fe187a106d05c729d581808d193cac83cbf6669a2e91d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcde22452d7869950fe187a106d05c729d581808d193cac83cbf6669a2e91d3->enter($__internal_4fcde22452d7869950fe187a106d05c729d581808d193cac83cbf6669a2e91d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "currentstylesheets"));

        $__internal_d732e17b692091860506b379143ecd181ed0bd2327c8f9f243ddd6c7dc30e25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732e17b692091860506b379143ecd181ed0bd2327c8f9f243ddd6c7dc30e25c->enter($__internal_d732e17b692091860506b379143ecd181ed0bd2327c8f9f243ddd6c7dc30e25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "currentstylesheets"));

        
        $__internal_d732e17b692091860506b379143ecd181ed0bd2327c8f9f243ddd6c7dc30e25c->leave($__internal_d732e17b692091860506b379143ecd181ed0bd2327c8f9f243ddd6c7dc30e25c_prof);

        
        $__internal_4fcde22452d7869950fe187a106d05c729d581808d193cac83cbf6669a2e91d3->leave($__internal_4fcde22452d7869950fe187a106d05c729d581808d193cac83cbf6669a2e91d3_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_bdf19ef9f76a457376fc3de05a56df760748be36542303d71045464c4bfd750b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf19ef9f76a457376fc3de05a56df760748be36542303d71045464c4bfd750b->enter($__internal_bdf19ef9f76a457376fc3de05a56df760748be36542303d71045464c4bfd750b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_a21108b89c6632bf77319eec1c6eea390fcaacad63c9e3425303bbd599f0de6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21108b89c6632bf77319eec1c6eea390fcaacad63c9e3425303bbd599f0de6c->enter($__internal_a21108b89c6632bf77319eec1c6eea390fcaacad63c9e3425303bbd599f0de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_a21108b89c6632bf77319eec1c6eea390fcaacad63c9e3425303bbd599f0de6c->leave($__internal_a21108b89c6632bf77319eec1c6eea390fcaacad63c9e3425303bbd599f0de6c_prof);

        
        $__internal_bdf19ef9f76a457376fc3de05a56df760748be36542303d71045464c4bfd750b->leave($__internal_bdf19ef9f76a457376fc3de05a56df760748be36542303d71045464c4bfd750b_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_ea1e9d993888562d6cbb447062426e8a90f4a9a6e8191901d582d2aae3d405e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1e9d993888562d6cbb447062426e8a90f4a9a6e8191901d582d2aae3d405e6->enter($__internal_ea1e9d993888562d6cbb447062426e8a90f4a9a6e8191901d582d2aae3d405e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fdc9f30a0ae228ca95fdbd1d1e145df9a93b04e6f57c4e657f2543fe35238be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc9f30a0ae228ca95fdbd1d1e145df9a93b04e6f57c4e657f2543fe35238be6->enter($__internal_fdc9f30a0ae228ca95fdbd1d1e145df9a93b04e6f57c4e657f2543fe35238be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_fdc9f30a0ae228ca95fdbd1d1e145df9a93b04e6f57c4e657f2543fe35238be6->leave($__internal_fdc9f30a0ae228ca95fdbd1d1e145df9a93b04e6f57c4e657f2543fe35238be6_prof);

        
        $__internal_ea1e9d993888562d6cbb447062426e8a90f4a9a6e8191901d582d2aae3d405e6->leave($__internal_ea1e9d993888562d6cbb447062426e8a90f4a9a6e8191901d582d2aae3d405e6_prof);

    }

    // line 24
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_c956bb16411848705d412a12c35f65e92d6af6cf0f9273b3ccffc8bf0a64ac28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c956bb16411848705d412a12c35f65e92d6af6cf0f9273b3ccffc8bf0a64ac28->enter($__internal_c956bb16411848705d412a12c35f65e92d6af6cf0f9273b3ccffc8bf0a64ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_31ec5041f193f72541590320d9e5a6c63ae3dd688c272249c0e48dccb99b7707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ec5041f193f72541590320d9e5a6c63ae3dd688c272249c0e48dccb99b7707->enter($__internal_31ec5041f193f72541590320d9e5a6c63ae3dd688c272249c0e48dccb99b7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        
        $__internal_31ec5041f193f72541590320d9e5a6c63ae3dd688c272249c0e48dccb99b7707->leave($__internal_31ec5041f193f72541590320d9e5a6c63ae3dd688c272249c0e48dccb99b7707_prof);

        
        $__internal_c956bb16411848705d412a12c35f65e92d6af6cf0f9273b3ccffc8bf0a64ac28->leave($__internal_c956bb16411848705d412a12c35f65e92d6af6cf0f9273b3ccffc8bf0a64ac28_prof);

    }

    // line 26
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_d84cc1d0c03a1a848de8573ede5371e42a761644f2aeae2b93272681c09b926f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84cc1d0c03a1a848de8573ede5371e42a761644f2aeae2b93272681c09b926f->enter($__internal_d84cc1d0c03a1a848de8573ede5371e42a761644f2aeae2b93272681c09b926f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_baf774ff7aae9293c1a057916178d9b3d48978cc20b713ea615db8bceab127dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf774ff7aae9293c1a057916178d9b3d48978cc20b713ea615db8bceab127dc->enter($__internal_baf774ff7aae9293c1a057916178d9b3d48978cc20b713ea615db8bceab127dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        echo " 
        ";
        
        $__internal_baf774ff7aae9293c1a057916178d9b3d48978cc20b713ea615db8bceab127dc->leave($__internal_baf774ff7aae9293c1a057916178d9b3d48978cc20b713ea615db8bceab127dc_prof);

        
        $__internal_d84cc1d0c03a1a848de8573ede5371e42a761644f2aeae2b93272681c09b926f->leave($__internal_d84cc1d0c03a1a848de8573ede5371e42a761644f2aeae2b93272681c09b926f_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_58e5b92c54805828d55c475574f9f7ffc8243cbde2631372929e7e9b203b0521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e5b92c54805828d55c475574f9f7ffc8243cbde2631372929e7e9b203b0521->enter($__internal_58e5b92c54805828d55c475574f9f7ffc8243cbde2631372929e7e9b203b0521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_57442f1b064c895317791a7c7e641f7c9d5046529c8bedf1bd4335e4fdacda3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57442f1b064c895317791a7c7e641f7c9d5046529c8bedf1bd4335e4fdacda3e->enter($__internal_57442f1b064c895317791a7c7e641f7c9d5046529c8bedf1bd4335e4fdacda3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_57442f1b064c895317791a7c7e641f7c9d5046529c8bedf1bd4335e4fdacda3e->leave($__internal_57442f1b064c895317791a7c7e641f7c9d5046529c8bedf1bd4335e4fdacda3e_prof);

        
        $__internal_58e5b92c54805828d55c475574f9f7ffc8243cbde2631372929e7e9b203b0521->leave($__internal_58e5b92c54805828d55c475574f9f7ffc8243cbde2631372929e7e9b203b0521_prof);

    }

    // line 33
    public function block_currentjavascripts($context, array $blocks = array())
    {
        $__internal_c0ae600d288acf2f8d5b1d65ec6e4cb5742822341484397301dd8ed8360c68d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ae600d288acf2f8d5b1d65ec6e4cb5742822341484397301dd8ed8360c68d2->enter($__internal_c0ae600d288acf2f8d5b1d65ec6e4cb5742822341484397301dd8ed8360c68d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "currentjavascripts"));

        $__internal_e7deed42d4ca2f1177e151c84cc09ea5ca6acdb382505226ef476663fdb7b58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7deed42d4ca2f1177e151c84cc09ea5ca6acdb382505226ef476663fdb7b58c->enter($__internal_e7deed42d4ca2f1177e151c84cc09ea5ca6acdb382505226ef476663fdb7b58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "currentjavascripts"));

        
        $__internal_e7deed42d4ca2f1177e151c84cc09ea5ca6acdb382505226ef476663fdb7b58c->leave($__internal_e7deed42d4ca2f1177e151c84cc09ea5ca6acdb382505226ef476663fdb7b58c_prof);

        
        $__internal_c0ae600d288acf2f8d5b1d65ec6e4cb5742822341484397301dd8ed8360c68d2->leave($__internal_c0ae600d288acf2f8d5b1d65ec6e4cb5742822341484397301dd8ed8360c68d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 33,  217 => 30,  198 => 26,  181 => 24,  164 => 23,  147 => 21,  130 => 18,  112 => 9,  100 => 34,  98 => 33,  94 => 31,  92 => 30,  88 => 28,  86 => 26,  83 => 25,  80 => 24,  78 => 23,  75 => 22,  73 => 21,  69 => 19,  67 => 18,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  45 => 10,  43 => 9,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"TODO DESCRIPTION\">
        <meta name=\"author\" content=\"palemoon\">
        <title>
            {% block title %}Пространство NEXT{% endblock %}
        </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/next-default.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/next.css') }}\" rel=\"stylesheet\">
        <!-- Fonts -->
        <!--<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type='text/css'>-->
        <!-- Additional CSS styles if necessary for current twig page -->
        {% block currentstylesheets %}{% endblock %}
    </head>
    <body>
        {% block navbar %}{% endblock %}

        {% block header %}{% endblock %}
        {% block topbar %}{% endblock %}

        {% block wrapper %} 
        {% endblock %}
        

        {% block footer %}{% endblock %}

        <!-- Additional javascripts if necessary for current twig page -->
        {% block currentjavascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/project/app/Resources/views/base.html.twig");
    }
}
