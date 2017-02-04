<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/namingResourceRoutes.htm */
class __TwigTemplate_525ff079cf1cbf75c791404a6996d2455f3db74d061cadc46d7b3df78550f8dc extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Naming Resource Routes </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      By default, all resource controller actions have a route name; however, you can override these names by passing a <code>names</code> array with your options.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      In my experiences, route names are used with redirection, example in <code>routes.php</code>
    </div>
    <pre>
      <code>
        Route::group(['as' => 'admin::'],
                     function ()
                     {
                       Route::get('dashboard', 
                                  ['as' => 'dashboard', 
                                   function ()
                                   {
                                     // Route named \"admin::dashboard\"
                                     // redirecting to a named route
                                     return redirect()->route(\"frederick.build\"); // &lt;--- use route names here
                                   }
                                  ]
                                 );

                       Route::get('dashboard1', 'TasksController@test1')->name('taskTest');
                     }
                    );
        </code>
        
        So, when accessing <strong>http://startingpoint/dashboard</strong>, it will redirect to <strong>http://startingpoint/frederickTest/create</strong>
      </pre>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want to override the naming of the Resource Routes
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In <code>RootProjectDirectory/app/Http/routes.php</code>
          <pre>
            <code>
              &lt;?php
                //...
                Route::resource('frederickTest', 
                                'FrederickController', 
                                ['names' => ['create' => 'frederick.build']
                                ]
\t\t                       );
            </code>
          </pre>
        </li>

        <li>
          In the terminal, in the <code>RootProjectDirectory</code> run <span class=\"icon-terminal\"></span>: <code>php artisan route:list</code>

          <pre>
            <code>
              | GET|HEAD  | frederickTest                      | frederickTest.index   | App\\Http\\Controllers\\FrederickController@index   | web |
              | POST      | frederickTest                      | frederickTest.store   | App\\Http\\Controllers\\FrederickController@store   | web |
              | GET|HEAD  | frederickTest/create               | <strong>frederick.build</strong>       | App\\Http\\Controllers\\FrederickController@create  | web | <strong>&lt;--- notice this?</strong>
              | GET|HEAD  | frederickTest/{frederickTest}      | frederickTest.show    | App\\Http\\Controllers\\FrederickController@show    | web |
              | PUT|PATCH | frederickTest/{frederickTest}      | frederickTest.update  | App\\Http\\Controllers\\FrederickController@update  | web |
              | DELETE    | frederickTest/{frederickTest}      | frederickTest.destroy | App\\Http\\Controllers\\FrederickController@destroy | web |
              | GET|HEAD  | frederickTest/{frederickTest}/edit | frederickTest.edit    | App\\Http\\Controllers\\FrederickController@edit    | web |
            </code>
            
            <strong>frederick.build</strong> instead of <strong>frederick.create</strong>
          </pre>

        </li>

      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/namingResourceRoutes.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Naming Resource Routes </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      By default, all resource controller actions have a route name; however, you can override these names by passing a <code>names</code> array with your options.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      In my experiences, route names are used with redirection, example in <code>routes.php</code>
    </div>
    <pre>
      <code>
        Route::group(['as' => 'admin::'],
                     function ()
                     {
                       Route::get('dashboard', 
                                  ['as' => 'dashboard', 
                                   function ()
                                   {
                                     // Route named \"admin::dashboard\"
                                     // redirecting to a named route
                                     return redirect()->route(\"frederick.build\"); // &lt;--- use route names here
                                   }
                                  ]
                                 );

                       Route::get('dashboard1', 'TasksController@test1')->name('taskTest');
                     }
                    );
        </code>
        
        So, when accessing <strong>http://startingpoint/dashboard</strong>, it will redirect to <strong>http://startingpoint/frederickTest/create</strong>
      </pre>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want to override the naming of the Resource Routes
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In <code>RootProjectDirectory/app/Http/routes.php</code>
          <pre>
            <code>
              &lt;?php
                //...
                Route::resource('frederickTest', 
                                'FrederickController', 
                                ['names' => ['create' => 'frederick.build']
                                ]
\t\t                       );
            </code>
          </pre>
        </li>

        <li>
          In the terminal, in the <code>RootProjectDirectory</code> run <span class=\"icon-terminal\"></span>: <code>php artisan route:list</code>

          <pre>
            <code>
              | GET|HEAD  | frederickTest                      | frederickTest.index   | App\\Http\\Controllers\\FrederickController@index   | web |
              | POST      | frederickTest                      | frederickTest.store   | App\\Http\\Controllers\\FrederickController@store   | web |
              | GET|HEAD  | frederickTest/create               | <strong>frederick.build</strong>       | App\\Http\\Controllers\\FrederickController@create  | web | <strong>&lt;--- notice this?</strong>
              | GET|HEAD  | frederickTest/{frederickTest}      | frederickTest.show    | App\\Http\\Controllers\\FrederickController@show    | web |
              | PUT|PATCH | frederickTest/{frederickTest}      | frederickTest.update  | App\\Http\\Controllers\\FrederickController@update  | web |
              | DELETE    | frederickTest/{frederickTest}      | frederickTest.destroy | App\\Http\\Controllers\\FrederickController@destroy | web |
              | GET|HEAD  | frederickTest/{frederickTest}/edit | frederickTest.edit    | App\\Http\\Controllers\\FrederickController@edit    | web |
            </code>
            
            <strong>frederick.build</strong> instead of <strong>frederick.create</strong>
          </pre>

        </li>

      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/namingResourceRoutes.htm", "");
    }
}
