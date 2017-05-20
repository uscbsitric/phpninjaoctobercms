<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/queues.htm */
class __TwigTemplate_50d191e3365d652c51e01d7b2fb969e73e67abe03bbfe11135f9223c38100170 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Queues </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel queues provide a unified API across a variety of different queue backends, such as Beanstalk, Amazon SQS, Redis, or even a relational database. 
      Queues allow you to defer the processing of a time consuming task, such as sending an email, until a later time. 
      Deferring these time consuming tasks drastically speeds up web requests to your application.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      <p>
      I am using the \"database\" driver for this example. startingpoint is the name of my project.
      <code>Try-Catch</code> and proper handling of possible exception occurence. Design the job to succeed, because some failures are not recoverable for us.
      </p>
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When there is a long running piece of Task. Make a job for it, and dispatch it to the Queue Service. The entire application will run faster if it is designed this way.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ul>
        <li>
          Step 1: In the <code>RootProjectDirectory\\.env</code>, set <code>QUEUE_DRIVER=database</code>.
        </li>

        <li>
          Step 2: Since I am using the database driver
          <pre>
            In the terminal, in the <strong>RootProjectDirectory</strong>, run <span class=\"icon-terminal\"></span>: <strong>php artisan queue:table</strong>
            This will create the <strong>timestamp_create_jobs_table.php migration</strong>.
            Then run <span class=\"icon-terminal\"></span>: <strong>php artisan migrate</strong>
          </pre>
        </li>

        <li>
          Step 3: Prepare for failed job contingency
          <pre>
            In the terminal, in the <strong>RootProjectDirectory</strong>, run <span class=\"icon-terminal\"></span>: <strong>php artisan queue:failed-table</strong>
            This will create the <strong>timestamp_create_failed_jobs_table.php migration</strong>.
            Then run <span class=\"icon-terminal\"></span>: <strong>php artisan migrate</strong>
          </pre>
        </li>

        <li>
          Step 4: Install Supervisord
          <pre>
            sudo apt-get install -y supervisor
          </pre>
        </li>
        
        <li>
          Step 5: Configure Supervisord
          <pre>
            In /etc/supervisor

            <code>
              ; supervisor config file
              
              [unix_http_server]
              file=/var/run/supervisor.sock   ; (the path to the socket file)
              chmod=0700                      ; sockef file mode (default 0700)

              [supervisord]
              logfile=/var/log/supervisor/supervisord.log ; (main log file;default \$CWD/supervisord.log)
              pidfile=/var/run/supervisord.pid ; (supervisord pidfile;default supervisord.pid)
              childlogdir=/var/log/supervisor            ; ('AUTO' child log dir, default \$TEMP)

              ; the below section must remain in the config file for RPC
              ; (supervisorctl/web interface) to work, additional interfaces may be
              ; added by defining them in separate rpcinterface: sections              [rpcinterface:supervisor]
              supervisor.rpcinterface_factory = supervisor.rpcinterface:make_main_rpcinterface
              
              [supervisorctl]
              serverurl=unix:///var/run/supervisor.sock ; use a unix:// URL  for a unix socket

              ; The [include] section can just contain the \"files\" setting.  This
              ; setting can list multiple files (separated by whitespace or
              ; newlines).  It can also contain wildcards.  The filenames are
              ; interpreted as relative to this file.  Included files *cannot*
              ; include files themselves.

              [include]
              files = /etc/supervisor/conf.d/*.conf

              [inet_http_server]
              port = 9001
              username = user
              password = pass
            </code>
          </pre>
        </li>
        
        <li>
          Step 6: Create a Queue Worker Configuration File
          <pre>
            <code>
            [program:laravel5-4MeetupPracticeWorker1]
            process_name=%(program_name)s_%(process_num)02d
            command=php /home/vagrant/Code/PersonalProjects/laravel5.4MeetupPractice/artisan queue:listen database --sleep=3 --tries=3
            autostart=true
            autorestart=true
            user=root
            numprocs=2
            redirect_stderr=true
            stdout_logfile=/var/log/laravel5-4MeetupPracticeWorker1.log
            </code>
          </pre>
        </li>
        
        <li>
          Step 7: Restart Supervisor
          <pre>
            in the terminal, run <span class=\"icon-terminal\"></span>: <strong>service supervisor restart</strong>
          </pre>
        </li>
        
        <li>
          Step 8: Check Installation
          <pre>
            Check its installation at http://localhost:9001 , in my case http://192.168.10.10:9001/
          </pre>
        </li>

        <li>
\t\t  Step 9: Create a <code>route</code> for testing.
\t\t  <pre>
\t\t    In <strong>rootProjectDirectory\\routes\\web.php</strong>
\t\t    <code>
\t\t    ...
            Route::get('/queueTesting',
                       'QueueTestController@queueTesting'
                      );
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Step 10:  Create a <code>QueueTestController</code>
          <pre>
            In <strong>rootProjectDirectory\\app\\Http\\Controllers\\QueueTestController.php</strong>
            <code>
            ...
            &lt;?php
            namespace App\\Http\\Controllers;
            use Illuminate\\Http\\Request;
            use Illuminate\\Support\\Facades\\App;
            use Illuminate\\Support\\Facades\\Session;
            use Illuminate\\Support\\Facades\\Log;
            use App\\User;
            use App\\Jobs\\TestJob1;

            class QueueTestController extends Controller
            {
              public function queueTesting()
              {
                \$user = User::find(1);
                \$testVariable = \"test value\";
                dispatch(new TestJob1(array(\$user, \$testVariable)));
                exit('done dispatching TestJob1');
              }
            }
            </code>
          </pre>
        </li>

        <li>
          Step 11: Generate a <code>Job Class</code>
          <pre>
            In the terminal, in the rootProjectDirectory, run <span class=\"icon-terminal\"></span>: <strong>php artisan make:job TestJob1</strong>
            This will create the file <strong>RootProjectDirectory\\app\\Jobs\\TestJob1.php</strong>, this is how I adjusted my code after running the code above:
            <code>
              &lt;?php

              namespace App\\Jobs;

              use Illuminate\\Bus\\Queueable;
              use Illuminate\\Queue\\SerializesModels;
              use Illuminate\\Queue\\InteractsWithQueue;
              use Illuminate\\Contracts\\Queue\\ShouldQueue;
              use Illuminate\\Foundation\\Bus\\Dispatchable;

              use App\\User;
              use Illuminate\\Support\\Facades\\Log;

              class TestJob1 implements ShouldQueue
              {
                use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
\t
\t            protected \$user;
\t            protected \$testVariable;

                public function __construct( \$parameters )
                {
                  \$this->user = \$parameters[0];
\t\t          \$this->testVariable = \$parameters[1];
                }

                public function handle()
                {
                  sleep(10);
\t\t          \$id = \$this->user->id;
\t\t          \$testVariable = \$this->testVariable;
\t\t          \$message = \"User ID: \$id and testVariable: \$testVariable\";
                  Log::info(\$message);
                }
              }
            </code>
          </pre>
        </li>

        <li>
          Step 12: Access <code>http://laravel5.4meetuppractice/queueTesting</code>
        </li>

        <li>
\t\t  Step 13: Check the <code>jobs</code> table
        </li>
      </ul>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/queues.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Queues </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel queues provide a unified API across a variety of different queue backends, such as Beanstalk, Amazon SQS, Redis, or even a relational database. 
      Queues allow you to defer the processing of a time consuming task, such as sending an email, until a later time. 
      Deferring these time consuming tasks drastically speeds up web requests to your application.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      <p>
      I am using the \"database\" driver for this example. startingpoint is the name of my project.
      <code>Try-Catch</code> and proper handling of possible exception occurence. Design the job to succeed, because some failures are not recoverable for us.
      </p>
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When there is a long running piece of Task. Make a job for it, and dispatch it to the Queue Service. The entire application will run faster if it is designed this way.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ul>
        <li>
          Step 1: In the <code>RootProjectDirectory\\.env</code>, set <code>QUEUE_DRIVER=database</code>.
        </li>

        <li>
          Step 2: Since I am using the database driver
          <pre>
            In the terminal, in the <strong>RootProjectDirectory</strong>, run <span class=\"icon-terminal\"></span>: <strong>php artisan queue:table</strong>
            This will create the <strong>timestamp_create_jobs_table.php migration</strong>.
            Then run <span class=\"icon-terminal\"></span>: <strong>php artisan migrate</strong>
          </pre>
        </li>

        <li>
          Step 3: Prepare for failed job contingency
          <pre>
            In the terminal, in the <strong>RootProjectDirectory</strong>, run <span class=\"icon-terminal\"></span>: <strong>php artisan queue:failed-table</strong>
            This will create the <strong>timestamp_create_failed_jobs_table.php migration</strong>.
            Then run <span class=\"icon-terminal\"></span>: <strong>php artisan migrate</strong>
          </pre>
        </li>

        <li>
          Step 4: Install Supervisord
          <pre>
            sudo apt-get install -y supervisor
          </pre>
        </li>
        
        <li>
          Step 5: Configure Supervisord
          <pre>
            In /etc/supervisor

            <code>
              ; supervisor config file
              
              [unix_http_server]
              file=/var/run/supervisor.sock   ; (the path to the socket file)
              chmod=0700                      ; sockef file mode (default 0700)

              [supervisord]
              logfile=/var/log/supervisor/supervisord.log ; (main log file;default \$CWD/supervisord.log)
              pidfile=/var/run/supervisord.pid ; (supervisord pidfile;default supervisord.pid)
              childlogdir=/var/log/supervisor            ; ('AUTO' child log dir, default \$TEMP)

              ; the below section must remain in the config file for RPC
              ; (supervisorctl/web interface) to work, additional interfaces may be
              ; added by defining them in separate rpcinterface: sections              [rpcinterface:supervisor]
              supervisor.rpcinterface_factory = supervisor.rpcinterface:make_main_rpcinterface
              
              [supervisorctl]
              serverurl=unix:///var/run/supervisor.sock ; use a unix:// URL  for a unix socket

              ; The [include] section can just contain the \"files\" setting.  This
              ; setting can list multiple files (separated by whitespace or
              ; newlines).  It can also contain wildcards.  The filenames are
              ; interpreted as relative to this file.  Included files *cannot*
              ; include files themselves.

              [include]
              files = /etc/supervisor/conf.d/*.conf

              [inet_http_server]
              port = 9001
              username = user
              password = pass
            </code>
          </pre>
        </li>
        
        <li>
          Step 6: Create a Queue Worker Configuration File
          <pre>
            <code>
            [program:laravel5-4MeetupPracticeWorker1]
            process_name=%(program_name)s_%(process_num)02d
            command=php /home/vagrant/Code/PersonalProjects/laravel5.4MeetupPractice/artisan queue:listen database --sleep=3 --tries=3
            autostart=true
            autorestart=true
            user=root
            numprocs=2
            redirect_stderr=true
            stdout_logfile=/var/log/laravel5-4MeetupPracticeWorker1.log
            </code>
          </pre>
        </li>
        
        <li>
          Step 7: Restart Supervisor
          <pre>
            in the terminal, run <span class=\"icon-terminal\"></span>: <strong>service supervisor restart</strong>
          </pre>
        </li>
        
        <li>
          Step 8: Check Installation
          <pre>
            Check its installation at http://localhost:9001 , in my case http://192.168.10.10:9001/
          </pre>
        </li>

        <li>
\t\t  Step 9: Create a <code>route</code> for testing.
\t\t  <pre>
\t\t    In <strong>rootProjectDirectory\\routes\\web.php</strong>
\t\t    <code>
\t\t    ...
            Route::get('/queueTesting',
                       'QueueTestController@queueTesting'
                      );
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Step 10:  Create a <code>QueueTestController</code>
          <pre>
            In <strong>rootProjectDirectory\\app\\Http\\Controllers\\QueueTestController.php</strong>
            <code>
            ...
            &lt;?php
            namespace App\\Http\\Controllers;
            use Illuminate\\Http\\Request;
            use Illuminate\\Support\\Facades\\App;
            use Illuminate\\Support\\Facades\\Session;
            use Illuminate\\Support\\Facades\\Log;
            use App\\User;
            use App\\Jobs\\TestJob1;

            class QueueTestController extends Controller
            {
              public function queueTesting()
              {
                \$user = User::find(1);
                \$testVariable = \"test value\";
                dispatch(new TestJob1(array(\$user, \$testVariable)));
                exit('done dispatching TestJob1');
              }
            }
            </code>
          </pre>
        </li>

        <li>
          Step 11: Generate a <code>Job Class</code>
          <pre>
            In the terminal, in the rootProjectDirectory, run <span class=\"icon-terminal\"></span>: <strong>php artisan make:job TestJob1</strong>
            This will create the file <strong>RootProjectDirectory\\app\\Jobs\\TestJob1.php</strong>, this is how I adjusted my code after running the code above:
            <code>
              &lt;?php

              namespace App\\Jobs;

              use Illuminate\\Bus\\Queueable;
              use Illuminate\\Queue\\SerializesModels;
              use Illuminate\\Queue\\InteractsWithQueue;
              use Illuminate\\Contracts\\Queue\\ShouldQueue;
              use Illuminate\\Foundation\\Bus\\Dispatchable;

              use App\\User;
              use Illuminate\\Support\\Facades\\Log;

              class TestJob1 implements ShouldQueue
              {
                use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
\t
\t            protected \$user;
\t            protected \$testVariable;

                public function __construct( \$parameters )
                {
                  \$this->user = \$parameters[0];
\t\t          \$this->testVariable = \$parameters[1];
                }

                public function handle()
                {
                  sleep(10);
\t\t          \$id = \$this->user->id;
\t\t          \$testVariable = \$this->testVariable;
\t\t          \$message = \"User ID: \$id and testVariable: \$testVariable\";
                  Log::info(\$message);
                }
              }
            </code>
          </pre>
        </li>

        <li>
          Step 12: Access <code>http://laravel5.4meetuppractice/queueTesting</code>
        </li>

        <li>
\t\t  Step 13: Check the <code>jobs</code> table
        </li>
      </ul>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.4/queues.htm", "");
    }
}
