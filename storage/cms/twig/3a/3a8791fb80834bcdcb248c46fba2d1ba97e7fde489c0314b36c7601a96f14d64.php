<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/repositoryPattern.htm */
class __TwigTemplate_c8f5881cde847cc67b77212d64f9cabb0568d747e48fc3cfed5dbc63dccc4e03 extends Twig_Template
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
    <h1 class=\"fontColorWhite1 noMargin\">Design Pattern</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-lightbulb icon-2x\"></span> Repository Pattern </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Holds all of our data access logic.  Especially usefull if the application grows and you need to share some Eloquent queries accross the application.
      Taken from <code>bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/</code>.  Repository pattern separates the data access logic and maps
      it to the business entities in the business logic.  Communication between the data access logicand the business logic is done through interfaces.
      
      To put it simply, Repository Pattern is a kind of container where data access logic is stored.  It hides the details of data access logic from business logic.
      We allow business logic to access the data object without having knowledge of underlying data access architecture.
      
      The separation of data access from bussiness logic have many benefits.
      
      <ul class=\"fontColorWhite1\">
        <li>
          Centralization of the data access logic makes code easier to maintain
        </li>
        <li>
          Business and data access logic can be tested separately
        </li>
        <li>
          Reduces Duplication of Code
        </li>
        <li>
          A lower chance of making programming error
        </li>
      </ul>
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
      When we need to separate data access logic from business logic.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Make a folder <code>Repositories</code> under <code>RootProjectDirectory/app/Http</code>
        </li>

        <li>
          Make a file <code>TaskRepository.php</code>
          
          <pre>
            <code>
              &lt;?php
              namespace App\\Repositories;
              use App\\User;

              class TaskRepository
              {
                // An example of a simple data access logic: \"use Eloquent ORM Relationships to retrieve all tasks owned by this user\"
                public function forUser()
                {
                    return \$user->tasks()
                                ->orderBy('created_at', 'asc')
                                ->get();
                }
              }
              ?&gt;
            </code>
          </pre>
        </li>

        <li>
          Inject the Repository in the Controller, example in <code>RootProjectDirectory/app/Http/Controller/TasksController.php</code>
          <pre>
            <code>
              &lt;php

              namespace App\\Http\\Controllers;

              use App\\Http\\Requests;
              use Illuminate\\Http\\Request;
              use App\\Http\\Requests\\TaskRequest;
              use App\\Http\\Controllers\\Controller;
              use App\\Repositories\\TaskRepository;
              use App\\Task;

              class TasksController extends Controller
              {
\t            protected \$tasksRepository;
\t            
                public function __construct(TaskRepository \$tasks)
                {
                  \$this->tasksRepository = \$tasksRepository;
                }

              ?&gt;
            </code>
          </pre>
        </li>

        <li>
\t\t  In the same Controller (TasksController)
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      ...
\t\t      public function index(Request \$request)
\t\t      {
\t\t                 // an example of a simple bussiness logic: \"Get me all tasks for this user\"
\t\t        \$tasks = \$this->tasksRepository->forUser(\$request->user());
\t\t        
\t\t        return view('tasks.index', compact('tasks'));
\t\t      }
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/repositoryPattern.htm";
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
    <h1 class=\"fontColorWhite1 noMargin\">Design Pattern</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-lightbulb icon-2x\"></span> Repository Pattern </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Holds all of our data access logic.  Especially usefull if the application grows and you need to share some Eloquent queries accross the application.
      Taken from <code>bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/</code>.  Repository pattern separates the data access logic and maps
      it to the business entities in the business logic.  Communication between the data access logicand the business logic is done through interfaces.
      
      To put it simply, Repository Pattern is a kind of container where data access logic is stored.  It hides the details of data access logic from business logic.
      We allow business logic to access the data object without having knowledge of underlying data access architecture.
      
      The separation of data access from bussiness logic have many benefits.
      
      <ul class=\"fontColorWhite1\">
        <li>
          Centralization of the data access logic makes code easier to maintain
        </li>
        <li>
          Business and data access logic can be tested separately
        </li>
        <li>
          Reduces Duplication of Code
        </li>
        <li>
          A lower chance of making programming error
        </li>
      </ul>
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
      When we need to separate data access logic from business logic.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Make a folder <code>Repositories</code> under <code>RootProjectDirectory/app/Http</code>
        </li>

        <li>
          Make a file <code>TaskRepository.php</code>
          
          <pre>
            <code>
              &lt;?php
              namespace App\\Repositories;
              use App\\User;

              class TaskRepository
              {
                // An example of a simple data access logic: \"use Eloquent ORM Relationships to retrieve all tasks owned by this user\"
                public function forUser()
                {
                    return \$user->tasks()
                                ->orderBy('created_at', 'asc')
                                ->get();
                }
              }
              ?&gt;
            </code>
          </pre>
        </li>

        <li>
          Inject the Repository in the Controller, example in <code>RootProjectDirectory/app/Http/Controller/TasksController.php</code>
          <pre>
            <code>
              &lt;php

              namespace App\\Http\\Controllers;

              use App\\Http\\Requests;
              use Illuminate\\Http\\Request;
              use App\\Http\\Requests\\TaskRequest;
              use App\\Http\\Controllers\\Controller;
              use App\\Repositories\\TaskRepository;
              use App\\Task;

              class TasksController extends Controller
              {
\t            protected \$tasksRepository;
\t            
                public function __construct(TaskRepository \$tasks)
                {
                  \$this->tasksRepository = \$tasksRepository;
                }

              ?&gt;
            </code>
          </pre>
        </li>

        <li>
\t\t  In the same Controller (TasksController)
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      ...
\t\t      public function index(Request \$request)
\t\t      {
\t\t                 // an example of a simple bussiness logic: \"Get me all tasks for this user\"
\t\t        \$tasks = \$this->tasksRepository->forUser(\$request->user());
\t\t        
\t\t        return view('tasks.index', compact('tasks'));
\t\t      }
\t\t    </code>
\t\t  </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/repositoryPattern.htm", "");
    }
}