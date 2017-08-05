<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/broadcasting.htm */
class __TwigTemplate_062ce778be37bbbce54cdecf18dc92281691b347453b5111d23482546ccc469c extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Broadcasting </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      In many modern web applications, WebSockets are used to implement realtime, live-updating user interfaces. When some data is updated on the server, a message is typically sent over a WebSocket connection to be handled by the client.
      This provides a more robust, efficient alternative to continually polling your application for changes.
      To assist you in building these types of applications, Laravel makes it easy to \"broadcast\" your events over a WebSocket connection. Broadcasting your Laravel events allows you to share the same event names between your server-side
      code and your client-side JavaScript application.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Before diving into event broadcasting, make sure you have read all of the documentation regarding Laravel events and listeners.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want to broadcast your Laravel events to allows sharing the same event names between your server-side code and your client-side JavaScript application.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ul>
        <li>
          Step 1: Broadcasting Configuration
          
          <pre>
            <code>
            In <strong>rootProjectDirectory\\config\\broadcasting.php</strong>
            ...
            'default' => env('BROADCAST_DRIVER', 'pusher'),
            ...
            'pusher' => ['driver' => 'pusher',
                         'key' => env('PUSHER_APP_KEY'),
                         'secret' => env('PUSHER_APP_SECRET'),
                         'app_id' => env('PUSHER_APP_ID'),
                         'options' =>  ['cluster'   => 'ap1',
                                        'encrypted' => true // since its a boolean value, I did not place this in .env
                                       ],
                        ],
            </code>
          </pre>
          
          <pre>
            <code>
              In <strong>rootProjectDirectory\\.env</strong>
              ...
              BROADCAST_DRIVER=pusher
              ...
              PUSHER_APP_ID=305756
              PUSHER_APP_KEY=a055338bda4b8d846dfc
              PUSHER_APP_SECRET=f790d5cad6ce3861e970
              PUSHER_API_CLUSTER=ap1
            </code>
          </pre>
        </li>

        <li>
          Step 2: Enable the Broadcast Service Provider

          <pre>
            In <strong>rootProjectDirectory\\config\\app.php</strong>, uncomment this code <strong>App\\Providers\\BroadcastServiceProvider::class,</strong>
            <code>
            ...
            /*
             * Application Service Providers...
             */
            App\\Providers\\AppServiceProvider::class,
            App\\Providers\\AuthServiceProvider::class,
            App\\Providers\\BroadcastServiceProvider::class,  //&lt;- this line here
            App\\Providers\\EventServiceProvider::class,
            App\\Providers\\RouteServiceProvider::class,
            </code>
          </pre>
        </li>

        <li>
          Step 3: Install the Pusher PHP SDK 
          
          <pre>
            In the <strong>rootProjectDirectory</strong>, in the terminal, run<span class=\"icon-terminal\"></span>: <strong>composer require pusher/pusher-php-server</strong>
          </pre>
        </li>

        <li>
