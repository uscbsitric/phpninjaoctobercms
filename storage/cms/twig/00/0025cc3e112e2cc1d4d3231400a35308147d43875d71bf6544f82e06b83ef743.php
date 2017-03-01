<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/events.htm */
class __TwigTemplate_5f7788b7aba1465b4244e74303ee3db88369d5c994cd304c541d578528a82b34 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Events </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel's events provides a simple observer implementation, allowing you to subscribe and listen for events in your application.
      Event classes are typically stored in the app/Events directory, while their listeners are stored in app/Listeners.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Queue driver used is Database.
      StartingPoint is the name of my project.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need a certain logic to kick in when an event occurs.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In <code>rootProjectDirectory/app/Http/routes.php</code>
          <pre>
            <code>
              ...
              Route::get('/simpleEventsTesting',
                         'EventsTestController@simpleEventTest'
                        );
            </code>
          </pre>
        </li>

        <li>
          Register <code>Events</code> and their <code>Listeners</code>
          <pre>
            In <code>rootProjectDirectory/app/Providers/EventServiceProvider.php</code>, add this in the \$listen array.  Its the event listener mapping for the application.
            <code>
            ...
            protected \$listen = [...
                                 'App\\Events\\TestEvent3' => ['App\\Listeners\\TestListener3'],
                                 ...
                                ];
            </code>
          </pre>
        </li>

        <li>
          Generating <code>Events</code> and <code>Listener</code> Classes
          <pre>
            <code>
            In the terminal, in the <strong>rootProjectDirectory</strong>, run <span class=\"icon-terminal\"></span>: <strong>php artisan event:generate</strong>
            </code>
          </pre>
        </li>

        <li>
\t\t  Defining <code>Events</code>
          <pre>
            One of the generated files is <strong>rootProjectDirectory/app/Events/TestEvent3.php</strong>, is simply a data container which holds the information related to the event.
            In my example, I will make the TestEvent3 event recieve an <strong>Eloquent ORM</strong> object.
            <code>
              &lt;?php

                namespace App\\Events;

                <strong>use App\\User;</strong>
                use App\\Events\\Event;
                use Illuminate\\Queue\\SerializesModels;
                use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

                class TestEvent3 extends Event
                {
                  use SerializesModels;

                  public \$user;
                  /**
                   * Create a new event instance.
                   *
                   * @return void
                  */
                  public function __construct(<strong>User \$user</strong>)
                  {
                    \$this->user = <strong>\$user</strong>;
                  }

                  /**
                   * Get the channels the event should be broadcast on.
                   *
                   * @return array
                  */
                  public function broadcastOn()
                  {
                    return [];
                  }
                }
            </code>
          </pre>
        </li>

        <li>
          Defining <code>Listeners</code>
          <pre>
            The other generated file is <strong>rootProjectDirectory/app/Listeners/TestListener3.php, Event listeners</strong> receive the event instance in their handle method.
            Within the <strong>handle method</strong>, you may perform any logic necessary to respond to the event.
            <code>
              &lt;?php

              namespace App\\Listeners;

              use App\\Events\\TestEvent3;
              use Illuminate\\Queue\\InteractsWithQueue;
              use Illuminate\\Contracts\\Queue\\ShouldQueue;

              class TestListener3
              {
                /**
                 * Create the event listener.
                 *
                 * @return void
                */
                public function __construct()
                {
                  //
                }

               /**
                * Handle the event.
                *
                * @param  TestEvent3  \$event
                * @return void
               */
               public function handle(<strong>TestEvent3 \$event</strong>)
               {
                 <strong>// Access the userModel using \$event->user...
    \t         \$user = \$event->user;
    \t         \$id = \$user->id;
    \t         \$name = \$user->name;
    \t         \$email = \$user->email;
    \t         \$role = \$user->role;
    \t         \$testVariable1 = 'test value1';</strong>
               }
            }
            </code>
          </pre>
        </li>

        <li>
          Queued <code>Event Listeners</code>
          <pre>
            First, refer to the Queues documentation on how to setup the Queue Service of Laravel 5.2.
            After that, just implement the Illuminate\\Contracts\\Queue\\ShouldQueue <strong>Contract</strong>.

            In this particular sub topic, I will be using a different Listener, this listener is the one specifically intended to be queued.
            <code>
            rootProjectDirectory\\app\\Listerns\\TestListener1.php
            &lt;?php

            namespace App\\Listeners;

            use App\\Events\\TestEvent3;
            use Illuminate\\Queue\\InteractsWithQueue;
            use Illuminate\\Contracts\\Queue\\ShouldQueue;
            use Illuminate\\Contracts\\Mail\\Mailer;

            class TestListener3 <strong>implements ShouldQueue</strong>
            {
              public function __construct()
              {
                //
              }

              public function handle(TestEvent3 \$event)
              {
                // Access the userModel using \$event->user...
                \$user = \$event->user;
                \$id = \$user->id;
                \$name = \$user->name;
                \$email = \$user->email;
                \$role = \$user->role;
                \$testVariable1 = 'test value1';
              }
            }
            </code>

            Then just fire the event to witch this Listener is listening too and a job will be sent over to the queue service to work on.
            Since TestListener1 is listening to TestEvent1 as per rootProjectDirectory\\app\\Providers\\EventServiceProvider.php

            <code>
            ...
            protected \$listen = [<strong>'App\\Events\\TestEvent1'</strong> => [<strong>'App\\Listeners\\TestListener1'</strong>,
                                                             'App\\Listeners\\TestListener2'
                                                            ],
                                'App\\Events\\TestEvent3'  => ['App\\Listeners\\TestListener3']
                                ];
            </code>

            in the rootProjectDirectory\\app\\Http\\Controllers\\EventsTestController.php

            <code>
            ...
            class EventsTestController extends Controller
            {
              public function eventtest()
              {
    \t        \$user = User::where('id', '=', 1)->first();

    \t        // testing Laravel Events + Queue + Pusher + javascript based client
    \t        <strong>Event::fire(new TestEvent1(\$user));</strong>

                //Event::fire(new TestEvent2(\$user));

                echo \"&lt;br&gt;\";
                exit('Testing Event Firing');
              }
            ...
            }
            </code>

            in the browser, invoke the entire logic by accessing http://startingpoint/eventsTesting
          </pre>
        </li>

        <li>
