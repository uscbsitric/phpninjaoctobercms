<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/pusherIntegration.htm */
class __TwigTemplate_a4ca0eab2b7ca5b4aadf432cde3dc5dd4cd6e6730438b0ada37f84b9d50c0334 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Pusher Integration (Simple Push Notification) </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel 5.2 Events will be broadcasted over to <code>Pusher</code> so that <code>Pusher</code> can send it to the corresponding subscribers.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Make sure that the local machine or host machine and the virtual box machine has the same time with Singapore because that is where the Pusher application cluster is deployed.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want events to be broadcasted over to <code>Pusher</code> to do Push Notifications.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      There will be 2 configurations, the Backend and the Frontend.

      <ol>
        <li>
          Backend Code and Configurations
        </li>

        <li>
          Create a Pusher Application at pusher.com and take note of the following: <code>app_id</code>, <code>key</code>, <code>secret</code>, <code>cluster</code>
        </li>
        
        <li>
          Create a route for testing this integration
          <pre>
            <code>
            In the rootProrjectDirectory\\app\\Http\\routes.php

            Route::get('/eventsTesting',
\t                   'EventsTestController@eventtest'
\t\t              );
            </code>
          </pre>
        </li>
        
        <li>
          Import the Pusher Library
          <pre>
            <code>
            In the rootProjectDirectory, in the terminal, run <span class=\"icon-terminal\"></span>: <strong>composer require pusher/pusher-php-server ~2.0</strong>
            then run <span class=\"icon-terminal\"></span>: <strong>composer install</strong>
            </code>
          </pre>
        </li>

        <li>
          Configure pusher credentials in the .env file
          <pre>
            <code>
            BROADCAST_DRIVER=pusher
            PUSHER_KEY=pusherKeyFromPusherDotComApplication
            PUSHER_SECRET=pusherSecretFromPusherDotComApplication
            PUSHER_APP_ID=pusherAppIDFromPusherDotComApplication
            </code>
          </pre>
        </li>

        <li>
\t\t  Implement the ShouldBroadCast contract in the Event
\t\t  <pre>
\t\t    In the rootProjectDirectory\\app\\Events\\TestEvent1.php
\t\t    <code>
            &lt;?php

            namespace App\\Events;

            use App\\User;
            use App\\Events\\Event;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

            // An Event Class is simply a data container which holds the information related to the event.
            // For example, our TestEvent1 recieves the Eloquent ORM object.
            // As you can see, this event class contains no logic.  It is simply a container for the User object
            // that was created.
            class TestEvent1 extends Event <strong>implements ShouldBroadcast</strong>
            {
              use SerializesModels;  // the SerializesModels trait used by the event will gracefully serialize any Eloquent models
                                     // if the event will gracefully serialize any Eloquent models if the event object is serialized
                                     // using PHPs serialize function.

              public \$user;
              public \$testVar1;
              public \$testVar2;

              /**
               * Create a new event instance.
               *
               * @return void
              */
              public function __construct(User \$user)
              {
                \$this->user = \$user;
                \$testVariable = 'testValue';
                \$this->testVar1 = 'si Bertrand gwapo kaayu';
                \$this->testVar2 = 'si Freds ninja';
              }
              
              ...

            }
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Fill the logic for broadcastOn and broadCastAs methods
\t\t  <pre>
\t\t    <code>
              /**
               * return an array of channels the event should be broadcast on.
               *
               * @return array
              */
              public function broadcastOn()
              {
    \t        \$channels = array('my-channel');
                return \$channels;
              }

              public function broadcastAs()
              {
    \t        \$eventName = 'my-event';
    \t        return \$eventName;
              }
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Fire the event
\t\t  <pre>
\t\t    In the rootProjectDirectory\\app\\Http\\Controllers\\EventsTestController.php
\t\t    <code>
\t\t    
\t\t    </code>
\t\t  </pre>
        </li>
      </ol>


      <ol>
        <li>
          Frontend Code and Configurations
        </li>

        <li>
          Configure pusher client creation
