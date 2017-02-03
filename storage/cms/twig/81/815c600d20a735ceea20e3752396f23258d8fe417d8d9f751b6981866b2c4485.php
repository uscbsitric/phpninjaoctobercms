<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/routeModelBinding.htm */
class __TwigTemplate_07e5bdfd05aee4fd2488712554d8d5d8dcb86c47f17461147923eb5494973380 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Route Model Binding </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides a convinient way to inject model instances into your routes.  For example, instead of injecting a user's ID, you can inject the entire User model instance that matches the given ID.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      None
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want a convinient way to inject model instances into your routes.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          For Implicit Binding (Laravel 5.2.29 will automatically resolve type hinted Eloquent Models defined in routes or controller actions whose variable names match a route segment name.)
          In the <code>RootProjectDirectory/app/Http/routes.php</code>:
          <pre>
            <code>
              &lt;?php
              Route::get('api/users/{user}', 
                         function(App\\User \$user)
                         {
                           return \$user->email;
                         }
                        );
            </code>
            
            Then access it in the browser at <code>http://startingpoint/api/users/1</code>
          </pre>
        </li>

        <li>
          For Explicit Biding (To register an explicit binding, use the router's model method to specify the class for a given parameter.  You should define your model bindings in the RouteServiceProvider::boot() method)
          In the <code>RootProjectDirectory/app/Providers/RouteServiceProviders.php</code>
          <pre>
            <code>
              &lt;php

              namespace App\\Providers;

             use Illuminate\\Routing\\Router;
             use Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider as ServiceProvider;
             
             class RouteServiceProvider extends ServiceProvider
             {
               // ...
               public function boot()
               {
                 parent::boot(\$router);
                 \$router->model('user', 'App\\User');
               }
            </code>
          </pre>
          
          In the <code>RootProjectDirectory/app/Http/routes.php</code>:
          <pre>
            <code>
              &lt;php
              //...
              Route::get('profile/{user}',
                         function(App\\User \$user)
                         {
                            // ... code here
                         }
                        );
                        
              Then access it in the browser at <code>http://startingpoint/api/users/1</code>
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/routeModelBinding.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Route Model Binding </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides a convinient way to inject model instances into your routes.  For example, instead of injecting a user's ID, you can inject the entire User model instance that matches the given ID.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      None
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want a convinient way to inject model instances into your routes.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          For Implicit Binding (Laravel 5.2.29 will automatically resolve type hinted Eloquent Models defined in routes or controller actions whose variable names match a route segment name.)
          In the <code>RootProjectDirectory/app/Http/routes.php</code>:
          <pre>
            <code>
              &lt;?php
              Route::get('api/users/{user}', 
                         function(App\\User \$user)
                         {
                           return \$user->email;
                         }
                        );
            </code>
            
            Then access it in the browser at <code>http://startingpoint/api/users/1</code>
          </pre>
        </li>

        <li>
          For Explicit Biding (To register an explicit binding, use the router's model method to specify the class for a given parameter.  You should define your model bindings in the RouteServiceProvider::boot() method)
          In the <code>RootProjectDirectory/app/Providers/RouteServiceProviders.php</code>
          <pre>
            <code>
              &lt;php

              namespace App\\Providers;

             use Illuminate\\Routing\\Router;
             use Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider as ServiceProvider;
             
             class RouteServiceProvider extends ServiceProvider
             {
               // ...
               public function boot()
               {
                 parent::boot(\$router);
                 \$router->model('user', 'App\\User');
               }
            </code>
          </pre>
          
          In the <code>RootProjectDirectory/app/Http/routes.php</code>:
          <pre>
            <code>
              &lt;php
              //...
              Route::get('profile/{user}',
                         function(App\\User \$user)
                         {
                            // ... code here
                         }
                        );
                        
              Then access it in the browser at <code>http://startingpoint/api/users/1</code>
            </code>
          </pre>
        </li>

      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/routeModelBinding.htm", "");
    }
}
