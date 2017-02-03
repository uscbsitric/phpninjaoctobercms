<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/namingResourceRouteParameters.htm */
class __TwigTemplate_41d48de167bce2c02469515241460f8eb331e73f327ca1a6162edefe7e602015 extends Twig_Template
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
        echo "<div class=\"row\"> <!-- Laravel Feature -->
  <div class=\"green4 tutorialPages\">
    <h1 class=\"fontColorWhite1 noMargin\">Laravel Feature</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Naming Resource Route Parameters </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      By default, <code>Route::Resource</code> will create the route parameters for your resource routes based on the resource name.  You can easily override this on a per resource
      basis by passing <code>parameters</code> in the options array.  The <code>parameters</code> array should be an associative array of resource names and parameter names.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Make sure you have the corresponding Controller available physically, in my case, the controller FredericController exists in <code>RootProjectDirectory/app/Http/Controller/FrederickController.php</code
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need to override Resource Route Parameter names
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In RootProjectDirectory/app/Http/routes.php
          
          <pre>
            <code>
              &lt;?php
              //...

              Route::resource('frederickTest', 
                              'FrederickController', 
                              ['parameters' => ['frederickTest' => 'admin_user']
                              ]
                             );
            </code>
          </pre>
        </li>

        <li>
          Then in the terminal, in the ProjectRootDirectory, run <span class=\"icon-terminal\"></span>: <code>php artisan route:list</code>
          <pre>
            <code>
              | GET|HEAD  | frederickTest                   | frederickTest.index   | App\\Http\\Controllers\\FrederickController@index   | web
              | POST      | frederickTest                   | frederickTest.store   | App\\Http\\Controllers\\FrederickController@store   | web
              | GET|HEAD  | frederickTest/create            | frederickTest.create  | App\\Http\\Controllers\\FrederickController@create  | web
              | GET|HEAD  | frederickTest/{admin_user}      | frederickTest.show    | App\\Http\\Controllers\\FrederickController@show    | web
              | PUT|PATCH | frederickTest/{admin_user}      | frederickTest.update  | App\\Http\\Controllers\\FrederickController@update  | web
              | DELETE    | frederickTest/{admin_user}      | frederickTest.destroy | App\\Http\\Controllers\\FrederickController@destroy | web
              | GET|HEAD  | frederickTest/{admin_user}/edit | frederickTest.edit    | App\\Http\\Controllers\\FrederickController@edit    | web
            </code>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/namingResourceRouteParameters.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\"> <!-- Laravel Feature -->
  <div class=\"green4 tutorialPages\">
    <h1 class=\"fontColorWhite1 noMargin\">Laravel Feature</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Naming Resource Route Parameters </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      By default, <code>Route::Resource</code> will create the route parameters for your resource routes based on the resource name.  You can easily override this on a per resource
      basis by passing <code>parameters</code> in the options array.  The <code>parameters</code> array should be an associative array of resource names and parameter names.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Make sure you have the corresponding Controller available physically, in my case, the controller FredericController exists in <code>RootProjectDirectory/app/Http/Controller/FrederickController.php</code
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need to override Resource Route Parameter names
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In RootProjectDirectory/app/Http/routes.php
          
          <pre>
            <code>
              &lt;?php
              //...

              Route::resource('frederickTest', 
                              'FrederickController', 
                              ['parameters' => ['frederickTest' => 'admin_user']
                              ]
                             );
            </code>
          </pre>
        </li>

        <li>
          Then in the terminal, in the ProjectRootDirectory, run <span class=\"icon-terminal\"></span>: <code>php artisan route:list</code>
          <pre>
            <code>
              | GET|HEAD  | frederickTest                   | frederickTest.index   | App\\Http\\Controllers\\FrederickController@index   | web
              | POST      | frederickTest                   | frederickTest.store   | App\\Http\\Controllers\\FrederickController@store   | web
              | GET|HEAD  | frederickTest/create            | frederickTest.create  | App\\Http\\Controllers\\FrederickController@create  | web
              | GET|HEAD  | frederickTest/{admin_user}      | frederickTest.show    | App\\Http\\Controllers\\FrederickController@show    | web
              | PUT|PATCH | frederickTest/{admin_user}      | frederickTest.update  | App\\Http\\Controllers\\FrederickController@update  | web
              | DELETE    | frederickTest/{admin_user}      | frederickTest.destroy | App\\Http\\Controllers\\FrederickController@destroy | web
              | GET|HEAD  | frederickTest/{admin_user}/edit | frederickTest.edit    | App\\Http\\Controllers\\FrederickController@edit    | web
            </code>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/namingResourceRouteParameters.htm", "");
    }
}
