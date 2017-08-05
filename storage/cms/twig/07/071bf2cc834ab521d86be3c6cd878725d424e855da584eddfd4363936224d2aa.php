<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/events.htm */
class __TwigTemplate_f3c7c1bc84826f23f03af22b5b31ee9de5480ca779b7464d5d85850d750abeaf extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<div class=\"row\"> <!-- Laravel Feature -->
  <div class=\"green4 tutorialPages\">
    <h1 class=\"fontColorWhite1 noMargin\">Laravel Feature</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Laravel 5.4 Events </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel's events provides a simple observer implementation, allowing you to subscribe and listen for various events that occur in your application. <br>
      Events serve as a great way to decouple various aspects of your application, since a single event can have multiple listeners that do not depend on each other.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Queue driver used is Database.
      laravel5.4MeetupPractice is the name of my project.
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
      <ul>
        <li>
          Step 1: Make a test <code>Route</code>
          In <code>rootProjectDirectory/routes/web.php</code>
          <pre>
            <code>
              ...
              Route::get('/eventsTesting',
                         'EventsTestingController@eventsTesting'
                        );
              ...
            </code>
          </pre>
        </li>

        <li>
          Step 2: Make a test <code>Controller</code>
          In <code>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController</code>
          <pre>
            <code>
              &lt;?php
              namespace App\\Http\\Controllers;
              use Illuminate\\Http\\Request;
              use Illuminate\\Support\\Facades\\App;
              use Illuminate\\Support\\Facades\\Session;

              class EventsTestingController extends Controller
              {
                public function eventsTesting()
                {
                  echo \"this is the eventsTesting() method.\";
                }
              }
            </code>
          </pre>
        </li>

        <li>
          Step 3: Register <code>Events</code> and <code>Listeners</code> 
          In the <code>rootProjectDirectory/app/Providers/EventServiceProvider.php</code>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\Facades\\Event;
              use Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider as ServiceProvider;

              class EventServiceProvider extends ServiceProvider
              {
                /**
                 * The event listener mappings for the application.
                 *
                 * @var array
                 */
                 protected \$listen = ['App\\Events\\TheBertrandSteppedIn' => ['App\\Listeners\\SecurityGuard',
\t                                                                        'App\\Listeners\\MeetupCrowd'
                                                                           ],
                                     ];

                /**
                 * Register any events for your application.
                 *
                 * @return void
                 */
                public function boot()
                {
                  parent::boot();

                  //
                }
              }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 4: Generate Events and Listeners 
