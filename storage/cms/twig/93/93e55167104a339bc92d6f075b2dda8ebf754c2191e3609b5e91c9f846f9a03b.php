<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/facades.htm */
class __TwigTemplate_aeb27bf02659d696f057cfb695ad570f6a5ebf4585968e4ac9207958d5e98001 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Facades </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides a <code>static</code> interface to classes that are available in the application's <code>service container</code>.
      Laravel <code>facades</code> serves as <code>static proxies</code> to underlying classes in the <code>service container</code>, 
      providing the benefit of a terse, expressive syntax.
      
      In the context of a Laravel Application, a facade is a class that provides access to an object from the <code>container</code>.
      The machinery that makes this work is in the <code>Facade class</code>.  Laravel's facades, and any custom facades you create, will extend
      the base <code>Illuminate\\Support\\Facades\\Facade</code> class.
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
      When you need static proxies to underlying classes in the <code>Service Container</code>.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          <pre>
            <code>
              &lt;?php

              namespace App\\Http\\Controllers;
              use Cache; // this here is the Cache Facade that ships with Laravel 5.2
              use App\\Http\\Controllers\\Controller;

              class UserController extends Controller
              {
                public function showProfile(\$id)
                {
                  \$user = Cache::get('user:' . \$id);

                  return view('profile', ['user' => \$user]);
                }
              }
              
              Cache facade refers or proxies for the underlying Cache System of Laravel 5.2
              For its Class Reference it is <strong>RootProejctDirectory\\vendor\\laravel\\framework\\src\\Illuminate\\Cache\\Repository.php</strong>
              Refer to https://laravel.com/docs/5.2/facades
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
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/facades.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Facades </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides a <code>static</code> interface to classes that are available in the application's <code>service container</code>.
      Laravel <code>facades</code> serves as <code>static proxies</code> to underlying classes in the <code>service container</code>, 
      providing the benefit of a terse, expressive syntax.
      
      In the context of a Laravel Application, a facade is a class that provides access to an object from the <code>container</code>.
      The machinery that makes this work is in the <code>Facade class</code>.  Laravel's facades, and any custom facades you create, will extend
      the base <code>Illuminate\\Support\\Facades\\Facade</code> class.
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
      When you need static proxies to underlying classes in the <code>Service Container</code>.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          <pre>
            <code>
              &lt;?php

              namespace App\\Http\\Controllers;
              use Cache; // this here is the Cache Facade that ships with Laravel 5.2
              use App\\Http\\Controllers\\Controller;

              class UserController extends Controller
              {
                public function showProfile(\$id)
                {
                  \$user = Cache::get('user:' . \$id);

                  return view('profile', ['user' => \$user]);
                }
              }
              
              Cache facade refers or proxies for the underlying Cache System of Laravel 5.2
              For its Class Reference it is <strong>RootProejctDirectory\\vendor\\laravel\\framework\\src\\Illuminate\\Cache\\Repository.php</strong>
              Refer to https://laravel.com/docs/5.2/facades
            </code>
          </pre>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/facades.htm", "");
    }
}
