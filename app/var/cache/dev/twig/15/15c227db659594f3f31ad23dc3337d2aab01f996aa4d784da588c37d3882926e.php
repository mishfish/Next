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
        $__internal_b7899a04fec50cb1596c01a2eccc8107f40ef83053dfd9996eb8438561e8f1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7899a04fec50cb1596c01a2eccc8107f40ef83053dfd9996eb8438561e8f1d6->enter($__internal_b7899a04fec50cb1596c01a2eccc8107f40ef83053dfd9996eb8438561e8f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::template.html.twig"));

        $__internal_09c10c65f6f5d06bb31208ac45feb36df5c8e2a82b3ad1a3beec804cd695bc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c10c65f6f5d06bb31208ac45feb36df5c8e2a82b3ad1a3beec804cd695bc42->enter($__internal_09c10c65f6f5d06bb31208ac45feb36df5c8e2a82b3ad1a3beec804cd695bc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7899a04fec50cb1596c01a2eccc8107f40ef83053dfd9996eb8438561e8f1d6->leave($__internal_b7899a04fec50cb1596c01a2eccc8107f40ef83053dfd9996eb8438561e8f1d6_prof);

        
        $__internal_09c10c65f6f5d06bb31208ac45feb36df5c8e2a82b3ad1a3beec804cd695bc42->leave($__internal_09c10c65f6f5d06bb31208ac45feb36df5c8e2a82b3ad1a3beec804cd695bc42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_433e3a4989952810344618b0f2440e8e9d6422e104ed5b67387e55a241cdd8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433e3a4989952810344618b0f2440e8e9d6422e104ed5b67387e55a241cdd8b1->enter($__internal_433e3a4989952810344618b0f2440e8e9d6422e104ed5b67387e55a241cdd8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_714cd43ba82b3de3c57a3e6b0a9393f4b210f867bfc60738a1b77643e3ec3913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714cd43ba82b3de3c57a3e6b0a9393f4b210f867bfc60738a1b77643e3ec3913->enter($__internal_714cd43ba82b3de3c57a3e6b0a9393f4b210f867bfc60738a1b77643e3ec3913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_714cd43ba82b3de3c57a3e6b0a9393f4b210f867bfc60738a1b77643e3ec3913->leave($__internal_714cd43ba82b3de3c57a3e6b0a9393f4b210f867bfc60738a1b77643e3ec3913_prof);

        
        $__internal_433e3a4989952810344618b0f2440e8e9d6422e104ed5b67387e55a241cdd8b1->leave($__internal_433e3a4989952810344618b0f2440e8e9d6422e104ed5b67387e55a241cdd8b1_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_458da25b428dd2c487c59f18ca08b04a637dc32f8b52d02855e9d2e8d0a64316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458da25b428dd2c487c59f18ca08b04a637dc32f8b52d02855e9d2e8d0a64316->enter($__internal_458da25b428dd2c487c59f18ca08b04a637dc32f8b52d02855e9d2e8d0a64316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_69a0ef594b4117bcfd7df2eebadd33ea0672aa86e504969d340d440b8b6a1a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a0ef594b4117bcfd7df2eebadd33ea0672aa86e504969d340d440b8b6a1a2e->enter($__internal_69a0ef594b4117bcfd7df2eebadd33ea0672aa86e504969d340d440b8b6a1a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_69a0ef594b4117bcfd7df2eebadd33ea0672aa86e504969d340d440b8b6a1a2e->leave($__internal_69a0ef594b4117bcfd7df2eebadd33ea0672aa86e504969d340d440b8b6a1a2e_prof);

        
        $__internal_458da25b428dd2c487c59f18ca08b04a637dc32f8b52d02855e9d2e8d0a64316->leave($__internal_458da25b428dd2c487c59f18ca08b04a637dc32f8b52d02855e9d2e8d0a64316_prof);

    }

    // line 13
    public function block_authbar($context, array $blocks = array())
    {
        $__internal_2156fa8e38a344d88cf666408ca893986ee27dab290d53a3df85c40ec9aac736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2156fa8e38a344d88cf666408ca893986ee27dab290d53a3df85c40ec9aac736->enter($__internal_2156fa8e38a344d88cf666408ca893986ee27dab290d53a3df85c40ec9aac736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authbar"));

        $__internal_5eb08ab32b39288e0b0805fe0d9d0495d800bd40455a80681181a77ac354df58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb08ab32b39288e0b0805fe0d9d0495d800bd40455a80681181a77ac354df58->enter($__internal_5eb08ab32b39288e0b0805fe0d9d0495d800bd40455a80681181a77ac354df58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authbar"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_logout");
            echo "\">
                          Выход
                        </a>
                    ";
        } else {
            // line 23
            echo "                        <a class=\"btn btn-top-auth\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_login");
            echo "\">Вход</a>
                        <a class=\"btn btn-top-auth\" href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_register");
            echo "\">Регистрация</a>
                        
                    ";
        }
        // line 27
        echo "                  </li>
                </ul>
              </div>
            ";
        
        $__internal_5eb08ab32b39288e0b0805fe0d9d0495d800bd40455a80681181a77ac354df58->leave($__internal_5eb08ab32b39288e0b0805fe0d9d0495d800bd40455a80681181a77ac354df58_prof);

        
        $__internal_2156fa8e38a344d88cf666408ca893986ee27dab290d53a3df85c40ec9aac736->leave($__internal_2156fa8e38a344d88cf666408ca893986ee27dab290d53a3df85c40ec9aac736_prof);

    }

    // line 37
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_fdfc9144b48f55840762ab43d0e6bd28813650a0db5d20698307187271368136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfc9144b48f55840762ab43d0e6bd28813650a0db5d20698307187271368136->enter($__internal_fdfc9144b48f55840762ab43d0e6bd28813650a0db5d20698307187271368136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_5e5701bb1ecee40fca5ad095505bc88ebd34d2b64b7f95f6e934586201c5c534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5701bb1ecee40fca5ad095505bc88ebd34d2b64b7f95f6e934586201c5c534->enter($__internal_5e5701bb1ecee40fca5ad095505bc88ebd34d2b64b7f95f6e934586201c5c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        echo "<div id=\"topbar\">г. Черноморск, проспект Мира, 43 Ч. Телефон +38 (073) 441 6217</div>";
        
        $__internal_5e5701bb1ecee40fca5ad095505bc88ebd34d2b64b7f95f6e934586201c5c534->leave($__internal_5e5701bb1ecee40fca5ad095505bc88ebd34d2b64b7f95f6e934586201c5c534_prof);

        
        $__internal_fdfc9144b48f55840762ab43d0e6bd28813650a0db5d20698307187271368136->leave($__internal_fdfc9144b48f55840762ab43d0e6bd28813650a0db5d20698307187271368136_prof);

    }

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_c9bfb91fa20582ca7ddf279e1e2cdd309208536af56201cca510a811b2d2c75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bfb91fa20582ca7ddf279e1e2cdd309208536af56201cca510a811b2d2c75f->enter($__internal_c9bfb91fa20582ca7ddf279e1e2cdd309208536af56201cca510a811b2d2c75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_5174a7bb69929e9f2dd14f553eb64b7054274f1a86f8646695203e3c36e02efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5174a7bb69929e9f2dd14f553eb64b7054274f1a86f8646695203e3c36e02efd->enter($__internal_5174a7bb69929e9f2dd14f553eb64b7054274f1a86f8646695203e3c36e02efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_5174a7bb69929e9f2dd14f553eb64b7054274f1a86f8646695203e3c36e02efd->leave($__internal_5174a7bb69929e9f2dd14f553eb64b7054274f1a86f8646695203e3c36e02efd_prof);

        
        $__internal_c9bfb91fa20582ca7ddf279e1e2cdd309208536af56201cca510a811b2d2c75f->leave($__internal_c9bfb91fa20582ca7ddf279e1e2cdd309208536af56201cca510a811b2d2c75f_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_f676257f2bd01e6c70cf153b2d94ccec6b44bd54accac08a43f4d7b161102e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f676257f2bd01e6c70cf153b2d94ccec6b44bd54accac08a43f4d7b161102e9e->enter($__internal_f676257f2bd01e6c70cf153b2d94ccec6b44bd54accac08a43f4d7b161102e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ead5650d4ab56c7a0f437bccb8e54811082b6a6e0137a0caa17a15d098eab5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead5650d4ab56c7a0f437bccb8e54811082b6a6e0137a0caa17a15d098eab5a8->enter($__internal_ead5650d4ab56c7a0f437bccb8e54811082b6a6e0137a0caa17a15d098eab5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ead5650d4ab56c7a0f437bccb8e54811082b6a6e0137a0caa17a15d098eab5a8->leave($__internal_ead5650d4ab56c7a0f437bccb8e54811082b6a6e0137a0caa17a15d098eab5a8_prof);

        
        $__internal_f676257f2bd01e6c70cf153b2d94ccec6b44bd54accac08a43f4d7b161102e9e->leave($__internal_f676257f2bd01e6c70cf153b2d94ccec6b44bd54accac08a43f4d7b161102e9e_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_22b261933de1f14d80843eeedc2b8c5c47539fbab3eb677877ed4c4e1e613cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b261933de1f14d80843eeedc2b8c5c47539fbab3eb677877ed4c4e1e613cab->enter($__internal_22b261933de1f14d80843eeedc2b8c5c47539fbab3eb677877ed4c4e1e613cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fc68719ff24a442ec5aa9e34273e7360a8521bf404076c4beb5246c941f1d8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc68719ff24a442ec5aa9e34273e7360a8521bf404076c4beb5246c941f1d8cb->enter($__internal_fc68719ff24a442ec5aa9e34273e7360a8521bf404076c4beb5246c941f1d8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_fc68719ff24a442ec5aa9e34273e7360a8521bf404076c4beb5246c941f1d8cb->leave($__internal_fc68719ff24a442ec5aa9e34273e7360a8521bf404076c4beb5246c941f1d8cb_prof);

        
        $__internal_22b261933de1f14d80843eeedc2b8c5c47539fbab3eb677877ed4c4e1e613cab->leave($__internal_22b261933de1f14d80843eeedc2b8c5c47539fbab3eb677877ed4c4e1e613cab_prof);

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
                        <a href=\"{{ path('auth_logout') }}\">
                          Выход
                        </a>
                    {% else %}
                        <a class=\"btn btn-top-auth\" href=\"{{ path('auth_login')}}\">Вход</a>
                        <a class=\"btn btn-top-auth\" href=\"{{ path('auth_register')}}\">Регистрация</a>
                        
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
