<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/ServiceContainer.htm */
class __TwigTemplate_6d20bfb6c02731e23746c36ca8ed725e7f32e168fd5b30e503483ffc8f50c133 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Service Container </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Is a tool for managing class dependencies and performing dependency injection.  Dependency injection means that class dependencies are <code>injected</code> into the class via constructor or in some cases setter methods
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
      When classes need their dependencies to be injected in the constructor or in other setter methods.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ul>
        <li>
          <pre class=\"preOverride1\">
            <strong>Binding</strong>: Almost all your service container bindings will be registered within <strong>Service Providers</strong>, so all of these examples will demonstrate using the container in that context.
            Withing a <strong>Service Provider</strong>, you always have access to the container in via the <strong>\$this->app</strong> instance variable.
            The <strong>service container</strong> itself can be sent to the resolver as an argument. Example:
          </pre>
          
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('HelpSpot\\API',
                                   function (\$app)
                                   &#123;
                                     return new HelpSpot\\API(\$app['HttpClient']);
                                   &#125;
                                  );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
             <strong>Binding A Singleton</strong>: binds a class or insterface into the container that should only be resolved one time, and then that 
             same instance will be returned on subsequent calls into the container.
          </pre>
          
          <pre>
             <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->singleton('Foobar',
                                        function(\$app)
                                        &#123;
                                          return new FooBar(\$app['SomethingElse']);
                                        &#125;
                                      );
                &#125;
              &#125;
             </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
            <strong>Binding Instances</strong>: binds an existing object instance into the container using the <strong>instance</strong> method.  The given instance will always be returned on subsequent calls into the <strong>container</strong>.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$fooBar = new FooBar( new SomethingElse );
                  \$this->app->instance('Foobar',
                                       \$fooBar
                                      );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
               <strong>Binding Interfaces to Implementations</strong>:  a very powerful feature (but I really dont know why, I really dont) of the <strong>service container</strong>
               is it ability to bind an interface to a given implementation. For example, EventPusher <strong>interface</strong> and a RedisEventPusher implementation.
               Once we have coded our RedisEventPusher implementation of this interface, we can <strong>register</strong> it with the <strong>service container</strong> like so:
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('App\\Contracts\\EventPusher',
                                   'App\\Services\\RedisEventPusher'
                                  );
                &#125;
              &#125;
            </code>
          </pre>
          
          <pre class=\"preOverride1\">
            <code>
              This tells the <strong>container</strong> that it inject the <strong>RedisEventPusher</strong> when a class needs an implementation of <strong>EventPusher</strong>.  
              Now we can type-hint the <strong>EventPusher interface</strong> in a <strong>constructor</strong>, or any other location where <strong>dependencies</strong> are <strong>injected</strong> by the <strong>service container</strong>.
            </code>
          </pre>
          
          <pre>
            <code>
              use App\\Contracts\\EventPusher;
              
              /*
              * Create a new class instance.
              * @param EventPusher \$pusher
              * @return void
              */
              
              public function __construct(EventPusher \$pusher)
              &#123;
                \$this->pusher = \$pusher;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Contextual Binding</strong>:  Sometimes you may have two classes that utilize the same interface, but you wish to inject different implementations into each class.  
              For example, when your system receives a new Order, we may want to send an event via PubNub rather than Pusher.  
              Laravel provides a simple, fluent interface for defining this behavior.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->when('App\\Handlers\\Commands\\CreateOrderHandler')
                            ->needs('App\\Contracts\\EventPusher')
                            ->give('App\\Services\\PubNubEventPusher');
                &#125;
              &#125;

              --------------------------------------------------------------------------
                         You may even pass a Closure to the given method
              --------------------------------------------------------------------------

              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->when('App\\Handlers\\Commands\\CreateOrderHandler')
                            ->needs('App\\Contracts\\EventPusher')
                            ->give( function()
                                    {
                                       //Resolve dependency
                                    }
                                  );
                &#125;
              &#125;
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Binding Primitives</strong>: Sometimes yoiu may have a class that receives some injected classes, but also needs an injected primitive value such as an integer.
              You may easily use contextual binding to inject any value your class may need.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->when('App\\Handlers\\Commands\\CreateOrderHandler')
                            ->needs('\$maxOrderCount')
                            ->give( 10 );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Tagging</strong>:  Occasionally, you may need to resolve all of a certain <strong>category</strong> of binding.  For example, you are building a report aggregator
              that receives an array of many diffrent Report interface implementations.  After registering the Report implementations, you can assign them a tag using the 
              <strong>tag</strong> method.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('SpeedReport', function()
                                                  {
                                                    // do plenty of stuff here
                                                  }
                                  );
                  \$this->app->bind('MemoryReport', function()
                                                   {
                                                     // do plenty of stuff here
                                                   }
                                  );
                  \$this->app->tag(['SpeedReport', 'MemoryReport'], 'reports');
                &#125;
              &#125;
            </code>
          </pre>
          
          <pre class=\"preOverride1\">
            <code>
            once the services have been tagged, you may easily resolve them all via the <strong>tagged</strong> method.
            </code>
          </pre>
          
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('ReportAggregator', 
                                   function(\$app)
                                   {
                                     return new ReportAggregator( \$app->tagged('reports') );
                                   }
                                  );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Resolving</strong>: Ways to resolve something out of the <strong>container</strong>
              The <strong>make</strong> method, which accepts the name of the class or interface you wish to resolve.
              // inside a service provider...
              \$foobar = \$this->app->make('Foobar');

              <strong>Type-hint</strong> the dependency in the constructor of a class that is resolved by the container including <strong>controllers, event listeners, queue jobs, middleware</strong> and more
              In practice, this is how most of your objects are resolved by the container.

              The container will automatically inject dependencies for the classes it resolves.  For example, you may type-hint a repository defined by your application 
              in a controller's constructor.  The repository will automatically be resolved and injected into the class.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Http\\Controllers;

              use App\\Users\\Repository as UserRepository;

              class UserController extends Controller
              &#123;
                protected \$users;

                public function __construct(UserRepository \$users)
                &#123;
                  \$this->\$users = \$users;
                &#125;

                public function show(\$id)
                &#123;
                  // some code here...;
                &#125;
              &#125;
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong></strong>
            </code>
          </pre>
          <pre>
            <code>
            </code>
          </pre>
        </li>
      </ul>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/ServiceContainer.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Service Container </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Is a tool for managing class dependencies and performing dependency injection.  Dependency injection means that class dependencies are <code>injected</code> into the class via constructor or in some cases setter methods
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
      When classes need their dependencies to be injected in the constructor or in other setter methods.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ul>
        <li>
          <pre class=\"preOverride1\">
            <strong>Binding</strong>: Almost all your service container bindings will be registered within <strong>Service Providers</strong>, so all of these examples will demonstrate using the container in that context.
            Withing a <strong>Service Provider</strong>, you always have access to the container in via the <strong>\$this->app</strong> instance variable.
            The <strong>service container</strong> itself can be sent to the resolver as an argument. Example:
          </pre>
          
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('HelpSpot\\API',
                                   function (\$app)
                                   &#123;
                                     return new HelpSpot\\API(\$app['HttpClient']);
                                   &#125;
                                  );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
             <strong>Binding A Singleton</strong>: binds a class or insterface into the container that should only be resolved one time, and then that 
             same instance will be returned on subsequent calls into the container.
          </pre>
          
          <pre>
             <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->singleton('Foobar',
                                        function(\$app)
                                        &#123;
                                          return new FooBar(\$app['SomethingElse']);
                                        &#125;
                                      );
                &#125;
              &#125;
             </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
            <strong>Binding Instances</strong>: binds an existing object instance into the container using the <strong>instance</strong> method.  The given instance will always be returned on subsequent calls into the <strong>container</strong>.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$fooBar = new FooBar( new SomethingElse );
                  \$this->app->instance('Foobar',
                                       \$fooBar
                                      );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
               <strong>Binding Interfaces to Implementations</strong>:  a very powerful feature (but I really dont know why, I really dont) of the <strong>service container</strong>
               is it ability to bind an interface to a given implementation. For example, EventPusher <strong>interface</strong> and a RedisEventPusher implementation.
               Once we have coded our RedisEventPusher implementation of this interface, we can <strong>register</strong> it with the <strong>service container</strong> like so:
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('App\\Contracts\\EventPusher',
                                   'App\\Services\\RedisEventPusher'
                                  );
                &#125;
              &#125;
            </code>
          </pre>
          
          <pre class=\"preOverride1\">
            <code>
              This tells the <strong>container</strong> that it inject the <strong>RedisEventPusher</strong> when a class needs an implementation of <strong>EventPusher</strong>.  
              Now we can type-hint the <strong>EventPusher interface</strong> in a <strong>constructor</strong>, or any other location where <strong>dependencies</strong> are <strong>injected</strong> by the <strong>service container</strong>.
            </code>
          </pre>
          
          <pre>
            <code>
              use App\\Contracts\\EventPusher;
              
              /*
              * Create a new class instance.
              * @param EventPusher \$pusher
              * @return void
              */
              
              public function __construct(EventPusher \$pusher)
              &#123;
                \$this->pusher = \$pusher;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Contextual Binding</strong>:  Sometimes you may have two classes that utilize the same interface, but you wish to inject different implementations into each class.  
              For example, when your system receives a new Order, we may want to send an event via PubNub rather than Pusher.  
              Laravel provides a simple, fluent interface for defining this behavior.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->when('App\\Handlers\\Commands\\CreateOrderHandler')
                            ->needs('App\\Contracts\\EventPusher')
                            ->give('App\\Services\\PubNubEventPusher');
                &#125;
              &#125;

              --------------------------------------------------------------------------
                         You may even pass a Closure to the given method
              --------------------------------------------------------------------------

              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->when('App\\Handlers\\Commands\\CreateOrderHandler')
                            ->needs('App\\Contracts\\EventPusher')
                            ->give( function()
                                    {
                                       //Resolve dependency
                                    }
                                  );
                &#125;
              &#125;
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Binding Primitives</strong>: Sometimes yoiu may have a class that receives some injected classes, but also needs an injected primitive value such as an integer.
              You may easily use contextual binding to inject any value your class may need.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->when('App\\Handlers\\Commands\\CreateOrderHandler')
                            ->needs('\$maxOrderCount')
                            ->give( 10 );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Tagging</strong>:  Occasionally, you may need to resolve all of a certain <strong>category</strong> of binding.  For example, you are building a report aggregator
              that receives an array of many diffrent Report interface implementations.  After registering the Report implementations, you can assign them a tag using the 
              <strong>tag</strong> method.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('SpeedReport', function()
                                                  {
                                                    // do plenty of stuff here
                                                  }
                                  );
                  \$this->app->bind('MemoryReport', function()
                                                   {
                                                     // do plenty of stuff here
                                                   }
                                  );
                  \$this->app->tag(['SpeedReport', 'MemoryReport'], 'reports');
                &#125;
              &#125;
            </code>
          </pre>
          
          <pre class=\"preOverride1\">
            <code>
            once the services have been tagged, you may easily resolve them all via the <strong>tagged</strong> method.
            </code>
          </pre>
          
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\ServiceProvider;
              use SomewhereElse\\SomethingElse;

              class SomeServiceProvider extends ServiceProvider
              &#123;
                protected \$defer = true;
                
                public function register()
                &#123;
                  \$this->app->bind('ReportAggregator', 
                                   function(\$app)
                                   {
                                     return new ReportAggregator( \$app->tagged('reports') );
                                   }
                                  );
                &#125;
              &#125;
            </code>
          </pre>
        </li>

        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong>Resolving</strong>: Ways to resolve something out of the <strong>container</strong>
              The <strong>make</strong> method, which accepts the name of the class or interface you wish to resolve.
              // inside a service provider...
              \$foobar = \$this->app->make('Foobar');

              <strong>Type-hint</strong> the dependency in the constructor of a class that is resolved by the container including <strong>controllers, event listeners, queue jobs, middleware</strong> and more
              In practice, this is how most of your objects are resolved by the container.

              The container will automatically inject dependencies for the classes it resolves.  For example, you may type-hint a repository defined by your application 
              in a controller's constructor.  The repository will automatically be resolved and injected into the class.
            </code>
          </pre>
          <pre>
            <code>
              &lt;?php

              namespace App\\Http\\Controllers;

              use App\\Users\\Repository as UserRepository;

              class UserController extends Controller
              &#123;
                protected \$users;

                public function __construct(UserRepository \$users)
                &#123;
                  \$this->\$users = \$users;
                &#125;

                public function show(\$id)
                &#123;
                  // some code here...;
                &#125;
              &#125;
            </code>
          </pre>
        </li>
        
        <li>
          <pre class=\"preOverride1\">
            <code>
              <strong></strong>
            </code>
          </pre>
          <pre>
            <code>
            </code>
          </pre>
        </li>
      </ul>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/ServiceContainer.htm", "");
    }
}
