<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/eloquentRelationships.htm */
class __TwigTemplate_c4926b244c77a03573ee78b5f0172a3c9e34d43f9637234ab6393a72afcd6cba extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"> Eloquent Relationships </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Links model in accordance to RDBMS science/rules such as BelongsTo, HasOne, HasMany.  Allows you to walk through/retrieve a model's relationship to other models.  
      Eloquent makes managing and working with these relationships easy.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      I won't be discussing each detail of Eloquent Relationships becasuse a particular set of patterns can already be observed, such as: migrations, declaring relationships, retrieval, etc..
      More details are available at <a href=\"https://laravel.com/docs/5.2/eloquent-relationships\">https://laravel.com/docs/5.2/eloquent-relationships<a>
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want to establish a relationship between Models.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Based on experience, tables in MySQL needs to enforce refferencial integrity constraints, therefore InnoDB engine needs to be used in all tables that will need to establish 
          relationships with each other.
        </li>

        <li>
          In the migrations directory, <code>ProjectRootDirectory/database/migrations/2017_02_17_043744_create_tasks_table.php</code>
          <pre>
            <code>
              &lt;?php
              use Illuminate\\Database\\Schema\\Blueprint;
              use Illuminate\\Database\\Migrations\\Migration;
              
              class CreateTasksTable extends Migration
              {
                //Run the migration
                public function up()
                {
                  Schema::create('tasks',
                                 function(Blueprint \$table)
                                 {
                                     \$table->increments('id');
                                     \$table->integer('user_id')->index()->unsigned();
                                     \$table->string('name');
                                     \$table->timestamps();
                                     \$table->foreign('user_id')->references('id')
                                                               ->on('users')
                                                               ->onDelete('cascade');
                                 }
                                );
                }
                
                //Reverse the migration
                public function down()
                {
                  Schema::drop('tasks');
                }
              }
              ?&gt;
            </code>
          </pre>
        </li>

        <li>
          Run the migration, in the project root directory terminal, run <span class=\"icon-terminal\"></span> <code>php artisan migrate</code>
        </li>

        <li>
\t\t  In the User model (projectRootDirectory/app/User.php):
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      &lt;?php
\t\t      namespace App;
\t\t      
\t\t      use Illuminate\\Auth\\Authenticatable;
\t\t      use Illuminate\\Auth\\Passwords\\CanResetPassword;
\t\t      use Illuminate\\Database\\Eloquent\\Model;
\t\t      use Illuminate\\Foundation\\Auth\\Acccess\\Authorizable;
\t\t      use Illuminate\\Contracts\\Auth\\Authenticatable as AuthenticatableContract;
\t\t      use Illuminate\\Contracts\\Auth\\Access\\Authorizable as AuthorizableContract;
\t\t      use Illuminate\\Contracts\\Auth\\CanResetPassword as CanResetPasswordContract;
\t\t      use App\\Task;
\t\t      
\t\t      class User extends Model implements AuthenticatableContract,
\t\t                                          AuthorizableContract,
\t\t                                          CanResetPasswordContract
\t\t      {
\t\t        use Authenticatable, Authorizable, CanResetPassword;
\t\t        
\t\t        public function tasks()
\t\t        {
\t\t          return \$this->hasMany(Task::class);
\t\t        }
\t\t      }

