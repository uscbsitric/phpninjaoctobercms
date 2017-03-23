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
\t\t\t    <div class=\"col-md-2 sidebar\">
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Core Concepts</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/ServiceContainer");
        echo "\">Service Container</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/serviceProvider");
        echo "\">Service Provider</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/facades");
        echo "\">Facades</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/contracts");
        echo "\">Contracts</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>The HTTP Layer</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/routing");
        echo "\">Routing</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/middlewares");
        echo "\">Middleware</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Controllers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Requests</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/httpResponses");
        echo "\">Responses</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/views");
        echo "\">Views</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"\">Validation</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Security</a>
\t\t\t              <ul>
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
\t\t\t              <a>Services</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 107
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/authorization");
        echo "\">Authorization</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Artisan Console</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/cache");
        echo "\">Cache</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/encryption");
        echo "\">Encryption</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 119
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/events");
        echo "\">Events</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 122
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/filesystem");
        echo "\">Filesystem / Cloud Storage</a>
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
\t\t\t                  <a href=\"";
        // line 143
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/queue");
        echo "\">Queues</a>
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
\t\t\t              <a>Database</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Query Builder</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 168
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
\t\t\t              <a>Eloquent ORM</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 184
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/eloquentORMModels");
        echo "\">Eloquent ORM Models</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 187
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/eloquentRelationships");
        echo "\">Releationships</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 190
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/collections");
        echo "\">Collections</a>
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
\t\t\t              <a>Performance Improvement</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 206
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/routeCaching");
        echo "\">Route Caching</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 209
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/caching");
        echo "\">Caching</a>
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
\t\t\t              <a>Design Patterns</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 228
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/repositoryPattern");
        echo "\">Repository Pattern</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 231
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/registryPattern");
        echo "\">Registry Pattern</a>
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
\t\t\t              <a>Approach</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 250
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/jwt");
        echo "\">Jason Web Token(JWT) based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 253
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/entrustRoleBasedPermission");
        echo "\">Entrust Role Based Permission</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 256
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/pusherIntegration");
        echo "\">Pusher Integration (Simple Push Notification)</a>
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
\t\t\t              <a>Other Topics I Cant Categorize</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 272
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/routeModelBinding");
        echo "\">Route Model Binding</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 275
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/namingResourceRouteParameters");
        echo "\">Naming Resource Route Parameters</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 278
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/namingResourceRoutes");
        echo "\">Naming Resource Routes</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 281
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/supervisor");
        echo "\">Supervisor</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Other Topic5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t    </div>
\t\t\t\t<!-- SideNav -->

\t\t        <!-- Content -->
\t\t        <div class=\"col-md-10 main\">
\t\t            ";
        // line 294
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 295
        echo "\t\t        </div>
\t\t        <!-- Content -->
\t\t    </div>             <!-- Start of Row1 -->
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 302
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/ninjaFooter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 303
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 306
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 307
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 308
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 309
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 310
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 311
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
        return array (  471 => 311,  467 => 310,  460 => 309,  456 => 308,  452 => 307,  448 => 306,  443 => 303,  439 => 302,  430 => 295,  428 => 294,  412 => 281,  406 => 278,  400 => 275,  394 => 272,  375 => 256,  369 => 253,  363 => 250,  341 => 231,  335 => 228,  313 => 209,  307 => 206,  288 => 190,  282 => 187,  276 => 184,  257 => 168,  229 => 143,  205 => 122,  199 => 119,  193 => 116,  187 => 113,  178 => 107,  149 => 81,  143 => 78,  131 => 69,  125 => 66,  112 => 56,  106 => 53,  100 => 50,  94 => 47,  81 => 36,  77 => 35,  56 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
\t\t\t    <div class=\"col-md-2 sidebar\">
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Core Concepts</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/ServiceContainer'|page}}\">Service Container</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/serviceProvider'|page}}\">Service Provider</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/facades'|page}}\">Facades</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/contracts'|page}}\">Contracts</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>The HTTP Layer</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/routing'|page}}\">Routing</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/middlewares'|page}}\">Middleware</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Controllers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Requests</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"{{'laravel5.2/httpResponses'|page}}\">Responses</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"{{'laravel5.2/views'|page}}\">Views</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"\">Validation</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Security</a>
\t\t\t              <ul>
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
\t\t\t              <a>Services</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/authorization'|page}}\">Authorization</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Artisan Console</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/cache'|page}}\">Cache</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/encryption'|page}}\">Encryption</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/events'|page}}\">Events</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/filesystem' |page}}\">Filesystem / Cloud Storage</a>
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
\t\t\t                  <a href=\"{{'laravel5.2/queue'|page}}\">Queues</a>
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
\t\t\t              <a>Database</a>
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
\t\t\t              <a>Eloquent ORM</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/eloquentORMModels'|page}}\">Eloquent ORM Models</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/eloquentRelationships'|page}}\">Releationships</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/collections'|page}}\">Collections</a>
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
\t\t\t              <a>Performance Improvement</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/routeCaching'|page}}\">Route Caching</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/caching'|page}}\">Caching</a>
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
\t\t\t              <a>Design Patterns</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/repositoryPattern'|page}}\">Repository Pattern</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/registryPattern'|page}}\">Registry Pattern</a>
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
\t\t\t              <a>Approach</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/jwt'|page}}\">Jason Web Token(JWT) based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/entrustRoleBasedPermission'|page}}\">Entrust Role Based Permission</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/pusherIntegration'|page}}\">Pusher Integration (Simple Push Notification)</a>
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
\t\t\t              <a>Other Topics I Cant Categorize</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/routeModelBinding'|page}}\">Route Model Binding</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/namingResourceRouteParameters'|page}}\">Naming Resource Route Parameters</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/namingResourceRoutes'|page}}\">Naming Resource Routes</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.2/supervisor'|page}}\">Supervisor</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Other Topic5</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t    </div>
\t\t\t\t<!-- SideNav -->

\t\t        <!-- Content -->
\t\t        <div class=\"col-md-10 main\">
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