\t\t  Step 4: Create a route for an Event for Broadcast to Pusher
          
          <pre>
            In the <strong>rootProjectDirectory\\routes\\web.php</strong>
            <code>
            ...
            Route::get('/publicEventForBroadcast',
                       'EventsTestingController@publicEventForBroadcast'
                      );
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 5: Create the event route method in the EventsTestingController
          
          <pre>
            In the <strong>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController.php</strong>
            <code>
            ...
            use App\\Events\\SomethingHappened;
            use Illuminate\\Support\\Facades\\Log;
            ...
            public function publicEventForBroadcast()
            {
              \$user = User::find(1);
\t          event( new SomethingHappened(\$user) );
\t          echo 'notification sent';
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 6: Create the Event For Broadcast (Public Channel)
          
          <pre>
            Create the file <strong>rootProjectDirectory\\app\\Events\\SomethingHappened.php</strong>
            <code>
            ...
            &lt;?php

            namespace App\\Events;

            use Illuminate\\Broadcasting\\Channel;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Broadcasting\\PrivateChannel;
            use Illuminate\\Broadcasting\\PresenceChannel;
            use Illuminate\\Broadcasting\\InteractsWithSockets;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

            use App\\User;

            class SomethingHappened implements ShouldBroadcast
            {
              use SerializesModels;

              public \$publicPropety1;
\t          public \$publicPropety2;
\t          public \$publicPropetyN;
\t          public \$user;
\t
\t          public function __construct(User \$user)
\t          {
\t            \$this->user = \$user;
\t            \$this->publicPropety1 = 'value 1';
\t            \$this->publicPropety2 = 'value 2';
\t            \$this->publicPropetyN = 'value 3';
\t          }

\t          public function broadcastOn()
\t          {
\t            return new Channel('channel1');
\t          }
\t
\t          public function broadcastAs()
\t          {
\t            return 'event1';
\t          }
\t
\t          public function broadcastWithDDDDDD()
\t          {
\t            return ['additionalData1' => 'additional value 1',
\t                    'additionalData2' => 'additional value 2',
\t\t\t            'additionalDataN' => 'additional value N'
\t                   ];
\t          }
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 7: Manually adjust Pusher.php's credential
          
          <pre>
            In <strong>rootProjectDirectory\\vendor\\pusher\\pusher-php-server\\Pusher.php</strong>
            <code>
            ...
            use Illuminate\\Support\\Facades\\Log;

            ...
            private function __construct()
            {
\t          \$this->app_id = env('PUSHER_APP_ID');
\t          \$this->secret = env('PUSHER_APP_SECRET');
\t          \$this->api_key = env('PUSHER_APP_KEY');
            }

            ...
            public function trigger(\$channels, \$event, \$data, \$socket_id = null, \$debug = false, \$already_encoded = false)
            {
              \$options['cluster'] = env('PUSHER_API_CLUSTER', 'ap1');
              \$options['encrypted'] = true;

            ...
            public function trigger()
            {
              ...
              \$response = \$this->exec_curl(\$ch);

              Log::info('Pusher response status: ' . \$response['status']);
              Log::info('Pusher response body: ' . \$response['body']);
              ...
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 8: Access http://projectName/publicEventForBroadcast
          
          <pre>
            <code>
            ...
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 9: Check the jobs table in the database
        </li>

        <li>
\t\t  Step 10: Check Pusher.com's <strong>https://dashboard.pusher.com/apps/305756/console/realtime_messages</strong>
          
          <pre>
            <code>
            ...
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/broadcasting.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Broadcasting </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      In many modern web applications, WebSockets are used to implement realtime, live-updating user interfaces. When some data is updated on the server, a message is typically sent over a WebSocket connection to be handled by the client.
      This provides a more robust, efficient alternative to continually polling your application for changes.
      To assist you in building these types of applications, Laravel makes it easy to \"broadcast\" your events over a WebSocket connection. Broadcasting your Laravel events allows you to share the same event names between your server-side
      code and your client-side JavaScript application.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Before diving into event broadcasting, make sure you have read all of the documentation regarding Laravel events and listeners.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want to broadcast your Laravel events to allows sharing the same event names between your server-side code and your client-side JavaScript application.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ul>
        <li>
          Step 1: Broadcasting Configuration
          
          <pre>
            <code>
            In <strong>rootProjectDirectory\\config\\broadcasting.php</strong>
            ...
            'default' => env('BROADCAST_DRIVER', 'pusher'),
            ...
            'pusher' => ['driver' => 'pusher',
                         'key' => env('PUSHER_APP_KEY'),
                         'secret' => env('PUSHER_APP_SECRET'),
                         'app_id' => env('PUSHER_APP_ID'),
                         'options' =>  ['cluster'   => 'ap1',
                                        'encrypted' => true // since its a boolean value, I did not place this in .env
                                       ],
                        ],
            </code>
          </pre>
          
          <pre>
            <code>
              In <strong>rootProjectDirectory\\.env</strong>
              ...
              BROADCAST_DRIVER=pusher
              ...
              PUSHER_APP_ID=305756
              PUSHER_APP_KEY=a055338bda4b8d846dfc
              PUSHER_APP_SECRET=f790d5cad6ce3861e970
              PUSHER_API_CLUSTER=ap1
            </code>
          </pre>
        </li>

        <li>
          Step 2: Enable the Broadcast Service Provider

          <pre>
            In <strong>rootProjectDirectory\\config\\app.php</strong>, uncomment this code <strong>App\\Providers\\BroadcastServiceProvider::class,</strong>
            <code>
            ...
            /*
             * Application Service Providers...
             */
            App\\Providers\\AppServiceProvider::class,
            App\\Providers\\AuthServiceProvider::class,
            App\\Providers\\BroadcastServiceProvider::class,  //&lt;- this line here
            App\\Providers\\EventServiceProvider::class,
            App\\Providers\\RouteServiceProvider::class,
            </code>
          </pre>
        </li>

        <li>
          Step 3: Install the Pusher PHP SDK 
          
          <pre>
            In the <strong>rootProjectDirectory</strong>, in the terminal, run<span class=\"icon-terminal\"></span>: <strong>composer require pusher/pusher-php-server</strong>
          </pre>
        </li>

        <li>
\t\t  Step 4: Create a route for an Event for Broadcast to Pusher
          
          <pre>
            In the <strong>rootProjectDirectory\\routes\\web.php</strong>
            <code>
            ...
            Route::get('/publicEventForBroadcast',
                       'EventsTestingController@publicEventForBroadcast'
                      );
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 5: Create the event route method in the EventsTestingController
          
          <pre>
            In the <strong>rootProjectDirectory\\app\\Http\\Controllers\\EventsTestingController.php</strong>
            <code>
            ...
            use App\\Events\\SomethingHappened;
            use Illuminate\\Support\\Facades\\Log;
            ...
            public function publicEventForBroadcast()
            {
              \$user = User::find(1);
\t          event( new SomethingHappened(\$user) );
\t          echo 'notification sent';
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 6: Create the Event For Broadcast (Public Channel)
          
          <pre>
            Create the file <strong>rootProjectDirectory\\app\\Events\\SomethingHappened.php</strong>
            <code>
            ...
            &lt;?php

            namespace App\\Events;

            use Illuminate\\Broadcasting\\Channel;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Broadcasting\\PrivateChannel;
            use Illuminate\\Broadcasting\\PresenceChannel;
            use Illuminate\\Broadcasting\\InteractsWithSockets;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

            use App\\User;

            class SomethingHappened implements ShouldBroadcast
            {
              use SerializesModels;

              public \$publicPropety1;
\t          public \$publicPropety2;
\t          public \$publicPropetyN;
\t          public \$user;
\t
\t          public function __construct(User \$user)
\t          {
\t            \$this->user = \$user;
\t            \$this->publicPropety1 = 'value 1';
\t            \$this->publicPropety2 = 'value 2';
\t            \$this->publicPropetyN = 'value 3';
\t          }

\t          public function broadcastOn()
\t          {
\t            return new Channel('channel1');
\t          }
\t
\t          public function broadcastAs()
\t          {
\t            return 'event1';
\t          }
\t
\t          public function broadcastWithDDDDDD()
\t          {
\t            return ['additionalData1' => 'additional value 1',
\t                    'additionalData2' => 'additional value 2',
\t\t\t            'additionalDataN' => 'additional value N'
\t                   ];
\t          }
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 7: Manually adjust Pusher.php's credential
          
          <pre>
            In <strong>rootProjectDirectory\\vendor\\pusher\\pusher-php-server\\Pusher.php</strong>
            <code>
            ...
            use Illuminate\\Support\\Facades\\Log;

            ...
            private function __construct()
            {
\t          \$this->app_id = env('PUSHER_APP_ID');
\t          \$this->secret = env('PUSHER_APP_SECRET');
\t          \$this->api_key = env('PUSHER_APP_KEY');
            }

            ...
            public function trigger(\$channels, \$event, \$data, \$socket_id = null, \$debug = false, \$already_encoded = false)
            {
              \$options['cluster'] = env('PUSHER_API_CLUSTER', 'ap1');
              \$options['encrypted'] = true;

            ...
            public function trigger()
            {
              ...
              \$response = \$this->exec_curl(\$ch);

              Log::info('Pusher response status: ' . \$response['status']);
              Log::info('Pusher response body: ' . \$response['body']);
              ...
            }
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 8: Access http://projectName/publicEventForBroadcast
          
          <pre>
            <code>
            ...
            </code>
          </pre>
        </li>

        <li>
\t\t  Step 9: Check the jobs table in the database
        </li>

        <li>
\t\t  Step 10: Check Pusher.com's <strong>https://dashboard.pusher.com/apps/305756/console/realtime_messages</strong>
          
          <pre>
            <code>
            ...
            </code>
          </pre>
        </li>

      </ul>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/broadcasting.htm", "");
    }
}