\t\t      ?&gt;
\t\t    </code>
\t\t  </pre>
        </li>
        
        <li>
          To use the relationship or retrieve data by the given relationship:
          A similar logic will be done in places like the controller, in my case, I tested this out inside Tinker, for quick testing purposes, no need to hit the browser and inspect.
          In the root project directory run <span class=\"icon-terminal\"></span>: <code>php artisan tinker</code>
          Once inside, I did the following:
          <pre>
            <code>
              use App\\User;
              use App\\Task;

              \$user = User::where('id', '=', 1)->first();
              \$user->tasks->all(); // the array of tasks that the user owns.
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/eloquentRelationships.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"> Eloquent Relationships </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Links model in accordance to RDBMS science/rules such as BelongsTo, HasOne, HasMany.  Allows you to walk through/retrieve a model's relationship to other models.  
      Eloquent makes managing and working with these relationships easy.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      I won't be discussing each detail of Eloquent Relationships becasuse a particular set of patterns can already be observed, such as: migrations, declaring relationships, retrieval, etc..
      More details are available at <a href=\"https://laravel.com/docs/5.2/eloquent-relationships\">https://laravel.com/docs/5.2/eloquent-relationships<a>
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you want to establish a relationship between Models.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Based on experience, tables in MySQL needs to enforce refferencial integrity constraints, therefore InnoDB engine needs to be used in all tables that will need to establish 
          relationships with each other.
        </li>

        <li>
          In the migrations directory, <code>ProjectRootDirectory/database/migrations/2017_02_17_043744_create_tasks_table.php</code>
          <pre>
            <code>
              &lt;?php
              use Illuminate\\Database\\Schema\\Blueprint;
              use Illuminate\\Database\\Migrations\\Migration;
              
              class CreateTasksTable extends Migration
              {
                //Run the migration
                public function up()
                {
                  Schema::create('tasks',
                                 function(Blueprint \$table)
                                 {
                                     \$table->increments('id');
                                     \$table->integer('user_id')->index()->unsigned();
                                     \$table->string('name');
                                     \$table->timestamps();
                                     \$table->foreign('user_id')->references('id')
                                                               ->on('users')
                                                               ->onDelete('cascade');
                                 }
                                );
                }
                
                //Reverse the migration
                public function down()
                {
                  Schema::drop('tasks');
                }
              }
              ?&gt;
            </code>
          </pre>
        </li>

        <li>
          Run the migration, in the project root directory terminal, run <span class=\"icon-terminal\"></span> <code>php artisan migrate</code>
        </li>

        <li>
\t\t  In the User model (projectRootDirectory/app/User.php):
\t\t  
\t\t  <pre>
\t\t    <code>
\t\t      &lt;?php
\t\t      namespace App;
\t\t      
\t\t      use Illuminate\\Auth\\Authenticatable;
\t\t      use Illuminate\\Auth\\Passwords\\CanResetPassword;
\t\t      use Illuminate\\Database\\Eloquent\\Model;
\t\t      use Illuminate\\Foundation\\Auth\\Acccess\\Authorizable;
\t\t      use Illuminate\\Contracts\\Auth\\Authenticatable as AuthenticatableContract;
\t\t      use Illuminate\\Contracts\\Auth\\Access\\Authorizable as AuthorizableContract;
\t\t      use Illuminate\\Contracts\\Auth\\CanResetPassword as CanResetPasswordContract;
\t\t      use App\\Task;
\t\t      
\t\t      class User extends Model implements AuthenticatableContract,
\t\t                                          AuthorizableContract,
\t\t                                          CanResetPasswordContract
\t\t      {
\t\t        use Authenticatable, Authorizable, CanResetPassword;
\t\t        
\t\t        public function tasks()
\t\t        {
\t\t          return \$this->hasMany(Task::class);
\t\t        }
\t\t      }

\t\t      ?&gt;
\t\t    </code>
\t\t  </pre>
        </li>
        
        <li>
          To use the relationship or retrieve data by the given relationship:
          A similar logic will be done in places like the controller, in my case, I tested this out inside Tinker, for quick testing purposes, no need to hit the browser and inspect.
          In the root project directory run <span class=\"icon-terminal\"></span>: <code>php artisan tinker</code>
          Once inside, I did the following:
          <pre>
            <code>
              use App\\User;
              use App\\Task;

              \$user = User::where('id', '=', 1)->first();
              \$user->tasks->all(); // the array of tasks that the user owns.
            </code>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/eloquentRelationships.htm", "");
    }
}