\t\t  Firing <code>Events</code>
\t\t  Create a controller with a method simpleEventTest(); rootProjectDirectory\\app\\Http\\Controllers\\EventsTestController.php
          <pre>
            <code>
            &lt;?php

            namespace App\\Http\\Controllers;

            use Illuminate\\Http\\Request;
            use App\\Http\\Requests;
            use Event;
            use App\\User;
            use App\\Events\\TestEvent1;
            use App\\Events\\TestEvent2;
            use App\\Events\\TestEvent3;

            class EventsTestController extends Controller
            {
              public function eventtest()
              {
    \t        \$user = User::where('id', '=', 1)->first();

    \t        // testing Laravel Events + Queue + Pusher + javascript based client
    \t        Event::fire(new TestEvent1(\$user));

    \t        //Event::fire(new TestEvent2(\$user));

    \t        echo \"<br>\";
    \t        exit('Testing Event Firing');
              }

              <strong>public function simpleEventTest()</strong>
              {
    \t        \$user = User::where('id', '=', 1)->first();
    \t        Event::fire(new TestEvent3(\$user));
              }
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  <code>Event Subscribers</code>, allows you to listen and deal with multiple events in a single file.
          <pre>
            In rootProjectDirectory\\app\\Listener\\EventSubscriber1.php
            <code>
            &lt;?php

            namespace App\\Listeners;

            class EventSubscriber1
            {
\t          public function subscriberFunction1(\$event)
\t          {
\t\t        \$testVariable1 = 'testValue1';
\t          }

\t          public function subscriberFunction2(\$event)
\t          {
\t\t        \$testVariable2 = 'testValue2';
\t          }
\t
\t          public function subscribe(\$events)
\t          {
\t\t        \$events->listen('App\\Events\\TestEvent1', 'App\\Listeners\\EventSubscriber1@subscriberFunction1');
\t\t        \$events->listen('App\\Events\\TestEvent2', 'App\\Listeners\\EventSubscriber1@subscriberFunction2');
\t          }
            }
            </code>
            
            To test, access the browser at http://startingpoint/eventsTesting
          </pre>
        </li>

      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/events.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Events </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel's events provides a simple observer implementation, allowing you to subscribe and listen for events in your application.
      Event classes are typically stored in the app/Events directory, while their listeners are stored in app/Listeners.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Queue driver used is Database.
      StartingPoint is the name of my project.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need a certain logic to kick in when an event occurs.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In <code>rootProjectDirectory/app/Http/routes.php</code>
          <pre>
            <code>
              ...
              Route::get('/simpleEventsTesting',
                         'EventsTestController@simpleEventTest'
                        );
            </code>
          </pre>
        </li>

        <li>
          Register <code>Events</code> and their <code>Listeners</code>
          <pre>
            In <code>rootProjectDirectory/app/Providers/EventServiceProvider.php</code>, add this in the \$listen array.  Its the event listener mapping for the application.
            <code>
            ...
            protected \$listen = [...
                                 'App\\Events\\TestEvent3' => ['App\\Listeners\\TestListener3'],
                                 ...
                                ];
            </code>
          </pre>
        </li>

        <li>
          Generating <code>Events</code> and <code>Listener</code> Classes
          <pre>
            <code>
            In the terminal, in the <strong>rootProjectDirectory</strong>, run <span class=\"icon-terminal\"></span>: <strong>php artisan event:generate</strong>
            </code>
          </pre>
        </li>

        <li>
\t\t  Defining <code>Events</code>
          <pre>
            One of the generated files is <strong>rootProjectDirectory/app/Events/TestEvent3.php</strong>, is simply a data container which holds the information related to the event.
            In my example, I will make the TestEvent3 event recieve an <strong>Eloquent ORM</strong> object.
            <code>
              &lt;?php

                namespace App\\Events;

                <strong>use App\\User;</strong>
                use App\\Events\\Event;
                use Illuminate\\Queue\\SerializesModels;
                use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

                class TestEvent3 extends Event
                {
                  use SerializesModels;

                  public \$user;
                  /**
                   * Create a new event instance.
                   *
                   * @return void
                  */
                  public function __construct(<strong>User \$user</strong>)
                  {
                    \$this->user = <strong>\$user</strong>;
                  }

                  /**
                   * Get the channels the event should be broadcast on.
                   *
                   * @return array
                  */
                  public function broadcastOn()
                  {
                    return [];
                  }
                }
            </code>
          </pre>
        </li>

        <li>
          Defining <code>Listeners</code>
          <pre>
            The other generated file is <strong>rootProjectDirectory/app/Listeners/TestListener3.php, Event listeners</strong> receive the event instance in their handle method.
            Within the <strong>handle method</strong>, you may perform any logic necessary to respond to the event.
            <code>
              &lt;?php

              namespace App\\Listeners;

              use App\\Events\\TestEvent3;
              use Illuminate\\Queue\\InteractsWithQueue;
              use Illuminate\\Contracts\\Queue\\ShouldQueue;

              class TestListener3
              {
                /**
                 * Create the event listener.
                 *
                 * @return void
                */
                public function __construct()
                {
                  //
                }

               /**
                * Handle the event.
                *
                * @param  TestEvent3  \$event
                * @return void
               */
               public function handle(<strong>TestEvent3 \$event</strong>)
               {
                 <strong>// Access the userModel using \$event->user...
    \t         \$user = \$event->user;
    \t         \$id = \$user->id;
    \t         \$name = \$user->name;
    \t         \$email = \$user->email;
    \t         \$role = \$user->role;
    \t         \$testVariable1 = 'test value1';</strong>
               }
            }
            </code>
          </pre>
        </li>

        <li>
          Queued <code>Event Listeners</code>
          <pre>
            First, refer to the Queues documentation on how to setup the Queue Service of Laravel 5.2.
            After that, just implement the Illuminate\\Contracts\\Queue\\ShouldQueue <strong>Contract</strong>.

            In this particular sub topic, I will be using a different Listener, this listener is the one specifically intended to be queued.
            <code>
            rootProjectDirectory\\app\\Listerns\\TestListener1.php
            &lt;?php

            namespace App\\Listeners;

            use App\\Events\\TestEvent3;
            use Illuminate\\Queue\\InteractsWithQueue;
            use Illuminate\\Contracts\\Queue\\ShouldQueue;
            use Illuminate\\Contracts\\Mail\\Mailer;

            class TestListener3 <strong>implements ShouldQueue</strong>
            {
              public function __construct()
              {
                //
              }

              public function handle(TestEvent3 \$event)
              {
                // Access the userModel using \$event->user...
                \$user = \$event->user;
                \$id = \$user->id;
                \$name = \$user->name;
                \$email = \$user->email;
                \$role = \$user->role;
                \$testVariable1 = 'test value1';
              }
            }
            </code>

            Then just fire the event to witch this Listener is listening too and a job will be sent over to the queue service to work on.
            Since TestListener1 is listening to TestEvent1 as per rootProjectDirectory\\app\\Providers\\EventServiceProvider.php

            <code>
            ...
            protected \$listen = [<strong>'App\\Events\\TestEvent1'</strong> => [<strong>'App\\Listeners\\TestListener1'</strong>,
                                                             'App\\Listeners\\TestListener2'
                                                            ],
                                'App\\Events\\TestEvent3'  => ['App\\Listeners\\TestListener3']
                                ];
            </code>

            in the rootProjectDirectory\\app\\Http\\Controllers\\EventsTestController.php

            <code>
            ...
            class EventsTestController extends Controller
            {
              public function eventtest()
              {
    \t        \$user = User::where('id', '=', 1)->first();

    \t        // testing Laravel Events + Queue + Pusher + javascript based client
    \t        <strong>Event::fire(new TestEvent1(\$user));</strong>

                //Event::fire(new TestEvent2(\$user));

                echo \"&lt;br&gt;\";
                exit('Testing Event Firing');
              }
            ...
            }
            </code>

            in the browser, invoke the entire logic by accessing http://startingpoint/eventsTesting
          </pre>
        </li>

        <li>
\t\t  Firing <code>Events</code>
\t\t  Create a controller with a method simpleEventTest(); rootProjectDirectory\\app\\Http\\Controllers\\EventsTestController.php
          <pre>
            <code>
            &lt;?php

            namespace App\\Http\\Controllers;

            use Illuminate\\Http\\Request;
            use App\\Http\\Requests;
            use Event;
            use App\\User;
            use App\\Events\\TestEvent1;
            use App\\Events\\TestEvent2;
            use App\\Events\\TestEvent3;

            class EventsTestController extends Controller
            {
              public function eventtest()
              {
    \t        \$user = User::where('id', '=', 1)->first();

    \t        // testing Laravel Events + Queue + Pusher + javascript based client
    \t        Event::fire(new TestEvent1(\$user));

    \t        //Event::fire(new TestEvent2(\$user));

    \t        echo \"<br>\";
    \t        exit('Testing Event Firing');
              }

              <strong>public function simpleEventTest()</strong>
              {
    \t        \$user = User::where('id', '=', 1)->first();
    \t        Event::fire(new TestEvent3(\$user));
              }
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  <code>Event Subscribers</code>, allows you to listen and deal with multiple events in a single file.
          <pre>
            In rootProjectDirectory\\app\\Listener\\EventSubscriber1.php
            <code>
            &lt;?php

            namespace App\\Listeners;

            class EventSubscriber1
            {
\t          public function subscriberFunction1(\$event)
\t          {
\t\t        \$testVariable1 = 'testValue1';
\t          }

\t          public function subscriberFunction2(\$event)
\t          {
\t\t        \$testVariable2 = 'testValue2';
\t          }
\t
\t          public function subscribe(\$events)
\t          {
\t\t        \$events->listen('App\\Events\\TestEvent1', 'App\\Listeners\\EventSubscriber1@subscriberFunction1');
\t\t        \$events->listen('App\\Events\\TestEvent2', 'App\\Listeners\\EventSubscriber1@subscriberFunction2');
\t          }
            }
            </code>
            
            To test, access the browser at http://startingpoint/eventsTesting
          </pre>
        </li>

      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/events.htm", "");
    }
}