\t\t  <pre>
\t\t    <code>
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Listen to a channel
\t\t  <pre>
\t\t    <code>
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Subscribe to an event and execute logic when the event occurs
\t\t  <pre>
\t\t    <code>
\t\t    </code>
\t\t  </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/pusherIntegration.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Pusher Integration (Simple Push Notification) </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel 5.2 Events will be broadcasted over to <code>Pusher</code> so that <code>Pusher</code> can send it to the corresponding subscribers.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Make sure that the local machine or host machine and the virtual box machine has the same time with Singapore because that is where the Pusher application cluster is deployed.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want events to be broadcasted over to <code>Pusher</code> to do Push Notifications.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      There will be 2 configurations, the Backend and the Frontend.

      <ol>
        <li>
          Backend Code and Configurations
        </li>

        <li>
          Create a Pusher Application at pusher.com and take note of the following: <code>app_id</code>, <code>key</code>, <code>secret</code>, <code>cluster</code>
        </li>
        
        <li>
          Create a route for testing this integration
          <pre>
            <code>
            In the rootProrjectDirectory\\app\\Http\\routes.php

            Route::get('/eventsTesting',
\t                   'EventsTestController@eventtest'
\t\t              );
            </code>
          </pre>
        </li>
        
        <li>
          Import the Pusher Library
          <pre>
            <code>
            In the rootProjectDirectory, in the terminal, run <span class=\"icon-terminal\"></span>: <strong>composer require pusher/pusher-php-server ~2.0</strong>
            then run <span class=\"icon-terminal\"></span>: <strong>composer install</strong>
            </code>
          </pre>
        </li>

        <li>
          Configure pusher credentials in the .env file
          <pre>
            <code>
            BROADCAST_DRIVER=pusher
            PUSHER_KEY=pusherKeyFromPusherDotComApplication
            PUSHER_SECRET=pusherSecretFromPusherDotComApplication
            PUSHER_APP_ID=pusherAppIDFromPusherDotComApplication
            </code>
          </pre>
        </li>

        <li>
\t\t  Implement the ShouldBroadCast contract in the Event
\t\t  <pre>
\t\t    In the rootProjectDirectory\\app\\Events\\TestEvent1.php
\t\t    <code>
            &lt;?php

            namespace App\\Events;

            use App\\User;
            use App\\Events\\Event;
            use Illuminate\\Queue\\SerializesModels;
            use Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast;

            // An Event Class is simply a data container which holds the information related to the event.
            // For example, our TestEvent1 recieves the Eloquent ORM object.
            // As you can see, this event class contains no logic.  It is simply a container for the User object
            // that was created.
            class TestEvent1 extends Event <strong>implements ShouldBroadcast</strong>
            {
              use SerializesModels;  // the SerializesModels trait used by the event will gracefully serialize any Eloquent models
                                     // if the event will gracefully serialize any Eloquent models if the event object is serialized
                                     // using PHPs serialize function.

              public \$user;
              public \$testVar1;
              public \$testVar2;

              /**
               * Create a new event instance.
               *
               * @return void
              */
              public function __construct(User \$user)
              {
                \$this->user = \$user;
                \$testVariable = 'testValue';
                \$this->testVar1 = 'si Bertrand gwapo kaayu';
                \$this->testVar2 = 'si Freds ninja';
              }
              
              ...

            }
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Fill the logic for broadcastOn and broadCastAs methods
\t\t  <pre>
\t\t    <code>
              /**
               * return an array of channels the event should be broadcast on.
               *
               * @return array
              */
              public function broadcastOn()
              {
    \t        \$channels = array('my-channel');
                return \$channels;
              }

              public function broadcastAs()
              {
    \t        \$eventName = 'my-event';
    \t        return \$eventName;
              }
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Fire the event
\t\t  <pre>
\t\t    In the rootProjectDirectory\\app\\Http\\Controllers\\EventsTestController.php
\t\t    <code>
\t\t    
\t\t    </code>
\t\t  </pre>
        </li>
      </ol>


      <ol>
        <li>
          Frontend Code and Configurations
        </li>

        <li>
          Configure pusher client creation
\t\t  <pre>
\t\t    <code>
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Listen to a channel
\t\t  <pre>
\t\t    <code>
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Subscribe to an event and execute logic when the event occurs
\t\t  <pre>
\t\t    <code>
\t\t    </code>
\t\t  </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/pusherIntegration.htm", "");
    }
}
