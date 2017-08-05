<?php

/* /home/vagrant/Code/octobercms/themes/demo/layouts/laravel5-4TutorialsLayout.htm */
class __TwigTemplate_0e9fb3477444ce792bad65ddec6068219ea1326780c86195fe96448a530e477e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/ServiceContainer");
        echo "\">Service Container (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/serviceProvider");
        echo "\">Service Provider (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/facades");
        echo "\">Facades (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/contracts");
        echo "\">Contracts (SEE IF THERE IS NO BREAKAGE)</a>
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/routing");
        echo "\">Routing (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/middlewares");
        echo "\">Middleware (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">CSRF Protection</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Controllers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Requests</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/httpResponses");
        echo "\">Responses (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/views");
        echo "\">Views (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Session (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
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
\t\t\t                  <a href=\"\">Authentication (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">API Authentication (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Authorization (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Encryption (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Hashing (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Password Reset</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>

\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>General Topics</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Artisan Console (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 129
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/broadcasting");
        echo "\">Broadcasting</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 132
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/cache");
        echo "\">Cache (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 135
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/collections");
        echo "\">Collections  (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Errors and Logging (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 141
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/events");
        echo "\">Events</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">File Storage (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Helpers (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mail (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Notifications (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Packages (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 159
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/queues");
        echo "\">Queues</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Scheduled Tasks (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Database</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Query Builder (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Pagination (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 182
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/databaseMigration");
        echo "\">Migrations (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Seeding (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Redis (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>

\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Eloquent ORM</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 202
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/eloquentORMModels");
        echo "\">Eloquent ORM Models (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 205
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/eloquentRelationships");
        echo "\">Releationships (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Collections (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mutators (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Serialization (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Testing</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">HTTP Tests (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Browser Tests (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Database (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mocking (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Official Packages</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Cashier (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Envoy (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
                              <a href=\"";
        // line 254
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/passport");
        echo "\">Passport</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Scout (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 260
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/socialite");
        echo "\">Socialite</a>
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
        // line 271
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/routeCaching");
        echo "\">Route Caching (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 274
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/caching");
        echo "\">Caching (SEE IF THERE IS NO BREAKAGE)</a>
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
        // line 284
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/repositoryPattern");
        echo "\">Repository Pattern (SEE IF THHERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 287
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.4/registryPattern");
        echo "\">Registry Pattern (SEE IF THERE IS NO BREAKAGE)</a>
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
        // line 297
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/jwt");
        echo "\">Jason Web Token(JWT) based Authentication</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 300
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/entrustRoleBasedPermission");
        echo "\">Entrust Role Based Permission</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 303
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/pusherIntegration");
        echo "\">Pusher Integration (Simple Push Notification)</a>
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
        // line 313
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/routeModelBinding");
        echo "\">Route Model Binding</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 316
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/namingResourceRouteParameters");
        echo "\">Naming Resource Route Parameters</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 319
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("laravel5.2/namingResourceRoutes");
        echo "\">Naming Resource Routes</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"";
        // line 322
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
        // line 335
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 336
        echo "\t\t        </div>
\t\t        <!-- Content -->
\t\t    </div>             <!-- Start of Row1 -->
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 343
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/ninjaFooter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 344
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 347
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 348
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 349
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 350
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 351
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 352
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/layouts/laravel5-4TutorialsLayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 352,  508 => 351,  501 => 350,  497 => 349,  493 => 348,  489 => 347,  484 => 344,  480 => 343,  471 => 336,  469 => 335,  453 => 322,  447 => 319,  441 => 316,  435 => 313,  422 => 303,  416 => 300,  410 => 297,  397 => 287,  391 => 284,  378 => 274,  372 => 271,  358 => 260,  349 => 254,  297 => 205,  291 => 202,  268 => 182,  242 => 159,  221 => 141,  212 => 135,  206 => 132,  200 => 129,  152 => 84,  146 => 81,  131 => 69,  125 => 66,  112 => 56,  106 => 53,  100 => 50,  94 => 47,  81 => 36,  77 => 35,  56 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
\t\t\t                  <a href=\"{{'laravel5.4/ServiceContainer'|page}}\">Service Container (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/serviceProvider'|page}}\">Service Provider (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/facades'|page}}\">Facades (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/contracts'|page}}\">Contracts (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>The HTTP Layer</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/routing'|page}}\">Routing (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/middlewares'|page}}\">Middleware (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">CSRF Protection</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Controllers</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Requests</a>
\t\t\t                </li>
\t\t\t                 <li>
\t\t\t                  <a href=\"{{'laravel5.4/httpResponses'|page}}\">Responses (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/views'|page}}\">Views (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Session (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
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
\t\t\t                  <a href=\"\">Authentication (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">API Authentication (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Authorization (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Encryption (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Hashing (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Password Reset</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>

\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>General Topics</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Artisan Console (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/broadcasting'|page}}\">Broadcasting</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/cache'|page}}\">Cache (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/collections'|page}}\">Collections  (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Errors and Logging (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/events'|page}}\">Events</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">File Storage (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Helpers (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mail (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Notifications (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Packages (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/queues'|page}}\">Queues</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Scheduled Tasks (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Database</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Query Builder (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Pagination (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/databaseMigration'|page}}\">Migrations (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Seeding (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Redis (NOT STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>

\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Eloquent ORM</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/eloquentORMModels'|page}}\">Eloquent ORM Models (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/eloquentRelationships'|page}}\">Releationships (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Collections (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mutators (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Serialization (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Testing</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Getting Started (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">HTTP Tests (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Browser Tests (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Database (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Mocking (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Official Packages</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Cashier (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Envoy (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
                              <a href=\"{{'laravel5.4/passport'|page}}\">Passport</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"\">Scout (NOT YET STARTED)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/socialite'|page}}\">Socialite</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>

\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Performance Improvement</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/routeCaching'|page}}\">Route Caching (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/caching'|page}}\">Caching (SEE IF THERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t              </ul>
\t\t\t            </li>
\t\t\t          </ul>
\t\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li class=\"active\">
\t\t\t              <a>Design Patterns</a>
\t\t\t              <ul>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/repositoryPattern'|page}}\">Repository Pattern (SEE IF THHERE IS NO BREAKAGE)</a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                  <a href=\"{{'laravel5.4/registryPattern'|page}}\">Registry Pattern (SEE IF THERE IS NO BREAKAGE)</a>
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
</html>", "/home/vagrant/Code/octobercms/themes/demo/layouts/laravel5-4TutorialsLayout.htm", "");
    }
}