\t\t  In the <code>rootProjectDirectory</code>, in the terminal, run <span class=\"icon-terminal\"></span>: <code>php artisan event:generate</code>
        </li>
        
        <li>
          Step 5: Defining an Event
          In <code>rootProjectDirectory/app/Events/TheBertrandSteppedIn.php</code>
          <pre>
            <code>
              &lt;?php

              namespace App\\Events;

              use Illuminate\\Broadcasting\\Channel;
              use Illuminate\\Queue\\SerializesModels;
              use Illuminate\\Broadcasting\\PrivateChannel;
              use Illuminate\\Broadcasting\\PresenceChannel;
              use Illuminate\\Foundation\\Events\\Dispatchable;
              use Illuminate\\Broadcasting\\InteractsWithSockets;
              use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;
              use App\\User;

              // As you can see, this event class contains no logic. It is simply a container for the Bertrand \"User\" instance that just stepped in.
              class TheBertrandSteppedIn
              {
                use Dispatchable, InteractsWithSockets, SerializesModels; // The SerializesModels trait used by the event will gracefully serialize any Eloquent models if the event object is serialized using PHP's serialize function.

\t            public \$user;
                /**
                 * Create a new event instance.
                 *
                 * @return void
                */

                public function __construct(User \$user)
                {
                  \$this->user = \$user;
                }

                /**
                 * Get the channels the event should broadcast on.
                 *
                 * @return Channel|array
                */
                public function broadcastOn()
                {
                  return new PrivateChannel('channel-name');
                }
             }
            </code>
          </pre>
        </li>
        
        <li>
          Step 6: Defining Listeners
          In <code>rootProjectDirectory/app/Listeners/SecurityGuard.php</code>
          <pre>
            <code>
            &lt;?php

            namespace App\\Listeners;

            use App\\Events\\TheBertrandSteppedIn;
            use Illuminate\\Queue\\InteractsWithQueue;
            use Illuminate\\Contracts\\Queue\\ShouldQueue;
            use Illuminate\\Support\\Facades\\Log;
            use Carbon\\Carbon;

           // Event listeners receive the event instance in their handle method. 
           // The event:generate command will automatically import the proper event class and type-hint the event on the handle method. 
           // Within the handle method, you may perform any actions necessary to respond to the event:
           class SecurityGuard
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
              * @param  TheBertrandSteppedIn  \$event
              * @return void
             */
             public function handle(TheBertrandSteppedIn \$event)
             {
\t\t       sleep(10);
               \$user = \$event->user;
\t\t       \$id = \$user->id;
\t\t       \$logMessage = \"Non Queued event: User with ID: \$id gave his autograph to the guard.\";
\t\t       Log::info(\$logMessage);
             }
            }
            </code>
          </pre>
          
          In <code>rootProjectDirectory/app/Listeners/MeetupCrowd.php</code>
          <pre>
            <code>
              &lt;?php

              namespace App\\Listeners;

              use App\\Events\\TheBertrandSteppedIn;
              use Illuminate\\Queue\\InteractsWithQueue;
              use Illuminate\\Contracts\\Queue\\ShouldQueue;
              use Illuminate\\Support\\Facades\\Log;
              use Carbon\\Carbon;

              class MeetupCrowd
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
                 * @param  TheBertrandSteppedIn  \$event
                 * @return void
                */
                public function handle(TheBertrandSteppedIn \$event)
                {
\t\t          sleep(10);
                  \$user = \$event->user;
\t\t          \$id = \$user->id;\t\t
\t\t          \$logMessage = \"Non Queued event: User with ID: \$id flocked by the Meetup Crowd except me.  And they were very happy with him.\";
\t\t          Log::info(\$logMessage);
                }
              }
            </code>
          </pre>
        </li>
        
        <li>
          Step 7: Event Subscribers
          <pre>
            Write the <code>Event Subscriber</code>
            In the rootProjectDirectory\\app\\Listeners\\Number1Fan.php
            <code>
              &lt;?php

              namespace App\\Listeners;
              use Illuminate\\Support\\Facades\\Log;

              class Number1Fan
              {
                 public function dorylChant(\$event)
\t             {
\t               \$user = \$event->user;
\t               \$chant = \"who!!!! Doryll!! sign my chest please!\";
\t               Log::info('For Debugging purposes only --- user ID: '.\$user->id);
\t               Log::info(\$chant);
\t             }

                 public function fredzChant(\$event)
\t             {
\t               \$user = \$event->user;
\t               \$chant = \"ninja moves!!!\";
\t               Log::error('For Debugging purposes only --- user ID: '.\$user->id);
\t               Log::info(\$chant);
\t             }

                 /**
                  * Register the listeners for the subscriber.
                  *
                  * @param  Illuminate\\Events\\Dispatcher  \$events
                  */
                 public function subscribe(\$events)
                 {
                   \$events->listen('App\\Events\\DorylHasArrived',
                                   'App\\Listeners\\Number1Fan@dorylChant'
                                  );

                   \$events->listen('App\\Events\\FredzIsNowShowing',
                                   'App\\Listeners\\Number1Fan@fredzChant'
                                  );
                 }

               }
            </code>
          </pre>
          
          <pre>
            Modify the <code>rootProjectDirectory\\routes\\web.php</code> and add the <code>eventsSubscriberTesting</code> route.
            Add this route:
            <code>
              ...
              Route::get('/eventsSubscriberTesting',
                         'EventsTestingController@eventsSubscriberTesting'
                        );
            </code>
          </pre>
          
          <pre>
            Create the following <strong>Events</strong>
            
            In <strong>rootProjectDirectory\\app\\Events\\FredzIsNowShowing.php</strong>
            <code>
            &lt;?php

            namespace App\\Events;

            use Illuminate\\Broadcasting\\Channel;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Broadcasting\\PrivateChannel;
            use Illuminate\\Broadcasting\\PresenceChannel;
            use Illuminate\\Foundation\\Events\\Dispatchable;
            use Illuminate\\Broadcasting\\InteractsWithSockets;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;
            use App\\User;

            class FredzIsNowShowing
            {
              use Dispatchable, InteractsWithSockets, SerializesModels;
\t
              public \$user;
              /**
               * Create a new event instance.
               *
               * @return void
               */
              public function __construct(User \$user)
              {
                \$this->user = \$user;
              }

              /**
               * Get the channels the event should broadcast on.
               *
               * @return Channel|array
               */
              public function broadcastOn()
              {
                return new PrivateChannel('channel-name');
              }
            }
            </code>
            
            In <strong>rootProjectDirectory\\app\\Events\\DorylHasArrived.php</strong>
            <code>
              &lt;?php

              namespace App\\Events;

              use Illuminate\\Broadcasting\\Channel;
              use Illuminate\\Queue\\SerializesModels;
              use Illuminate\\Broadcasting\\PrivateChannel;
              use Illuminate\\Broadcasting\\PresenceChannel;
              use Illuminate\\Foundation\\Events\\Dispatchable;
              use Illuminate\\Broadcasting\\InteractsWithSockets;
              use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;
              use App\\User;

              class DorylHasArrived
              {
                use Dispatchable, InteractsWithSockets, SerializesModels;

\t            public \$user;
                /**
                 * Create a new event instance.
                 *
                 * @return void
                 */
                public function __construct(User \$user)
                {
                  \$this->user = \$user;
                }

                /**
                 * Get the channels the event should broadcast on.
                 *
                 * @return Channel|array
                 */
                public function broadcastOn()
                {
                  return new PrivateChannel('channel-name');
                }
              }
            </code>
          </pre>
          
          <pre>
            Modify the <code>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController.php</code>
            Add these Events
            <code>
              ...
              use App\\Events\\FredzIsNowShowing;
              use App\\Events\\DorylHasArrived;
            </code>
            
            Add this function:
            <code>
              ...
              public function eventsSubscriberTesting()
              {
                \$user = User::find(1);
                Event::fire(new FredzIsNowShowing(\$user));
\t            Event::fire(new DorylHasArrived(\$user));

\t            echo \"Check the logs for details\";
              }
            </code>
          </pre>
          
          <pre>
            Register the <code>Event Subscriber</code>
            Modify the <code>rootProjectDirectory\\app\\Providers\\EventServiceProvider.php</code>
            Add this class attribute.
            <code>
              ...
              protected \$subscribe = ['App\\Listeners\\Number1Fan'];
            </code>
          </pre>
        </li>
        
        <li>
          Step 8: Queued Events
          <pre>
            First, refer to the Queues documentation on how to setup the Queue Service of Laravel 5.4.
            After that, just implement the Illuminate\\Contracts\\Queue\\ShouldQueue Contract.
            In this particular sub topic, I will be using a different <strong>Event and Listener</strong>, this listener is the one specifically intended to be queued.
          </pre>

          <pre>
            8.1 Create a route for queued event testing
            In <strong>rootProjectDirectory/routes/web.php</strong>
            <code>
            ...
            Route::get('/queuedEvent',
                       'EventsTestingController@queuedEvent'
                      );
            </code>
          </pre>

          <pre>
            8.2 Register a new <strong>Event and Listener</strong>
            In the <strong>rootProjectDirectory\\app\\Providers\\EventServiceProvider.php</strong>
            <code>
            ...
            protected \$listen = ['App\\Events\\TheBertrandSteppedIn' => ['App\\Listeners\\SecurityGuard',
\t                                                                   'App\\Listeners\\MeetupCrowd'
                                                                      ],
\t\t\t                     'App\\Events\\LaravelMeetupPresentation' => ['App\\Listeners\\PresentationProcessor']   // &lt;--- Add this line
                                ];
            </code>
            
            Then in the <strong>rootProjectDirectory</strong>, in the terminall run <span class=\"icon-terminal\"></span>: php artisan event:generate
            It will generate the following files: <strong>rootDirectory\\app\\Events\\LaravelMeetupPresentation.php</strong> and <strong>rootDirectory\\app\\Listeners\\PresentationProcessor.php</strong>
          </pre>

          <pre>
            8.3 Configure the Event
            <code>
            &lt;?php

            namespace App\\Events;

            use Illuminate\\Broadcasting\\Channel;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Broadcasting\\PrivateChannel;
            use Illuminate\\Broadcasting\\PresenceChannel;
            use Illuminate\\Foundation\\Events\\Dispatchable;
            use Illuminate\\Broadcasting\\InteractsWithSockets;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

            use App\\User;

            class LaravelMeetupPresentation
            {
              use Dispatchable, InteractsWithSockets, SerializesModels;
              public \$user;

              public function __construct(User \$user)
              {
                \$this->user = \$user;
              }

              public function broadcastOn()
              {
                return new PrivateChannel('channel-name');
              }
            }
            </code>
          </pre>

          <pre>
            8.4 Configure the Listener
            <code>
            &lt;?php

            namespace App\\Listeners;

            use App\\Events\\LaravelMeetupPresentation;
            use Illuminate\\Queue\\InteractsWithQueue;
            use Illuminate\\Contracts\\Queue\\ShouldQueue;
            use Illuminate\\Support\\Facades\\Log;

            class PresentationProcessor implements ShouldQueue
            {
              public function __construct()
              {
                //
              }

              public function handle(LaravelMeetupPresentation \$event)
              {
                sleep(20);
                \$user = \$event->user;
                \$id = \$user->id;
                \$logMessage = \"Queued event: User with ID: \$id for testing purposes and this is a 20 second process.\";
                Log::info(\$logMessage);
              }
            }
            </code>
          </pre>

          <pre>
            8.5 Fire the Event
            In the <strong>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController.php</strong>
            <code>
            ...
            use App\\Events\\LaravelMeetupPresentation;

            ...
            public function queuedEvent()
            {
              \$user = User::find(1);
              Event::fire(new LaravelMeetupPresentation(\$user));
              echo \"Check the logs for details\";
            }
            
            </code>
          </pre>

          <pre>
            8.6 Access it at http://laravel5.4meetuppractice/queuedEvent
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'siteSearchInclude' %}

