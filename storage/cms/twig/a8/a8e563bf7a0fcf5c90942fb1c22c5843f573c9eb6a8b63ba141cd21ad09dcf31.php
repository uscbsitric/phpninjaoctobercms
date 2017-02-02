<?php

/* /home/vagrant/Code/octobercms/themes/demo/layouts/laravel5-2TutorialsLayout.htm */
class __TwigTemplate_6d365c650291313f739fd2d224f46922334c95079c02abcd7276f6941b712ef9 extends Twig_Template
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
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        ";
        // line 15
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
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
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/ninjaHeader.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        </header>

\t\t<div class=\"container-fluid\">
            <div class=\"row\">  <!-- Start of Row1 -->
\t\t\t\t<!-- SideNav -->
\t\t\t    <div class=\"col-md-3 sidebar\">
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"#\">Core Concepts</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Service Container</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Service Provider</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Facades</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Contracts</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">The HTTP Layer</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Routing</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Middleware</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Controllers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Requests</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"\">Responses</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"\">Validation</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Security</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Middleware</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Encryption</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Hashing</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Services</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">JWT Based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Artisan Console</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Cache</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Collections</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Encryption</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Events</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Filesystem / Cloud Storage</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Hashing</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Helpers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Localization</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mail</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Package Development</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Pagination</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Queues</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Redis</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Task Scheduling</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Validation</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Database</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Query Builder</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 171
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/databaseMigration");
        echo "\">Migrations</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Seeding</a>
\t\t\t                </li>
\t\t\t                </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Eloquent ORM</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 187
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/eloquentORMModels");
        echo "\">Eloquent ORM Models</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Releationships</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Collections</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mutators</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Serialization</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Performance Improvement</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Route Caching</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach2</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach3</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach4</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Design Patterns</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Repository Pattern</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Registry Pattern</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Design Pattern3</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Design Pattern4</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Design Pattern5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Approach</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Jason Web Token(JWT) based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Role Based Permission</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach3</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach4</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t    </div>
\t\t\t\t<!-- SideNav -->

\t\t        <!-- Content -->
\t\t        <div class=\"col-md-9 main\">
\t\t            ";
        // line 275
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 276
        echo "\t\t        </div>
\t\t        <!-- Content -->
\t\t    </div>             <!-- Start of Row1 -->
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 283
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/ninjaFooter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 284
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 287
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 288
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 289
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 290
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 291
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 292
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/layouts/laravel5-2TutorialsLayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 292,  367 => 291,  360 => 290,  356 => 289,  352 => 288,  348 => 287,  343 => 284,  339 => 283,  330 => 276,  328 => 275,  237 => 187,  218 => 171,  81 => 36,  77 => 35,  56 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
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
            <div class=\"row\">  <!-- Start of Row1 -->
\t\t\t\t<!-- SideNav -->
\t\t\t    <div class=\"col-md-3 sidebar\">
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"#\">Core Concepts</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Service Container</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Service Provider</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Facades</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Contracts</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">The HTTP Layer</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Routing</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Middleware</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Controllers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Requests</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"\">Responses</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"\">Validation</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Security</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Middleware</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Encryption</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Hashing</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Services</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">JWT Based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Artisan Console</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Cache</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Collections</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Encryption</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Events</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Filesystem / Cloud Storage</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Hashing</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Helpers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Localization</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mail</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Package Development</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Pagination</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Queues</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Redis</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Task Scheduling</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Validation</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Database</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Query Builder</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/databaseMigration'|page}}\">Migrations</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Seeding</a>
\t\t\t                </li>
\t\t\t                </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Eloquent ORM</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/eloquentORMModels'|page}}\">Eloquent ORM Models</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Releationships</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Collections</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mutators</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Serialization</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Performance Improvement</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Route Caching</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach2</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach3</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach4</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Design Patterns</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Repository Pattern</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Registry Pattern</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Design Pattern3</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Design Pattern4</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Design Pattern5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a href=\"\">Approach</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Jason Web Token(JWT) based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Role Based Permission</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach3</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach4</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Approach5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t    </div>
\t\t\t\t<!-- SideNav -->

\t\t        <!-- Content -->
\t\t        <div class=\"col-md-9 main\">
\t\t            {% page %}
\t\t        </div>
\t\t        <!-- Content -->
\t\t    </div>             <!-- Start of Row1 -->
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
</html>", "/home/vagrant/Code/octobercms/themes/demo/layouts/laravel5-2TutorialsLayout.htm", "");
    }
}
