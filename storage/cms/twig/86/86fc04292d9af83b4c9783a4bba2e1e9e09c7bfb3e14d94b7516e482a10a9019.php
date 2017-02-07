<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/serviceProvider.htm */
class __TwigTemplate_ab60328440fb14692b3261282501e2eaaff7184cc15aee26a57c7a6e7f3f06a6 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Service Provider </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Are a central place of all Laravel application bootstrapping.  Your own applications, as well as of Laravel's core service are bootstrapped via <code>service providers</code>.  In general, it means registering
      things, including registering <code>service container bindings, event listeners, middleware and even routes.  Service Providers</code> are the central place to configure your application.  <code>SPs</code> are the building
      blocks of you application.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Why use service providers -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">Why Use Service Providers</h1>
    <p class=\"fontColorWhite2 noMargin\">
      View discussions from <a href=\"https://laracasts.com/discuss/channels/lumen/why-use-service-providers-any-examples?page=1\">laracasts</a>.
      Best answer <a href=\"https://laracasts.com/lessons/service-provider-decoded\">here</a>.
    </p>
    <ol>
      <li>
        Configure once, use it anyware the way it was configured in the service provider.
      </li>
      <li>
        Imagine you have created a class which requires multiple dependencies and in general you use it like this:
        <pre>
          <code>
            \$foo = new Foo( new Bar(config('someSecretKey')),
                            new Baz(new Moo(), new Boo()),
                            new Woo('yolo', 5)
                          );
          </code>
        </pre>
        Its doable but you wouldn't want to figure out these dependencies everytime you try to initiate this class.  Thats why you want to use <code>Service Provider</code> where in the <code>register</code> method you can define this class as:
        <pre>
          <code>
            \$this->app->singleton('My\\Awesone\\Foo',
                                  function(\$app)
                                  {
                                    return new Foo(new Bar(config('someSecretKey')),
                                                   new Baz(new Moo(), new Boo()),
                                                   new Woo('yolo', 5)
                                                  );
                                  }
                                 );
          </code>
        </pre>
        But using the <code>Service Provider</code>, if you need to use this class, you can just type hint it in the controller (<code>Service Container</code> will figure it out) or ask for it manually like
        <code>\$foo = app('My\\Awesome\\Foo::class');</code> <br>
      </li>
      <li>
         <strong>\"...Encapsulating the logic of creating a specific class + binding + IOC = following PSR\"</strong>
        <pre class=\"preOverride1\">
        The beauty of this approach is the fact that, once you create your <code>Service Provider</code>(which encapsulates logic of creating a specific class + binding it into the 
        <code>IOC container</code> =&gt; following PSR, if you are into that stuff) or use <code>AppServiceProvider</code>, if you need just a simple binding, you are done with it 
        most of the time.  You dont't need to worry anywhere in the application about the dependencies of your Foo Class and if those dependencies eventually change, then you 
        make the edit in one place --- the <code>Service Provider</code>, and the rest of the application remains unchanged, since automatic resolution is used elsewhere.
        The service provider is a convinient place to put this sort of logic (class dependencies configuration/ class configs, then binding to the <code>Service Container or IOC</code>).  
        Ignoring the service container and one might have to do a rework when catering to singleton approaches, provide different concret classes when requesting an implementation 
        of a particular interface, your class will have to handle a lot and grow big enough to have an equivalent of the <code>ICO or service container</code> version 1.0.
        </pre>
      </li>
      <li>
        <strong>\"...Configures and initializes objects for later use.\"</strong>
        <pre class=\"preOverride1\">
        Basically, a <code>service provider</code> has no functionality : it configures/initializes things.  For example, you have an interface with many concrete implementations 
        and want to bind that interface to a particular concrete class so it can be injected elsewhere.
        </pre>
      </li>
      <li>
        <strong>\"...Configure only once; there is no need to search/replace all instances of concrete classes that you may have used.\"</strong>
        <pre class=\"preOverride1\">
        <strong>Service Provider</strong> tells the application which <strong>concrete class</strong> to instantiate/inject given an interface.  This way, whatever implementation
        you decide to use, its just a matter of changing the registration in the <strong>IOC container/service container</strong> and your applications just works, theres no need
        to search / replace all instances of concrete class that you may have used.
        </pre>
      </li>
      <li>
        <pre>
          <strong>Service Providers</strong> are not just here for binding things, you can also associate views to views composer, setup custom validators add another file system driver etc.
          Its like a bootstrap class for your application.
        </pre>
      </li>
      <li>
        <strong>\"...Define the dependencies in one place, change the dependencies in one place.\"</strong>
        <pre>
          You would define those dependencies only once, in the <strong>service provider</strong>.  Think of the <strong>service provider</strong> as a box that you define all your 
          dependencies in.  And in your application, instead of creating a whole new box, each time, you would just reference the existing <strong>service provider</strong> which
          resolves all your dependencies. The dependencies might look like this:
          <code>
            \$var = new MyCoolClass( new Baz(),
                                    new Foo( new SubFoo() ),
                                    new Something()
                                  );
          </code>
          
          If you need this resolved somewhere in your application, you will have to write it each and everytime, 
          instead of just retrieving a service that resolves everything  for you.  In the future, if you need 
          to change anything, you make the change in one place.
        </pre>
      </li>
    </ol>
  </div>
