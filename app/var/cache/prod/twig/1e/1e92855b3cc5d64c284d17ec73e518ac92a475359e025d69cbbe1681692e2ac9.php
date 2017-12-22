<?php

/* AppBundle::template.html.twig */
class __TwigTemplate_46df88927453df23f4a775df7b92fa39870b1c321232acc3b58130d19feaec2e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
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
    }

    // line 13
    public function block_authbar($context, array $blocks = array())
    {
        // line 14
        echo "              <div class=\"top-auth-bar\">
                <ul class=\"nav justify-content-end\">
                  <li class=\"nav-item\">
                    ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                        Вы вошли как <nickname>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
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
    }

    // line 37
    public function block_topbar($context, array $blocks = array())
    {
        echo "<div id=\"topbar\">г. Черноморск, проспект Мира, 43 Ч. Телефон +38 (073) 441 6217</div>";
    }

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
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
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
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
        return array (  162 => 63,  159 => 62,  154 => 56,  147 => 57,  145 => 56,  141 => 54,  133 => 39,  127 => 37,  120 => 27,  114 => 24,  109 => 23,  102 => 19,  97 => 18,  95 => 17,  90 => 14,  87 => 13,  79 => 31,  77 => 13,  71 => 10,  65 => 6,  62 => 5,  57 => 75,  55 => 62,  52 => 61,  50 => 39,  47 => 38,  45 => 37,  42 => 36,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::template.html.twig", "/media/estidea/8240761540761061/IT/mySites/final-next/app/src/AppBundle/Resources/views/template.html.twig");
    }
}
