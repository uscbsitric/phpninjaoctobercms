<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/routing.htm */
class __TwigTemplate_d3d2ddc06eb0f13db14d87b2dacd919922f94381ad815f52fec5aa10aff77313 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Routing </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Routes are used to point URLs to controllers (controller actions) or anonymouse functions that should be executed when a user accesses a given page.
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
      When you want a piece of logic run, when a particular URL is accessed. Usually when you want to provide a sort of handler when a consumer requests
      (GET, POST, DELETE, PATCH) something in your laravel 5.2 application
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          By default in ProjectRootDirectory/app/Http/routes.php
          <pre>
            <code>
            &lt;?php
            use Illumniate\\Http\\Request;

            Route::get('/', function()
                            {
                              //.... code here
                            }
                      );
                      
            Route::post('/task', function()
                                 {
                                   //.... code here
                                 }
                       );
            ?&gt;
            </code>
          </pre>
        </li>
        
        <li>
          Then, for GET requests for example, access it in browser for example:  <code>http://projectName/</code>
          For POST, I just tested it using INSOMNIA application, an alternative to Advance Rest Client, make a post requst to <code>http://projectName/task</code>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/routing.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Routing </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Routes are used to point URLs to controllers (controller actions) or anonymouse functions that should be executed when a user accesses a given page.
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
      When you want a piece of logic run, when a particular URL is accessed. Usually when you want to provide a sort of handler when a consumer requests
      (GET, POST, DELETE, PATCH) something in your laravel 5.2 application
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          By default in ProjectRootDirectory/app/Http/routes.php
          <pre>
            <code>
            &lt;?php
            use Illumniate\\Http\\Request;

            Route::get('/', function()
                            {
                              //.... code here
                            }
                      );
                      
            Route::post('/task', function()
                                 {
                                   //.... code here
                                 }
                       );
            ?&gt;
            </code>
          </pre>
        </li>
        
        <li>
          Then, for GET requests for example, access it in browser for example:  <code>http://projectName/</code>
          For POST, I just tested it using INSOMNIA application, an alternative to Advance Rest Client, make a post requst to <code>http://projectName/task</code>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/routing.htm", "");
    }
}
