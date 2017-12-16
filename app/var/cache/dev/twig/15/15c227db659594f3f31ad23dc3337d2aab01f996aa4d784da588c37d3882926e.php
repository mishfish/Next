<?php

/* AppBundle::template.html.twig */
class __TwigTemplate_397c2f82138efd6c3021deafca895fa1d1f3480176d4f7b3048634296d11ebf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::template.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'authbar' => array($this, 'block_authbar'),
            'topbar' => array($this, 'block_topbar'),
            'wrapper' => array($this, 'block_wrapper'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ade0b8e6c0d84f43956eed49331abd1eb4b55b7f017e15e3520b433fd586b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ade0b8e6c0d84f43956eed49331abd1eb4b55b7f017e15e3520b433fd586b6->enter($__internal_54ade0b8e6c0d84f43956eed49331abd1eb4b55b7f017e15e3520b433fd586b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::template.html.twig"));

        $__internal_34a8ec95602bb2565d1926dc2ceb90c372505f2f5ad49b4ff9df323e854d7ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a8ec95602bb2565d1926dc2ceb90c372505f2f5ad49b4ff9df323e854d7ae9->enter($__internal_34a8ec95602bb2565d1926dc2ceb90c372505f2f5ad49b4ff9df323e854d7ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ade0b8e6c0d84f43956eed49331abd1eb4b55b7f017e15e3520b433fd586b6->leave($__internal_54ade0b8e6c0d84f43956eed49331abd1eb4b55b7f017e15e3520b433fd586b6_prof);

        
        $__internal_34a8ec95602bb2565d1926dc2ceb90c372505f2f5ad49b4ff9df323e854d7ae9->leave($__internal_34a8ec95602bb2565d1926dc2ceb90c372505f2f5ad49b4ff9df323e854d7ae9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bfe16af1e2981606eb2ec40733e3a08de2b07a26aa08d33ef46dd151ab17b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bfe16af1e2981606eb2ec40733e3a08de2b07a26aa08d33ef46dd151ab17b7->enter($__internal_d6bfe16af1e2981606eb2ec40733e3a08de2b07a26aa08d33ef46dd151ab17b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe81161b1e99ed0336dc91ea529ae54abb9527f3d979abf66326b87882be6675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe81161b1e99ed0336dc91ea529ae54abb9527f3d979abf66326b87882be6675->enter($__internal_fe81161b1e99ed0336dc91ea529ae54abb9527f3d979abf66326b87882be6675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('topbar', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('wrapper', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
";
        
        $__internal_fe81161b1e99ed0336dc91ea529ae54abb9527f3d979abf66326b87882be6675->leave($__internal_fe81161b1e99ed0336dc91ea529ae54abb9527f3d979abf66326b87882be6675_prof);

        
        $__internal_d6bfe16af1e2981606eb2ec40733e3a08de2b07a26aa08d33ef46dd151ab17b7->leave($__internal_d6bfe16af1e2981606eb2ec40733e3a08de2b07a26aa08d33ef46dd151ab17b7_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_146858a255643908fc9f88098a154b7d5673cc50d1c495ad40562d5467684e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146858a255643908fc9f88098a154b7d5673cc50d1c495ad40562d5467684e65->enter($__internal_146858a255643908fc9f88098a154b7d5673cc50d1c495ad40562d5467684e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0ba0d5b91da1f2d98f24a00850f3972e513948726a9d4c5f14d28391526d900a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba0d5b91da1f2d98f24a00850f3972e513948726a9d4c5f14d28391526d900a->enter($__internal_0ba0d5b91da1f2d98f24a00850f3972e513948726a9d4c5f14d28391526d900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!-- Page Header -->
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-5 col-md-6\">
            <a href=\"/\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/header1.jpg"), "html", null, true);
        echo "\"></a>
          </div>
          <div class=\"col-lg-7 col-md-6\">
            ";
        // line 13
        $this->displayBlock('authbar', $context, $blocks);
        // line 31
        echo "          </div>
        </div>
      </div>

";
        
        $__internal_0ba0d5b91da1f2d98f24a00850f3972e513948726a9d4c5f14d28391526d900a->leave($__internal_0ba0d5b91da1f2d98f24a00850f3972e513948726a9d4c5f14d28391526d900a_prof);

        
        $__internal_146858a255643908fc9f88098a154b7d5673cc50d1c495ad40562d5467684e65->leave($__internal_146858a255643908fc9f88098a154b7d5673cc50d1c495ad40562d5467684e65_prof);

    }

    // line 13
    public function block_authbar($context, array $blocks = array())
    {
        $__internal_1df08fd992ee518b9e24eeee7cefeaed9d2707f2a1f5e01a04e00eea2d05421a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df08fd992ee518b9e24eeee7cefeaed9d2707f2a1f5e01a04e00eea2d05421a->enter($__internal_1df08fd992ee518b9e24eeee7cefeaed9d2707f2a1f5e01a04e00eea2d05421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authbar"));

        $__internal_bc4c3479c5ae85fe5e05612ab6556f4fb9c5a3e49039031ee3af643b4a7fd66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4c3479c5ae85fe5e05612ab6556f4fb9c5a3e49039031ee3af643b4a7fd66e->enter($__internal_bc4c3479c5ae85fe5e05612ab6556f4fb9c5a3e49039031ee3af643b4a7fd66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authbar"));

        // line 14
        echo "              <div class=\"top-auth-bar\">
                <ul class=\"nav justify-content-end\">
                  <li class=\"nav-item\">
                    ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                        Вы вошли как <nickname>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "user", array()), "nickname", array()), "html", null, true);
            echo "</nickname>
                        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                          Выход
                        </a>
                    ";
        } else {
            // line 23
            echo "                        <a class=\"btn btn-top-auth\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Вход</a>
                        <a class=\"btn btn-top-auth\" href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Регистрация</a>
                        
                    ";
        }
        // line 27
        echo "                  </li>
                </ul>
              </div>
            ";
        
        $__internal_bc4c3479c5ae85fe5e05612ab6556f4fb9c5a3e49039031ee3af643b4a7fd66e->leave($__internal_bc4c3479c5ae85fe5e05612ab6556f4fb9c5a3e49039031ee3af643b4a7fd66e_prof);

        
        $__internal_1df08fd992ee518b9e24eeee7cefeaed9d2707f2a1f5e01a04e00eea2d05421a->leave($__internal_1df08fd992ee518b9e24eeee7cefeaed9d2707f2a1f5e01a04e00eea2d05421a_prof);

    }

    // line 37
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_cdbbd29df969be9ee2ec1de01bdad9243527e2f57f66604c3b9793df4b9d52cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbbd29df969be9ee2ec1de01bdad9243527e2f57f66604c3b9793df4b9d52cc->enter($__internal_cdbbd29df969be9ee2ec1de01bdad9243527e2f57f66604c3b9793df4b9d52cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_ad212e1968464db724f4d1970a9f77ddede981764fe8f6de02cb4e75c91976e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad212e1968464db724f4d1970a9f77ddede981764fe8f6de02cb4e75c91976e4->enter($__internal_ad212e1968464db724f4d1970a9f77ddede981764fe8f6de02cb4e75c91976e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        echo "<div id=\"topbar\">г. Черноморск, проспект Мира, 43 Ч. Телефон +38 (073) 441 6217</div>";
        
        $__internal_ad212e1968464db724f4d1970a9f77ddede981764fe8f6de02cb4e75c91976e4->leave($__internal_ad212e1968464db724f4d1970a9f77ddede981764fe8f6de02cb4e75c91976e4_prof);

        
        $__internal_cdbbd29df969be9ee2ec1de01bdad9243527e2f57f66604c3b9793df4b9d52cc->leave($__internal_cdbbd29df969be9ee2ec1de01bdad9243527e2f57f66604c3b9793df4b9d52cc_prof);

    }

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_b1f669dfdfd82059e9733676d22efc80a1b75eabc8021a9a52968e284b1a5e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f669dfdfd82059e9733676d22efc80a1b75eabc8021a9a52968e284b1a5e74->enter($__internal_b1f669dfdfd82059e9733676d22efc80a1b75eabc8021a9a52968e284b1a5e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_22811d848d8d3ed8960e95f7898e771c14f22c18589de2a20f699c8c88828f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22811d848d8d3ed8960e95f7898e771c14f22c18589de2a20f699c8c88828f60->enter($__internal_22811d848d8d3ed8960e95f7898e771c14f22c18589de2a20f699c8c88828f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        echo " 
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <!--<div id=\"main-menu\" class=\"col-md-3\">
            ";
        // line 54
        echo "        </div>-->
        <div id=\"content-block\" class=\"col-md-9\">
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        </div>
    </div>
</div>
";
        
        $__internal_22811d848d8d3ed8960e95f7898e771c14f22c18589de2a20f699c8c88828f60->leave($__internal_22811d848d8d3ed8960e95f7898e771c14f22c18589de2a20f699c8c88828f60_prof);

        
        $__internal_b1f669dfdfd82059e9733676d22efc80a1b75eabc8021a9a52968e284b1a5e74->leave($__internal_b1f669dfdfd82059e9733676d22efc80a1b75eabc8021a9a52968e284b1a5e74_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd38b16fd5e8916d6928d95bd3f5e4f48d6f63bc204c984d91078da5bbc9eb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd38b16fd5e8916d6928d95bd3f5e4f48d6f63bc204c984d91078da5bbc9eb52->enter($__internal_bd38b16fd5e8916d6928d95bd3f5e4f48d6f63bc204c984d91078da5bbc9eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3504120e5d87d3590e6d8b509eea6492587362b88e1fc232bbc5f49cc9712849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3504120e5d87d3590e6d8b509eea6492587362b88e1fc232bbc5f49cc9712849->enter($__internal_3504120e5d87d3590e6d8b509eea6492587362b88e1fc232bbc5f49cc9712849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3504120e5d87d3590e6d8b509eea6492587362b88e1fc232bbc5f49cc9712849->leave($__internal_3504120e5d87d3590e6d8b509eea6492587362b88e1fc232bbc5f49cc9712849_prof);

        
        $__internal_bd38b16fd5e8916d6928d95bd3f5e4f48d6f63bc204c984d91078da5bbc9eb52->leave($__internal_bd38b16fd5e8916d6928d95bd3f5e4f48d6f63bc204c984d91078da5bbc9eb52_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c218a80c8439c5447de59e7617e32736905261bcf52ab5fa9989930cbd4f3f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c218a80c8439c5447de59e7617e32736905261bcf52ab5fa9989930cbd4f3f4e->enter($__internal_c218a80c8439c5447de59e7617e32736905261bcf52ab5fa9989930cbd4f3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f6937e86941e61deec3810f58089d7ddc8a40ac1d048bad6f6233552bf3b90cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6937e86941e61deec3810f58089d7ddc8a40ac1d048bad6f6233552bf3b90cf->enter($__internal_f6937e86941e61deec3810f58089d7ddc8a40ac1d048bad6f6233552bf3b90cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "    <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            
            <p class=\"copyright text-muted\">Copyright &copy; NEXT 2017</p>
          </div>
        </div>
      </div>
    </footer>
";
        
        $__internal_f6937e86941e61deec3810f58089d7ddc8a40ac1d048bad6f6233552bf3b90cf->leave($__internal_f6937e86941e61deec3810f58089d7ddc8a40ac1d048bad6f6233552bf3b90cf_prof);

        
        $__internal_c218a80c8439c5447de59e7617e32736905261bcf52ab5fa9989930cbd4f3f4e->leave($__internal_c218a80c8439c5447de59e7617e32736905261bcf52ab5fa9989930cbd4f3f4e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 63,  243 => 62,  226 => 56,  213 => 57,  211 => 56,  207 => 54,  193 => 39,  175 => 37,  162 => 27,  156 => 24,  151 => 23,  144 => 19,  139 => 18,  137 => 17,  132 => 14,  123 => 13,  109 => 31,  107 => 13,  101 => 10,  95 => 6,  86 => 5,  75 => 75,  73 => 62,  70 => 61,  68 => 39,  65 => 38,  63 => 37,  60 => 36,  58 => 5,  55 => 4,  46 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% block header %}
    <!-- Page Header -->
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-5 col-md-6\">
            <a href=\"/\"><img src=\"{{ asset('images/header1.jpg') }}\"></a>
          </div>
          <div class=\"col-lg-7 col-md-6\">
            {% block authbar %}
              <div class=\"top-auth-bar\">
                <ul class=\"nav justify-content-end\">
                  <li class=\"nav-item\">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        Вы вошли как <nickname>{{app.user.nickname}}</nickname>
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                          Выход
                        </a>
                    {% else %}
                        <a class=\"btn btn-top-auth\" href=\"{{ path('fos_user_security_login') }}\">Вход</a>
                        <a class=\"btn btn-top-auth\" href=\"{{ path('fos_user_registration_register') }}\">Регистрация</a>
                        
                    {% endif %}
                  </li>
                </ul>
              </div>
            {% endblock %}
          </div>
        </div>
      </div>

{% endblock %}

{% block topbar %}<div id=\"topbar\">г. Черноморск, проспект Мира, 43 Ч. Телефон +38 (073) 441 6217</div>{% endblock %}

{% block wrapper %} 
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <!--<div id=\"main-menu\" class=\"col-md-3\">
            {#% block menu %}
              <!/-- Navigation --/>
              <div>
                  <h4 class=\"text-centered \">Главное меню</h4>
                  {#% set menues = findAll() %}

                  {% for menu in menues %}
                      <a class=\"list-group-item\" href=\"{{ menu.url }}\" title=\"{{ menu.popuptext }}\">{{menu.name}}</a>
                  {% endfor %}
              </div>
              {% endblock %#}
        </div>-->
        <div id=\"content-block\" class=\"col-md-9\">
            {% block content %}{% endblock %}
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
    <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            
            <p class=\"copyright text-muted\">Copyright &copy; NEXT 2017</p>
          </div>
        </div>
      </div>
    </footer>
{% endblock %}

{% endblock %}", "AppBundle::template.html.twig", "/var/www/project/src/AppBundle/Resources/views/template.html.twig");
    }
}