<div class=\"row\"> <!-- Laravel Feature -->
  <div class=\"green4 tutorialPages\">
    <h1 class=\"fontColorWhite1 noMargin\">Laravel Feature</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Laravel 5.4 Events </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel's events provides a simple observer implementation, allowing you to subscribe and listen for various events that occur in your application. <br>
      Events serve as a great way to decouple various aspects of your application, since a single event can have multiple listeners that do not depend on each other.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Queue driver used is Database.
      laravel5.4MeetupPractice is the name of my project.
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
      <ul>
        <li>
          Step 1: Make a test <code>Route</code>
          In <code>rootProjectDirectory/routes/web.php</code>
          <pre>
            <code>
              ...
              Route::get('/eventsTesting',
                         'EventsTestingController@eventsTesting'
                        );
              ...
            </code>
          </pre>
        </li>

        <li>
          Step 2: Make a test <code>Controller</code>
          In <code>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController</code>
          <pre>
            <code>
              &lt;?php
              namespace App\\Http\\Controllers;
              use Illuminate\\Http\\Request;
              use Illuminate\\Support\\Facades\\App;
              use Illuminate\\Support\\Facades\\Session;

              class EventsTestingController extends Controller
              {
                public function eventsTesting()
                {
                  echo \"this is the eventsTesting() method.\";
                }
              }
            </code>
          </pre>
        </li>

        <li>
          Step 3: Register <code>Events</code> and <code>Listeners</code> 
          In the <code>rootProjectDirectory/app/Providers/EventServiceProvider.php</code>
          <pre>
            <code>
              &lt;?php

              namespace App\\Providers;

              use Illuminate\\Support\\Facades\\Event;
              use Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider as ServiceProvider;

              class EventServiceProvider extends ServiceProvider
              {
                /**
                 * The event listener mappings for the application.
                 *
                 * @var array
                 */
                 protected \$listen = ['App\\Events\\TheBertrandSteppedIn' => ['App\\Listeners\\SecurityGuard',
\t                                                                        'App\\Listeners\\MeetupCrowd'
                                                                           ],
                                     ];

                /**
                 * Register any events for your application.
                 *
                 * @return void
                 */
                public function boot()
                {
                  parent::boot();

                  //
                }
              }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 4: Generate Events and Listeners 
