<?php

/* /home/vagrant/Code/octobercms/themes/demo/layouts/tutorialsLayout.htm */
class __TwigTemplate_94d8cecab1d15331e86ab37d2f22defb02ff112a8a63bd8c1598df820135eded extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/Ninja.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>
        <!--
        Color Codes:
          Green (lightest to darkest):
            #93D4AC #26BF64 #26C667 #29AC5E

          Blue: (lightest to darkest)
            #13BBB1 #326A67

          White:
            #CCD1D1

          Grey: (lightest to darkest):
            #9FA7A9 #3E5050 #353D3F #2C533C
        -->

        <!-- Header -->
        <header id=\"tutorialsLayout-header\">
            ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/ninjaHeader.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "        </header>

\t\t<div class=\"container-fluid\">

\t\t<!-- SideNav -->
\t    <div class=\"col-md-3 sidebar\">
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"#\">Core Concepts</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Service Container</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Service Provider</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Facades</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Contracts</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">The HTTP Layer</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Routing</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Middleware</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Controllers</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Requests</a>
\t                </li>
\t                 <li>
\t                  <a href=\"\">Responses</a>
\t                </li>
\t                 <li>
\t                  <a href=\"\">Validation</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Security</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Middleware</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Encryption</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Hashing</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Services</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">JWT Based Authentication</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Artisan Console</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Cache</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Collections</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Encryption</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Events</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Filesystem / Cloud Storage</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Hashing</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Helpers</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Localization</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Mail</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Package Development</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Pagination</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Queues</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Redis</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Task Scheduling</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Validation</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Database</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Getting Started</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Query Builder</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Migrations</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Seeding</a>
\t                </li>
\t                </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Eloquent ORM</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Getting Started</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Releationships</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Collections</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Mutators</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Serialization</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Performance Improvement</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Route Caching</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach2</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach3</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach4</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach5</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Design Patterns</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Repository Pattern</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Registry Pattern</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Design Pattern3</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Design Pattern4</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Design Pattern5</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Approach</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Jason Web Token(JWT) based Authentication</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Role Based Permission</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach3</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach4</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach5</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t    </div>
\t\t<!-- SideNav -->

        <!-- Content -->
        <div class=\"col-md-9 main\">
            ";
        // line 271
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 272
        echo "        </div>
        <!-- Content -->
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 278
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/ninjaFooter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 279
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 282
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 283
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 284
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 285
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 286
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 287
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/layouts/tutorialsLayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 287,  356 => 286,  349 => 285,  345 => 284,  341 => 283,  337 => 282,  332 => 279,  328 => 278,  320 => 272,  318 => 271,  80 => 35,  76 => 34,  55 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/Ninja.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>
        <!--
        Color Codes:
          Green (lightest to darkest):
            #93D4AC #26BF64 #26C667 #29AC5E

          Blue: (lightest to darkest)
            #13BBB1 #326A67

          White:
            #CCD1D1

          Grey: (lightest to darkest):
            #9FA7A9 #3E5050 #353D3F #2C533C
        -->

        <!-- Header -->
        <header id=\"tutorialsLayout-header\">
            {% partial 'site/ninjaHeader.htm' %}
        </header>

\t\t<div class=\"container-fluid\">

\t\t<!-- SideNav -->
\t    <div class=\"col-md-3 sidebar\">
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"#\">Core Concepts</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Service Container</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Service Provider</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Facades</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Contracts</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">The HTTP Layer</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Routing</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Middleware</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Controllers</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Requests</a>
\t                </li>
\t                 <li>
\t                  <a href=\"\">Responses</a>
\t                </li>
\t                 <li>
\t                  <a href=\"\">Validation</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Security</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Middleware</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Encryption</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Hashing</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Services</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">JWT Based Authentication</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Artisan Console</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Cache</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Collections</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Encryption</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Events</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Filesystem / Cloud Storage</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Hashing</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Helpers</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Localization</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Mail</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Package Development</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Pagination</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Queues</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Redis</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Task Scheduling</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Validation</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Database</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Getting Started</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Query Builder</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Migrations</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Seeding</a>
\t                </li>
\t                </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Eloquent ORM</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Getting Started</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Releationships</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Collections</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Mutators</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Serialization</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Performance Improvement</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Route Caching</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach2</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach3</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach4</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach5</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Design Patterns</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Repository Pattern</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Registry Pattern</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Design Pattern3</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Design Pattern4</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Design Pattern5</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t          <ul class=\"nav nav-sidebar\">
\t            <li class=\"active\">
\t              <a href=\"\">Approach</a>
\t              <ul>
\t                <li>
\t                  <a href=\"\">Jason Web Token(JWT) based Authentication</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Role Based Permission</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach3</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach4</a>
\t                </li>
\t                <li>
\t                  <a href=\"\">Approach5</a>
\t                </li>
\t              </ul>
\t            </li>
\t          </ul>
\t    </div>
\t\t<!-- SideNav -->

        <!-- Content -->
        <div class=\"col-md-9 main\">
            {% page %}
        </div>
        <!-- Content -->
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/ninjaFooter' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/home/vagrant/Code/octobercms/themes/demo/layouts/tutorialsLayout.htm", "");
    }
}
