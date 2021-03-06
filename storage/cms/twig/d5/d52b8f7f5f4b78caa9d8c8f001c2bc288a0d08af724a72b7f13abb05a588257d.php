<?php

/* /home/vagrant/Code/octobercms/themes/demo/partials/site/ninjaHeader.htm */
class __TwigTemplate_a31d4aab0592d6d3214c78335affd103e0fe53fc88d3353176c2c2b2ec53775c extends Twig_Template
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
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">PHP Ninja OctoberCMS</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "laravel5.2-laravel5.2")) {
            echo "active";
        }
        echo "\">    <a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/laravel5.2.htm");
        echo "\">Laravel 5.2</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "laravel5.4-laravel5.4")) {
            echo "active";
        }
        echo "\">    <a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/laravel5.4.htm");
        echo "\">Laravel 5.4</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\">    <a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel1.6");
        echo "\">Angular 1.6</a></li>
                <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("amazonWebServices");
        echo "\">Amazon Web Services</a></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/partials/site/ninjaHeader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  55 => 18,  47 => 17,  39 => 16,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">PHP Ninja OctoberCMS</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'laravel5.2-laravel5.2' %}active{% endif %}\">    <a href=\"{{ 'laravel5.2/laravel5.2.htm'|page }}\">Laravel 5.2</a></li>
                <li class=\"{% if this.page.id == 'laravel5.4-laravel5.4' %}active{% endif %}\">    <a href=\"{{ 'laravel5.4/laravel5.4.htm'|page }}\">Laravel 5.4</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\">    <a href=\"{{ 'laravel1.6'|page }}\">Angular 1.6</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"> <a href=\"{{ 'amazonWebServices'|page }}\">Amazon Web Services</a></li>
            </ul>
        </div>
    </div>
</nav>", "/home/vagrant/Code/octobercms/themes/demo/partials/site/ninjaHeader.htm", "");
    }
}