</div>            <!-- Why use service providers -->

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
      When You Want To:
      <ol>
        <li>
          Configure once and use it anywhere the way it was configured in the service provider.
        </li>
        <li>
          encapsulate the logic of creating a specific class + binding to the IOC / service container = PSR
        </li>
        <li>
          configure and intialize objects for later use which can be deferred.
        </li>
        <li>
          configure once and no need to search / replace all instances of concrete class that you may have used to.
        </li>
        <li>
          associate views to views composers, set up custom validators, add another file system driver etc..... <---- <code>this I have not tried</code>
        </li>
        <li>
          define the dependencies in one place, change the dependencies in one place.
        </li>
      </ol>
    </p>
  </div>
</div>        <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
    Taken from <a href=\"https://laraveltips.wordpress.com/2015/06/11/how-to-create-a-service-provider-in-laravel-5-1/\">laraveltips.wordpress.com</a>
      <ol>
        <li>
          Make a Test Route in <code>RootProjectDirectory\\app\\Http\\routes.php</code>
          <pre>
           <code>
             //...
             // Service Provider Demo Route
             Route::resource('demo', 'DemoController');
           </code>
          </pre>
        </li>

        <li>
          Create a <code>Demo Controller</code> <br>
          in <code>RootProjectDirectory\\app\\Http\\Controllers\\DemoController.php</code>
          <pre>
            <code>
              &lt;?php
              namespace App\\Http\\Controllers;
              use Illuminate\\Http\\Request;
              use App\\Http\\Requests;
              use App\\Helpers\\Contracts\\RocketShipContract;
              use App\\Providers\\RocketShipServiceProvider;
              
              class DemoController extends Controller
              {
                Public function index(RocketShipContract \$rocketShip)
                {
                    \$boom = \$rocketShip->blastOff();
                    
                    return view('demo.index', compact(['boom']));
                }
              }
            </code>
          </pre>
        </li>

        <li>
          In <code>RootProjectDirectory\\resources\\views\\demo\\index.blade.php</code>
          
          <pre>
            <code>
              @extends('app')
              @section('content')
                &lt;h1&gt; Demo Page &lt;/h1&gt;
                &#123;&#123; \$boom &#125;&#125;
                @endsection
            </code>
          </pre>
        </li>

        <li>
