<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/contracts.htm */
class __TwigTemplate_bf1bd1b805ec10c08bea9d7b6ce20887a1054ea9e39e2a9db93ef8adab83d9eb extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Contracts </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides extra loose coupling by way of interfaces and resolution with the <code>Service Container</code>
      Laravel's <code>contracts</code> are a set of interfaces that define the core services provided by the framework.  Each <code>contract</code>
      has a corresponding implementation provided by the framework.  For example, Laravel provides a <code>queue</code> implementation
      with a variety of drivers, and a <code>mailer</code> implementation that is powered by <code>SwiftMailer</code>.  All of the Laravel contracts
      live in their own GitHub repository:  https://github.com/illuminate/contracts
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
      When you really need the extra loose coupling that contracts can provide.  When you need code to depend on a vendor agnostic interface.
      When you want simplicity, all of Laravel's services are neatly defined within simple interfaces.
      It is very easy to determine the functionality offered by a given service, because contracts serve as succinct documentation to the
      framework features.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
    To get an implementation of a contract, you can just \"type-hint\" the interface in the constructor of the class being resolved.
    For example, in the controller:
      <ol>
        <li>
          <pre>
            <code>
            &lt;?php
          
            namespace App\\Listeners;
            use App\\User;
            use App\\Events\\NewUserRegistered;
            use Illuminate\\Contracts\\Redis\\Database; // &lt;--- Contract
          
            class CacheUserInformation
            {
              protected \$redis;
            
              public function __construct(Database \$redis) // &lt;--- type-hinting
              {
                \$this->redis = \$redis;
              }
            
              public fuinction handle(NewUserRegistered \$event)
              {
                //... code here
              }
            }
          
            // When the event listener is resolved, the service container will read the type-hints on the constructor of the class and inject the appropriate value.
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/contracts.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Contracts </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides extra loose coupling by way of interfaces and resolution with the <code>Service Container</code>
      Laravel's <code>contracts</code> are a set of interfaces that define the core services provided by the framework.  Each <code>contract</code>
      has a corresponding implementation provided by the framework.  For example, Laravel provides a <code>queue</code> implementation
      with a variety of drivers, and a <code>mailer</code> implementation that is powered by <code>SwiftMailer</code>.  All of the Laravel contracts
      live in their own GitHub repository:  https://github.com/illuminate/contracts
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
      When you really need the extra loose coupling that contracts can provide.  When you need code to depend on a vendor agnostic interface.
      When you want simplicity, all of Laravel's services are neatly defined within simple interfaces.
      It is very easy to determine the functionality offered by a given service, because contracts serve as succinct documentation to the
      framework features.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
    To get an implementation of a contract, you can just \"type-hint\" the interface in the constructor of the class being resolved.
    For example, in the controller:
      <ol>
        <li>
          <pre>
            <code>
            &lt;?php
          
            namespace App\\Listeners;
            use App\\User;
            use App\\Events\\NewUserRegistered;
            use Illuminate\\Contracts\\Redis\\Database; // &lt;--- Contract
          
            class CacheUserInformation
            {
              protected \$redis;
            
              public function __construct(Database \$redis) // &lt;--- type-hinting
              {
                \$this->redis = \$redis;
              }
            
              public fuinction handle(NewUserRegistered \$event)
              {
                //... code here
              }
            }
          
            // When the event listener is resolved, the service container will read the type-hints on the constructor of the class and inject the appropriate value.
            </code>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/contracts.htm", "");
    }
}