\t\t  In the <code>rootProjectDirectory</code>, in the terminal, run <span class=\"icon-terminal\"></span>: <code>php artisan event:generate</code>
        </li>
        
        <li>
          Step 5: Defining an Event
          In <code>rootProjectDirectory/app/Events/TheBertrandSteppedIn.php</code>
          <pre>
            <code>
              &lt;?php

              namespace App\\Events;

              use Illuminate\\Broadcasting\\Channel;
              use Illuminate\\Queue\\SerializesModels;
              use Illuminate\\Broadcasting\\PrivateChannel;
              use Illuminate\\Broadcasting\\PresenceChannel;
              use Illuminate\\Foundation\\Events\\Dispatchable;
              use Illuminate\\Broadcasting\\InteractsWithSockets;
              use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;
              use App\\User;

              // As you can see, this event class contains no logic. It is simply a container for the Bertrand \"User\" instance that just stepped in.
              class TheBertrandSteppedIn
              {
                use Dispatchable, InteractsWithSockets, SerializesModels; // The SerializesModels trait used by the event will gracefully serialize any Eloquent models if the event object is serialized using PHP's serialize function.

\t            public \$user;
                /**
                 * Create a new event instance.
                 *
                 * @return void
                */

                public function __construct(User \$user)
                {
                  \$this->user = \$user;
                }

                /**
                 * Get the channels the event should broadcast on.
                 *
                 * @return Channel|array
                */
                public function broadcastOn()
                {
                  return new PrivateChannel('channel-name');
                }
             }
            </code>
          </pre>
        </li>
        
        <li>
          Step 6: Defining Listeners
          In <code>rootProjectDirectory/app/Listeners/SecurityGuard.php</code>
          <pre>
            <code>
            &lt;?php

            namespace App\\Listeners;

            use App\\Events\\TheBertrandSteppedIn;
            use Illuminate\\Queue\\InteractsWithQueue;
            use Illuminate\\Contracts\\Queue\\ShouldQueue;
            use Illuminate\\Support\\Facades\\Log;
            use Carbon\\Carbon;

           // Event listeners receive the event instance in their handle method. 
           // The event:generate command will automatically import the proper event class and type-hint the event on the handle method. 
           // Within the handle method, you may perform any actions necessary to respond to the event:
           class SecurityGuard
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
              * @param  TheBertrandSteppedIn  \$event
              * @return void
             */
             public function handle(TheBertrandSteppedIn \$event)
             {
\t\t       sleep(10);
               \$user = \$event->user;
\t\t       \$id = \$user->id;
\t\t       \$logMessage = \"Non Queued event: User with ID: \$id gave his autograph to the guard.\";
\t\t       Log::info(\$logMessage);
             }
            }
            </code>
          </pre>
          
          In <code>rootProjectDirectory/app/Listeners/MeetupCrowd.php</code>
          <pre>
            <code>
              &lt;?php

              namespace App\\Listeners;

              use App\\Events\\TheBertrandSteppedIn;
              use Illuminate\\Queue\\InteractsWithQueue;
              use Illuminate\\Contracts\\Queue\\ShouldQueue;
              use Illuminate\\Support\\Facades\\Log;
              use Carbon\\Carbon;

              class MeetupCrowd
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
                 * @param  TheBertrandSteppedIn  \$event
                 * @return void
                */
                public function handle(TheBertrandSteppedIn \$event)
                {
\t\t          sleep(10);
                  \$user = \$event->user;
\t\t          \$id = \$user->id;\t\t
\t\t          \$logMessage = \"Non Queued event: User with ID: \$id flocked by the Meetup Crowd except me.  And they were very happy with him.\";
\t\t          Log::info(\$logMessage);
                }
              }
            </code>
          </pre>
        </li>
        
        <li>
          Step 7: Event Subscribers
          <pre>
            Write the <code>Event Subscriber</code>
            In the rootProjectDirectory\\app\\Listeners\\Number1Fan.php
            <code>
              &lt;?php

              namespace App\\Listeners;
              use Illuminate\\Support\\Facades\\Log;

              class Number1Fan
              {
                 public function dorylChant(\$event)
\t             {
\t               \$user = \$event->user;
\t               \$chant = \"who!!!! Doryll!! sign my chest please!\";
\t               Log::info('For Debugging purposes only --- user ID: '.\$user->id);
\t               Log::info(\$chant);
\t             }

                 public function fredzChant(\$event)
\t             {
\t               \$user = \$event->user;
\t               \$chant = \"ninja moves!!!\";
\t               Log::error('For Debugging purposes only --- user ID: '.\$user->id);
\t               Log::info(\$chant);
\t             }

                 /**
                  * Register the listeners for the subscriber.
                  *
                  * @param  Illuminate\\Events\\Dispatcher  \$events
                  */
                 public function subscribe(\$events)
                 {
                   \$events->listen('App\\Events\\DorylHasArrived',
                                   'App\\Listeners\\Number1Fan@dorylChant'
                                  );

                   \$events->listen('App\\Events\\FredzIsNowShowing',
                                   'App\\Listeners\\Number1Fan@fredzChant'
                                  );
                 }

               }
            </code>
          </pre>
          
          <pre>
            Modify the <code>rootProjectDirectory\\routes\\web.php</code> and add the <code>eventsSubscriberTesting</code> route.
            Add this route:
            <code>
              ...
              Route::get('/eventsSubscriberTesting',
                         'EventsTestingController@eventsSubscriberTesting'
                        );
            </code>
          </pre>
          
          <pre>
            Create the following <strong>Events</strong>
            
            In <strong>rootProjectDirectory\\app\\Events\\FredzIsNowShowing.php</strong>
            <code>
            &lt;?php

            namespace App\\Events;

            use Illuminate\\Broadcasting\\Channel;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Broadcasting\\PrivateChannel;
            use Illuminate\\Broadcasting\\PresenceChannel;
            use Illuminate\\Foundation\\Events\\Dispatchable;
            use Illuminate\\Broadcasting\\InteractsWithSockets;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;
            use App\\User;

            class FredzIsNowShowing
            {
              use Dispatchable, InteractsWithSockets, SerializesModels;
\t
              public \$user;
              /**
               * Create a new event instance.
               *
               * @return void
               */
              public function __construct(User \$user)
              {
                \$this->user = \$user;
              }

              /**
               * Get the channels the event should broadcast on.
               *
               * @return Channel|array
               */
              public function broadcastOn()
              {
                return new PrivateChannel('channel-name');
              }
            }
            </code>
            
            In <strong>rootProjectDirectory\\app\\Events\\DorylHasArrived.php</strong>
            <code>
              &lt;?php

              namespace App\\Events;

              use Illuminate\\Broadcasting\\Channel;
              use Illuminate\\Queue\\SerializesModels;
              use Illuminate\\Broadcasting\\PrivateChannel;
              use Illuminate\\Broadcasting\\PresenceChannel;
              use Illuminate\\Foundation\\Events\\Dispatchable;
              use Illuminate\\Broadcasting\\InteractsWithSockets;
              use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;
              use App\\User;

              class DorylHasArrived
              {
                use Dispatchable, InteractsWithSockets, SerializesModels;

\t            public \$user;
                /**
                 * Create a new event instance.
                 *
                 * @return void
                 */
                public function __construct(User \$user)
                {
                  \$this->user = \$user;
                }

                /**
                 * Get the channels the event should broadcast on.
                 *
                 * @return Channel|array
                 */
                public function broadcastOn()
                {
                  return new PrivateChannel('channel-name');
                }
              }
            </code>
          </pre>
          
          <pre>
            Modify the <code>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController.php</code>
            Add these Events
            <code>
              ...
              use App\\Events\\FredzIsNowShowing;
              use App\\Events\\DorylHasArrived;
            </code>
            
            Add this function:
            <code>
              ...
              public function eventsSubscriberTesting()
              {
                \$user = User::find(1);
                Event::fire(new FredzIsNowShowing(\$user));
\t            Event::fire(new DorylHasArrived(\$user));

\t            echo \"Check the logs for details\";
              }
            </code>
          </pre>
          
          <pre>
            Register the <code>Event Subscriber</code>
            Modify the <code>rootProjectDirectory\\app\\Providers\\EventServiceProvider.php</code>
            Add this class attribute.
            <code>
              ...
              protected \$subscribe = ['App\\Listeners\\Number1Fan'];
            </code>
          </pre>
        </li>
        
        <li>
          Step 8: Queued Events
          <pre>
            First, refer to the Queues documentation on how to setup the Queue Service of Laravel 5.4.
            After that, just implement the Illuminate\\Contracts\\Queue\\ShouldQueue Contract.
            In this particular sub topic, I will be using a different <strong>Event and Listener</strong>, this listener is the one specifically intended to be queued.
          </pre>

          <pre>
            8.1 Create a route for queued event testing
            In <strong>rootProjectDirectory/routes/web.php</strong>
            <code>
            ...
            Route::get('/queuedEvent',
                       'EventsTestingController@queuedEvent'
                      );
            </code>
          </pre>

          <pre>
            8.2 Register a new <strong>Event and Listener</strong>
            In the <strong>rootProjectDirectory\\app\\Providers\\EventServiceProvider.php</strong>
            <code>
            ...
            protected \$listen = ['App\\Events\\TheBertrandSteppedIn' => ['App\\Listeners\\SecurityGuard',
\t                                                                   'App\\Listeners\\MeetupCrowd'
                                                                      ],
\t\t\t                     'App\\Events\\LaravelMeetupPresentation' => ['App\\Listeners\\PresentationProcessor']   // &lt;--- Add this line
                                ];
            </code>
            
            Then in the <strong>rootProjectDirectory</strong>, in the terminall run <span class=\"icon-terminal\"></span>: php artisan event:generate
            It will generate the following files: <strong>rootDirectory\\app\\Events\\LaravelMeetupPresentation.php</strong> and <strong>rootDirectory\\app\\Listeners\\PresentationProcessor.php</strong>
          </pre>

          <pre>
            8.3 Configure the Event
            <code>
            &lt;?php

            namespace App\\Events;

            use Illuminate\\Broadcasting\\Channel;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Broadcasting\\PrivateChannel;
            use Illuminate\\Broadcasting\\PresenceChannel;
            use Illuminate\\Foundation\\Events\\Dispatchable;
            use Illuminate\\Broadcasting\\InteractsWithSockets;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

            use App\\User;

            class LaravelMeetupPresentation
            {
              use Dispatchable, InteractsWithSockets, SerializesModels;
              public \$user;

              public function __construct(User \$user)
              {
                \$this->user = \$user;
              }

              public function broadcastOn()
              {
                return new PrivateChannel('channel-name');
              }
            }
            </code>
          </pre>

          <pre>
            8.4 Configure the Listener
            <code>
            &lt;?php

            namespace App\\Listeners;

            use App\\Events\\LaravelMeetupPresentation;
            use Illuminate\\Queue\\InteractsWithQueue;
            use Illuminate\\Contracts\\Queue\\ShouldQueue;
            use Illuminate\\Support\\Facades\\Log;

            class PresentationProcessor implements ShouldQueue
            {
              public function __construct()
              {
                //
              }

              public function handle(LaravelMeetupPresentation \$event)
              {
                sleep(20);
                \$user = \$event->user;
                \$id = \$user->id;
                \$logMessage = \"Queued event: User with ID: \$id for testing purposes and this is a 20 second process.\";
                Log::info(\$logMessage);
              }
            }
            </code>
          </pre>

          <pre>
            8.5 Fire the Event
            In the <strong>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController.php</strong>
            <code>
            ...
            use App\\Events\\LaravelMeetupPresentation;

            ...
            public function queuedEvent()
            {
              \$user = User::find(1);
              Event::fire(new LaravelMeetupPresentation(\$user));
              echo \"Check the logs for details\";
            }
            
            </code>
          </pre>

          <pre>
            8.6 Access it at http://laravel5.4meetuppractice/queuedEvent
            <code>
            
            </code>
          </pre>
        </li>

      </ul>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/events.htm", "");
    }
}