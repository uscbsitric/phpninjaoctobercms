<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/supervisor.htm */
class __TwigTemplate_fc77e818d18774986f3f0b688f8be7ca159644c238bbf6ece0aac8eacab75d3c extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Supervisor D </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Supervisord is a simple and popular choice for process monitoring
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      My Queue Driver is SYNC, refer to <code>RootProjectDirectory\\config\\queue.php</code> and to <code>RootProjectDirectory\\.env</code> <br>
      Also, my Homestead Virtual Box already came with it installed. <br>
      For the flags in the configuration files, refer to http://supervisord.org/configuration.html
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need a process monitoring application to ensure that the queue listener does not stop running.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In <code>/etc/supervisor/conf.d</code>, create a file named <code>laravel-worker1.conf</code>
        </li>

        <li>
          put the following codes in:
          <pre>
            <code>
              [program:laravel-worker1]
              process_name=%(program_name)s_%(process_num)02d
              command=php /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/artisan queue:work sync --sleep=3 --tries=3 --daemon
              autostart=true
              autorestart=true
              user=root
              numprocs=2
              redirect_stderr=true
              stdout_logfile=/var/log/laravel-worker1.log
            </code>
          </pre>
        </li>

        <li>
          restart the vagrant box
        </li>

        <li>
\t\t  We can now start adding jobs in the <code>queue service</code> of laravel.
\t\t  <pre>
            The command php /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/artisan queue:work sync --sleep=3 --tries=3 --daemon will run
            and supervisor will make sure that the queue listener does not stop running.
\t\t  </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/supervisor.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Supervisor D </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Supervisord is a simple and popular choice for process monitoring
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      My Queue Driver is SYNC, refer to <code>RootProjectDirectory\\config\\queue.php</code> and to <code>RootProjectDirectory\\.env</code> <br>
      Also, my Homestead Virtual Box already came with it installed. <br>
      For the flags in the configuration files, refer to http://supervisord.org/configuration.html
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need a process monitoring application to ensure that the queue listener does not stop running.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In <code>/etc/supervisor/conf.d</code>, create a file named <code>laravel-worker1.conf</code>
        </li>

        <li>
          put the following codes in:
          <pre>
            <code>
              [program:laravel-worker1]
              process_name=%(program_name)s_%(process_num)02d
              command=php /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/artisan queue:work sync --sleep=3 --tries=3 --daemon
              autostart=true
              autorestart=true
              user=root
              numprocs=2
              redirect_stderr=true
              stdout_logfile=/var/log/laravel-worker1.log
            </code>
          </pre>
        </li>

        <li>
          restart the vagrant box
        </li>

        <li>
\t\t  We can now start adding jobs in the <code>queue service</code> of laravel.
\t\t  <pre>
            The command php /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/artisan queue:work sync --sleep=3 --tries=3 --daemon will run
            and supervisor will make sure that the queue listener does not stop running.
\t\t  </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/supervisor.htm", "");
    }
}