\t\t  Create the <code>rocketship contract</code> <br>
\t\t  in <code>RootProjectDirectory\\app\\Helpers\\Contracts\\RocketShipContract.php</code>
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      namespace App\\Helpers\\Contracts;
\t\t      
\t\t      Interface RocketShipContract // interface is a contract  that enforces architecture
\t\t      {
\t\t          public function blastOff();
\t\t      }
\t\t    </code>
\t\t  </pre>
        </li>
        <li>
          Create the <code>concreate class</code> <br>
          <pre class=\"preOverride1\">
            So why bother making a <strong>contract</strong>?  Well, one of the amazing features in laravel is that you can <strong>type hint</strong> the contract, and the <strong>service provider</strong> 
            will return an instance of whatever concreate class you have bount to it.  This creates an incredibly flexible and loosely coupled structure becuase you will be able 
            to easily swap out implementations with a single line of code.
          </pre>
          In <code>RootProjectDirectory\\app\\Helpers\\RocketShip.php</code> // <strong>concrete class 1</strong>
          <pre>
            <code>
              &lt;?php
              namespace app\\Helpers;
              use App\\Helpers\\Contracts\\RocketShipContract;
              
              class RocketShip implements RocketShipContract
              {
                  public function blastOff()
                  {
                      return 'Houston, we have ignition';
                  }
              }
            </code>
          </pre>
          
          In <code>RootProjectDirectory\\app\\Helpers\\RocketLauncher.php</code> // <strong>concrete class 2</strong>
          <pre>
            <code>
              &lt;?php
              namespace app\\Helpers;
              use App\\Helpers\\Contracts\\RocketShipContract;
              
              class RocketLauncher implements RocketShipContract
              {
                  public function blastOff()
                  {
                      return 'Houston, we have launched!';
                  }
              }
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            Create the <code>Service Provider</code> (which will bind the contract and the concrete class)
            in the <strong>RootProjectDirectory</strong>, in the terminal, run <span class=\"icon-terminal\"></span>: <strong>php artisan make:provider RocketShipServiceProvider</strong>
            it will create the <strong>class RocketShipServiceProvider</strong> in <strong>RootProjectDirectory\\app\\Providers\\RocketShipServiceProvider.php</strong>
          </pre>
          
          <pre>
            <code>
              namespace App\\Providers;
              use Illuminate\\Support\\ServiceProvider;
              
              class RocketShipServiceProvider extends ServiceProvider
              {
                  protected \$defer = true; // this class will only be loaded when necessary
                  
                  //Bootstrap the application services.
                  public function boot()
                  {
                      /* This method is called after all other services providers have been registered,
                         meaning, you have access to all other services that have been registered. by the framework.
                      */
                  }
                  
                  //Register the application services
                  public function register() //only bind things to the Service Container
                  {
                      //register a binding with the container
                      \$this->app->bind('App\\Helpers\\Contracts\\RocketShipContract',
                                       function()
                                       {
                                         //return new RocketLauncher(); or     // these two lines is where you choose which concrete class to return
                                         return new RocketShip();
                                       }
                                      );
                  }
                  
                  //Get the services provided by the provider
                  public function provides()
                  {
                      return ['App\\Helpers\\Contracts\\RocketShipContract'];
                  }
              }
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            tell the application to look for this class by adding it<code>(the service provider)</code> to the providers array in <code>RootProjectDirectory/config/app.php</code>

            In <code>RootProjectDirectory/config/app.php</code> in config/app.php, look for the <strong>Application Service Providers</strong> section
          </pre>
          
          <pre>
             /*
              * Application Service Providers...
              */
             App\\Providers\\AppServiceProvider::class,
             App\\Providers\\AuthServiceProvider::class,
             App\\Providers\\EventServiceProvider::class,
             App\\Providers\\RouteServiceProvider::class,
    \t     App\\Providers\\RocketShipServiceProvider::class,  &lt;---
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            In the browser, access <strong>http://startingpoint/demo</strong>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/serviceProvider.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Service Provider </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Are a central place of all Laravel application bootstrapping.  Your own applications, as well as of Laravel's core service are bootstrapped via <code>service providers</code>.  In general, it means registering
      things, including registering <code>service container bindings, event listeners, middleware and even routes.  Service Providers</code> are the central place to configure your application.  <code>SPs</code> are the building
      blocks of you application.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Why use service providers -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">Why Use Service Providers</h1>
    <p class=\"fontColorWhite2 noMargin\">
      View discussions from <a href=\"https://laracasts.com/discuss/channels/lumen/why-use-service-providers-any-examples?page=1\">laracasts</a>.
      Best answer <a href=\"https://laracasts.com/lessons/service-provider-decoded\">here</a>.
    </p>
    <ol>
      <li>
        Configure once, use it anyware the way it was configured in the service provider.
      </li>
      <li>
        Imagine you have created a class which requires multiple dependencies and in general you use it like this:
        <pre>
          <code>
            \$foo = new Foo( new Bar(config('someSecretKey')),
                            new Baz(new Moo(), new Boo()),
                            new Woo('yolo', 5)
                          );
          </code>
        </pre>
        Its doable but you wouldn't want to figure out these dependencies everytime you try to initiate this class.  Thats why you want to use <code>Service Provider</code> where in the <code>register</code> method you can define this class as:
        <pre>
          <code>
            \$this->app->singleton('My\\Awesone\\Foo',
                                  function(\$app)
                                  {
                                    return new Foo(new Bar(config('someSecretKey')),
                                                   new Baz(new Moo(), new Boo()),
                                                   new Woo('yolo', 5)
                                                  );
                                  }
                                 );
          </code>
        </pre>
        But using the <code>Service Provider</code>, if you need to use this class, you can just type hint it in the controller (<code>Service Container</code> will figure it out) or ask for it manually like
        <code>\$foo = app('My\\Awesome\\Foo::class');</code> <br>
      </li>
      <li>
         <strong>\"...Encapsulating the logic of creating a specific class + binding + IOC = following PSR\"</strong>
        <pre class=\"preOverride1\">
        The beauty of this approach is the fact that, once you create your <code>Service Provider</code>(which encapsulates logic of creating a specific class + binding it into the 
        <code>IOC container</code> =&gt; following PSR, if you are into that stuff) or use <code>AppServiceProvider</code>, if you need just a simple binding, you are done with it 
        most of the time.  You dont't need to worry anywhere in the application about the dependencies of your Foo Class and if those dependencies eventually change, then you 
        make the edit in one place --- the <code>Service Provider</code>, and the rest of the application remains unchanged, since automatic resolution is used elsewhere.
        The service provider is a convinient place to put this sort of logic (class dependencies configuration/ class configs, then binding to the <code>Service Container or IOC</code>).  
        Ignoring the service container and one might have to do a rework when catering to singleton approaches, provide different concret classes when requesting an implementation 
        of a particular interface, your class will have to handle a lot and grow big enough to have an equivalent of the <code>ICO or service container</code> version 1.0.
        </pre>
      </li>
      <li>
        <strong>\"...Configures and initializes objects for later use.\"</strong>
        <pre class=\"preOverride1\">
        Basically, a <code>service provider</code> has no functionality : it configures/initializes things.  For example, you have an interface with many concrete implementations 
        and want to bind that interface to a particular concrete class so it can be injected elsewhere.
        </pre>
      </li>
      <li>
        <strong>\"...Configure only once; there is no need to search/replace all instances of concrete classes that you may have used.\"</strong>
        <pre class=\"preOverride1\">
        <strong>Service Provider</strong> tells the application which <strong>concrete class</strong> to instantiate/inject given an interface.  This way, whatever implementation
        you decide to use, its just a matter of changing the registration in the <strong>IOC container/service container</strong> and your applications just works, theres no need
        to search / replace all instances of concrete class that you may have used.
        </pre>
      </li>
      <li>
        <pre>
          <strong>Service Providers</strong> are not just here for binding things, you can also associate views to views composer, setup custom validators add another file system driver etc.
          Its like a bootstrap class for your application.
        </pre>
      </li>
      <li>
        <strong>\"...Define the dependencies in one place, change the dependencies in one place.\"</strong>
        <pre>
          You would define those dependencies only once, in the <strong>service provider</strong>.  Think of the <strong>service provider</strong> as a box that you define all your 
          dependencies in.  And in your application, instead of creating a whole new box, each time, you would just reference the existing <strong>service provider</strong> which
          resolves all your dependencies. The dependencies might look like this:
          <code>
            \$var = new MyCoolClass( new Baz(),
                                    new Foo( new SubFoo() ),
                                    new Something()
                                  );
          </code>
          
          If you need this resolved somewhere in your application, you will have to write it each and everytime, 
          instead of just retrieving a service that resolves everything  for you.  In the future, if you need 
          to change anything, you make the change in one place.
        </pre>
      </li>
    </ol>
  </div>
