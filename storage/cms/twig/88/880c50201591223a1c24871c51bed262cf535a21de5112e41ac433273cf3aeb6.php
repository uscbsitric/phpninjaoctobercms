<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/authorization.htm */
class __TwigTemplate_c24c7c996658405578b5cf8207f389fdab1f7aa3cd9bd2813bfc8d7979ac7986 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Authorization </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel's authorization capabilites makes sure that the authenticated user actually owns the Model instance that was injected into the route.
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
      When you want to make sure that the authenticated user has authority over a Model instance and its function that will be invoked.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Make a policy in the terminal in the root project directory run: <span class=\"icon-terminal\"></span> <code>php artisan make:policy TaskPolicy</code>
        </li>

        <li>
          It will generate a file: <code>RootProjectDirectory/app/Policies/TaskPolicy.php</code>
        </li>

        <li>
          In the <code>TaskPolicy class</code>, add a method that will represent the operation to check authorization against.
          
          <pre>
            <code>
            &lt;?php
            namespace App\\Policies;
            
            use App\\User;
            use App\\Task;
            use Illuminate\\Auth\\Access\\HandleAuthorization;
            
            class TaskPolicy
            {
                use HandlesAuthorization;
                
                public function destroy(User \$user, Task, \$task) // one of the functions to check authorization against
                {
                    return \$user->id === \$task->user_id;
                }
            }
            ?&gt;
            </code>
          </pre>
        </li>

        <li>
\t\t  Associate the model to the policy. In the app/Providers/AuthServiceProvider.php file's \$policies property, add the association.  
\t\t  This will inform Laravel 5.2.29 which policy should be used whenever we try to authorize an action on the model instance.
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      &lt;?php
\t\t      //...
\t\t      class AuthServiceProvider extends ServiceProvider
\t\t      {
\t\t        // ...
\t\t        // policy mappings for the application
\t\t        protected \$policies = ['App\\Task' => 'App\\Policies\\TaskPolicy']; // telling Laravel that our task 
\t\t                                                                         // model corresponds to the TaskPolicy
\t\t        // ...
\t\t      }
\t\t      ?&gt;
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Authorizing the action (a controllers action).  All Laravel 5.2.29 controllers may call an <code>authorize</code> method which is exposed by the
\t\t  <code>AuthorizesRequests trait</code>.
\t\t  example: in the <code>TasksController->destroy() method</code>
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      &lt;?php
\t\t      class TasksController extends Controller
\t\t      {
\t\t        //...
\t\t        public function destroy(Request \$request, Task \$task)
\t\t        {
\t\t          \$result = \$this->authorize('destroy', // name of the Task policy method we wish to call
\t\t                                     \$task      // the model instance that is our current concern
\t\t                                    );
\t\t        }
\t\t      }
\t\t      ?&gt;
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/authorization.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Authorization </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Laravel's authorization capabilites makes sure that the authenticated user actually owns the Model instance that was injected into the route.
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
      When you want to make sure that the authenticated user has authority over a Model instance and its function that will be invoked.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Make a policy in the terminal in the root project directory run: <span class=\"icon-terminal\"></span> <code>php artisan make:policy TaskPolicy</code>
        </li>

        <li>
          It will generate a file: <code>RootProjectDirectory/app/Policies/TaskPolicy.php</code>
        </li>

        <li>
          In the <code>TaskPolicy class</code>, add a method that will represent the operation to check authorization against.
          
          <pre>
            <code>
            &lt;?php
            namespace App\\Policies;
            
            use App\\User;
            use App\\Task;
            use Illuminate\\Auth\\Access\\HandleAuthorization;
            
            class TaskPolicy
            {
                use HandlesAuthorization;
                
                public function destroy(User \$user, Task, \$task) // one of the functions to check authorization against
                {
                    return \$user->id === \$task->user_id;
                }
            }
            ?&gt;
            </code>
          </pre>
        </li>

        <li>
\t\t  Associate the model to the policy. In the app/Providers/AuthServiceProvider.php file's \$policies property, add the association.  
\t\t  This will inform Laravel 5.2.29 which policy should be used whenever we try to authorize an action on the model instance.
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      &lt;?php
\t\t      //...
\t\t      class AuthServiceProvider extends ServiceProvider
\t\t      {
\t\t        // ...
\t\t        // policy mappings for the application
\t\t        protected \$policies = ['App\\Task' => 'App\\Policies\\TaskPolicy']; // telling Laravel that our task 
\t\t                                                                         // model corresponds to the TaskPolicy
\t\t        // ...
\t\t      }
\t\t      ?&gt;
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
\t\t  Authorizing the action (a controllers action).  All Laravel 5.2.29 controllers may call an <code>authorize</code> method which is exposed by the
\t\t  <code>AuthorizesRequests trait</code>.
\t\t  example: in the <code>TasksController->destroy() method</code>
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      &lt;?php
\t\t      class TasksController extends Controller
\t\t      {
\t\t        //...
\t\t        public function destroy(Request \$request, Task \$task)
\t\t        {
\t\t          \$result = \$this->authorize('destroy', // name of the Task policy method we wish to call
\t\t                                     \$task      // the model instance that is our current concern
\t\t                                    );
\t\t        }
\t\t      }
\t\t      ?&gt;
\t\t    </code>
\t\t  </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/authorization.htm", "");
    }
}