</div>            <!-- Why use service providers -->

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
      When You Want To:
      <ol>
        <li>
          Configure once and use it anywhere the way it was configured in the service provider.
        </li>
        <li>
          encapsulate the logic of creating a specific class + binding to the IOC / service container = PSR
        </li>
        <li>
          configure and intialize objects for later use which can be deferred.
        </li>
        <li>
          configure once and no need to search / replace all instances of concrete class that you may have used to.
        </li>
        <li>
          associate views to views composers, set up custom validators, add another file system driver etc..... <---- <code>this I have not tried</code>
        </li>
        <li>
          define the dependencies in one place, change the dependencies in one place.
        </li>
      </ol>
    </p>
  </div>
</div>        <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
    Taken from <a href=\"https://laraveltips.wordpress.com/2015/06/11/how-to-create-a-service-provider-in-laravel-5-1/\">laraveltips.wordpress.com</a>
      <ol>
        <li>
          Make a Test Route in <code>RootProjectDirectory\\app\\Http\\routes.php</code>
          <pre>
           <code>
             //...
             // Service Provider Demo Route
             Route::resource('demo', 'DemoController');
           </code>
          </pre>
        </li>

        <li>
          Create a <code>Demo Controller</code> <br>
          in <code>RootProjectDirectory\\app\\Http\\Controllers\\DemoController.php</code>
          <pre>
            <code>
              &lt;?php
              namespace App\\Http\\Controllers;
              use Illuminate\\Http\\Request;
              use App\\Http\\Requests;
              use App\\Helpers\\Contracts\\RocketShipContract;
              use App\\Providers\\RocketShipServiceProvider;
              
              class DemoController extends Controller
              {
                Public function index(RocketShipContract \$rocketShip)
                {
                    \$boom = \$rocketShip->blastOff();
                    
                    return view('demo.index', compact(['boom']));
                }
              }
            </code>
          </pre>
        </li>

        <li>
          In <code>RootProjectDirectory\\resources\\views\\demo\\index.blade.php</code>
          
          <pre>
            <code>
              @extends('app')
              @section('content')
                &lt;h1&gt; Demo Page &lt;/h1&gt;
                &#123;&#123; \$boom &#125;&#125;
                @endsection
            </code>
          </pre>
        </li>

        <li>
\t\t  Create the <code>rocketship contract</code> <br>
\t\t  in <code>RootProjectDirectory\\app\\Helpers\\Contracts\\RocketShipContract.php</code>
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      namespace App\\Helpers\\Contracts;
\t\t      
\t\t      Interface RocketShipContract // interface is a contract  that enforces architecture
\t\t      {
\t\t          public function blastOff();
\t\t      }
\t\t    </code>
\t\t  </pre>
        </li>
        <li>
          Create the <code>concreate class</code> <br>
          <pre class=\"preOverride1\">
            So why bother making a <strong>contract</strong>?  Well, one of the amazing features in laravel is that you can <strong>type hint</strong> the contract, and the <strong>service provider</strong> 
            will return an instance of whatever concreate class you have bount to it.  This creates an incredibly flexible and loosely coupled structure becuase you will be able 
            to easily swap out implementations with a single line of code.
          </pre>
          In <code>RootProjectDirectory\\app\\Helpers\\RocketShip.php</code> // <strong>concrete class 1</strong>
          <pre>
            <code>
              &lt;?php
              namespace app\\Helpers;
              use App\\Helpers\\Contracts\\RocketShipContract;
              
              class RocketShip implements RocketShipContract
              {
                  public function blastOff()
                  {
                      return 'Houston, we have ignition';
                  }
              }
            </code>
          </pre>
          
          In <code>RootProjectDirectory\\app\\Helpers\\RocketLauncher.php</code> // <strong>concrete class 2</strong>
          <pre>
            <code>
              &lt;?php
              namespace app\\Helpers;
              use App\\Helpers\\Contracts\\RocketShipContract;
              
              class RocketLauncher implements RocketShipContract
              {
                  public function blastOff()
                  {
                      return 'Houston, we have launched!';
                  }
              }
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            Create the <code>Service Provider</code> (which will bind the contract and the concrete class)
            in the <strong>RootProjectDirectory</strong>, in the terminal, run <span class=\"icon-terminal\"></span>: <strong>php artisan make:provider RocketShipServiceProvider</strong>
            it will create the <strong>class RocketShipServiceProvider</strong> in <strong>RootProjectDirectory\\app\\Providers\\RocketShipServiceProvider.php</strong>
          </pre>
          
          <pre>
            <code>
              namespace App\\Providers;
              use Illuminate\\Support\\ServiceProvider;
              
              class RocketShipServiceProvider extends ServiceProvider
              {
                  protected \$defer = true; // this class will only be loaded when necessary
                  
                  //Bootstrap the application services.
                  public function boot()
                  {
                      /* This method is called after all other services providers have been registered,
                         meaning, you have access to all other services that have been registered. by the framework.
                      */
                  }
                  
                  //Register the application services
                  public function register() //only bind things to the Service Container
                  {
                      //register a binding with the container
                      \$this->app->bind('App\\Helpers\\Contracts\\RocketShipContract',
                                       function()
                                       {
                                         //return new RocketLauncher(); or     // these two lines is where you choose which concrete class to return
                                         return new RocketShip();
                                       }
                                      );
                  }
                  
                  //Get the services provided by the provider
                  public function provides()
                  {
                      return ['App\\Helpers\\Contracts\\RocketShipContract'];
                  }
              }
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            tell the application to look for this class by adding it<code>(the service provider)</code> to the providers array in <code>RootProjectDirectory/config/app.php</code>

            In <code>RootProjectDirectory/config/app.php</code> in config/app.php, look for the <strong>Application Service Providers</strong> section
          </pre>
          
          <pre>
             /*
              * Application Service Providers...
              */
             App\\Providers\\AppServiceProvider::class,
             App\\Providers\\AuthServiceProvider::class,
             App\\Providers\\EventServiceProvider::class,
             App\\Providers\\RouteServiceProvider::class,
    \t     App\\Providers\\RocketShipServiceProvider::class,  &lt;---
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            In the browser, access <strong>http://startingpoint/demo</strong>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/serviceProvider.htm", "");
    }
}
