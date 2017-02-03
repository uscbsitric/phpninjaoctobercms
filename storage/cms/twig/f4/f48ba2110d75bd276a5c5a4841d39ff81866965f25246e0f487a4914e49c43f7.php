<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/middlewares.htm */
class __TwigTemplate_00401dafcffdb973df01fa3759a6c97f8579bc3ddc047ba56f32bdb287908762 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Middlewares </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides a convenient mechanism for filtering HTTP requests entering your application.  For example, Laravel 5.2 includes a middleware that verifies the user of your application is authenticated(the \"auth\" middleware located in RootProjectDirectory/app/Http/Kernel.php by default, as the following code suggests:).
      <pre>
        <code>
        &lt;?php

        namespace App\\Http\\Middleware;
        
        use Closure;
        use Illuminate\\Support\\Facades\\Auth;
        
        class Authenticate
        {
            /**
             * Handle an incoming request.
             *
             * @param  \\Illuminate\\Http\\Request  \$request
             * @param  \\Closure  \$next
             * @param  string|null  \$guard
             * @return mixed
             */
            public function handle(\$request, Closure \$next, \$guard = null)
            {
                if (Auth::guard(\$guard)->guest())
                {
                    if (\$request->ajax() || \$request->wantsJson())
                    {
                        return response('Unauthorized.', 401);
                    }
                    else
                    {
                        return redirect()->guest('auth/login');
                    }
                }

                return \$next(\$request);
            }
        }
        </code>
      </pre>
      If the user is not authenticated, the middleware will redirect the user to the login screen.  However, if the user is authenticated, the middleware will allow the request to proceed further 
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
      When you want to filter HTTP requests entering your application.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In the Root Project Directory, in the terminal, run: <span class=\"icon-terminal\"></span> <code>php artisan make:middleware authJWT</code>.
          It will generate a file RedirectIfNotManager.php located in RootProjectDirectory/app/Http/Middleware/authJWT.php

          <pre>
            <code>
              &lt;?php
              namespace App\\Http\\Middleware;

             use Closure;
             use JWTAuth;
             use Exception;
             class authJWT
             {
               public function handle(\$request, Closure \$next)
               {
                 try
                 {
        \t       // Find a user using the user identifier in the subject claim.
                   \$user = JWTAuth::toUser(\$request->input('token'));
                 }
                 catch (Exception \$e)
                 {
                   if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenInvalidException)
                   {
                     return response()->json(['error'=>'Token is Invalid: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 1
                                             ]
                                            );
                   }
                   else if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenExpiredException)
                   {
                     return response()->json(['error'=>'Token is Expired: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 2
                                             ]
                                            );
                   }
                   else if(\$e instanceof Tymon\\JWTAuth\\Exceptions\\JWTException)
                   {
            \t     return response()->json(['error' => 'Token Absent: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 3
                                             ]
                                            );
                   }
                   else
                   {
                     return response()->json(['error'=>'Something is wrong: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 4
                                             ]
                                            );
                   }
                 }

                 return \$next(\$request);
               }
              }
              ?&gt;
            </code>
          </pre>
        </li>

        <li>
          <code>Add</code> your Middleware to the <code>RootProjectDirectory/app/Http/Kernel.php</code> -> <code>protected \$routeMiddleware = [...]</code>. Example:
          <pre>
            <code>
              ...
              protected \$routeMIddleware = ['jwt-auth'   => \\App\\Http\\Middleware\\authJWT::class,];
            </code>
          </pre>
        </li>

        <li>
          In <code>rootProjectDirectory/app/Http/routes.php</code>
          <pre>
            <code>
            // API Token Test
            Route::group(['as' => 'apitokentestgroup::',
                          'middleware' => ['api', 'cors'],
                          'prefix' => 'api',
                         ],
                         function()
                         {
                           Route::post('register', 'ApitokentestController@register');
                           Route::post('login', 'ApitokentestController@login');
                           Route::group(['middleware' => 'jwt-auth'],
                                        function()
                                        {
                                          Route::post('get_user_details', 'ApitokentestController@get_user_details');
                                          Route::resource('apitokentest', 'ApitokentestController');
                                        }
                                       );
                         }
                        );
            </code>
          </pre>
        </li>

        <li>
\t\t  In this particular case, I am developing an API, so things are accessed via <code>HTTP verbs</code>(GET, POST, etc...) towards my API.  So, for brevity, this route/line of code: <code>Route::resource('apitokentest', 'ApitokentestController');</code>,
\t\t  produces the following routes when running <code>php artisan route:list</code> :
\t\t  
\t\t  <pre>
            GET|HEAD  | api/apitokentest  <---- target route
            POST      | api/apitokentest
            GET|HEAD  | api/apitokentest/create
            GET|HEAD  | api/apitokentest/{apitokentest}
            PUT|PATCH | api/apitokentest/{apitokentest}
            DELETE    | api/apitokentest/{apitokentest}
            GET|HEAD  | api/apitokentest/{apitokentest}/edit | apitokentestgroup::api.apitokentest.edit
\t\t  </pre>
\t\t  
\t\t  So, in Insomnia, I made a GET request to <code>http://startingpoint/api/apitokentest</code> with the following payload: 
\t\t  <pre>
\t\t    <code>
              {\"token\" : \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3N0YXJ0aW5ncG
                          9pbnRcL2FwaVwvbG9naW4iLCJpYXQiOjE0ODQxMjEyNDEsImV4cCI6MTQ4NDEyNDg0MSwibmJmIjoxNDg0M
                          TIxMjQxLCJqdGkiOiI3MDAzZTI4YmQ3NDFlZGVmODJkY2ZiODZhZmQ2OWYyOSJ9.eEW_JjEZU_H-0T_-lAc
                          0TTjJlGJuu8AnUcpJXpB_LXY\", <strong>//note: this token is a result of the previous JWT based login</strong>
               \"data1\" : \"data1\",
               \"data2\" : \"data2\",
               \"data3\" : \"data3\",
               \"data4\" : \"data4\"
              }
            </code>
          </pre>
          
          Giving me this response:
          <pre>
            <code>
              {
                \"error\": \"Token is Expired: from /app/Http/Middleware/authJWT.php\",
                \"errorCode\": 2
              }
            </code>
          </pre>
          So, the middleware is working, making filterings to each <code>HTTP request</code>, in this case, the middleware according to its logic is giving me a TokenExpiredException.
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/middlewares.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> Middlewares </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Provides a convenient mechanism for filtering HTTP requests entering your application.  For example, Laravel 5.2 includes a middleware that verifies the user of your application is authenticated(the \"auth\" middleware located in RootProjectDirectory/app/Http/Kernel.php by default, as the following code suggests:).
      <pre>
        <code>
        &lt;?php

        namespace App\\Http\\Middleware;
        
        use Closure;
        use Illuminate\\Support\\Facades\\Auth;
        
        class Authenticate
        {
            /**
             * Handle an incoming request.
             *
             * @param  \\Illuminate\\Http\\Request  \$request
             * @param  \\Closure  \$next
             * @param  string|null  \$guard
             * @return mixed
             */
            public function handle(\$request, Closure \$next, \$guard = null)
            {
                if (Auth::guard(\$guard)->guest())
                {
                    if (\$request->ajax() || \$request->wantsJson())
                    {
                        return response('Unauthorized.', 401);
                    }
                    else
                    {
                        return redirect()->guest('auth/login');
                    }
                }

                return \$next(\$request);
            }
        }
        </code>
      </pre>
      If the user is not authenticated, the middleware will redirect the user to the login screen.  However, if the user is authenticated, the middleware will allow the request to proceed further 
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
      When you want to filter HTTP requests entering your application.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          In the Root Project Directory, in the terminal, run: <span class=\"icon-terminal\"></span> <code>php artisan make:middleware authJWT</code>.
          It will generate a file RedirectIfNotManager.php located in RootProjectDirectory/app/Http/Middleware/authJWT.php

          <pre>
            <code>
              &lt;?php
              namespace App\\Http\\Middleware;

             use Closure;
             use JWTAuth;
             use Exception;
             class authJWT
             {
               public function handle(\$request, Closure \$next)
               {
                 try
                 {
        \t       // Find a user using the user identifier in the subject claim.
                   \$user = JWTAuth::toUser(\$request->input('token'));
                 }
                 catch (Exception \$e)
                 {
                   if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenInvalidException)
                   {
                     return response()->json(['error'=>'Token is Invalid: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 1
                                             ]
                                            );
                   }
                   else if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenExpiredException)
                   {
                     return response()->json(['error'=>'Token is Expired: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 2
                                             ]
                                            );
                   }
                   else if(\$e instanceof Tymon\\JWTAuth\\Exceptions\\JWTException)
                   {
            \t     return response()->json(['error' => 'Token Absent: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 3
                                             ]
                                            );
                   }
                   else
                   {
                     return response()->json(['error'=>'Something is wrong: from /app/Http/Middleware/authJWT.php',
                                              'errorCode' => 4
                                             ]
                                            );
                   }
                 }

                 return \$next(\$request);
               }
              }
              ?&gt;
            </code>
          </pre>
        </li>

        <li>
          <code>Add</code> your Middleware to the <code>RootProjectDirectory/app/Http/Kernel.php</code> -> <code>protected \$routeMiddleware = [...]</code>. Example:
          <pre>
            <code>
              ...
              protected \$routeMIddleware = ['jwt-auth'   => \\App\\Http\\Middleware\\authJWT::class,];
            </code>
          </pre>
        </li>

        <li>
          In <code>rootProjectDirectory/app/Http/routes.php</code>
          <pre>
            <code>
            // API Token Test
            Route::group(['as' => 'apitokentestgroup::',
                          'middleware' => ['api', 'cors'],
                          'prefix' => 'api',
                         ],
                         function()
                         {
                           Route::post('register', 'ApitokentestController@register');
                           Route::post('login', 'ApitokentestController@login');
                           Route::group(['middleware' => 'jwt-auth'],
                                        function()
                                        {
                                          Route::post('get_user_details', 'ApitokentestController@get_user_details');
                                          Route::resource('apitokentest', 'ApitokentestController');
                                        }
                                       );
                         }
                        );
            </code>
          </pre>
        </li>

        <li>
\t\t  In this particular case, I am developing an API, so things are accessed via <code>HTTP verbs</code>(GET, POST, etc...) towards my API.  So, for brevity, this route/line of code: <code>Route::resource('apitokentest', 'ApitokentestController');</code>,
\t\t  produces the following routes when running <code>php artisan route:list</code> :
\t\t  
\t\t  <pre>
            GET|HEAD  | api/apitokentest  <---- target route
            POST      | api/apitokentest
            GET|HEAD  | api/apitokentest/create
            GET|HEAD  | api/apitokentest/{apitokentest}
            PUT|PATCH | api/apitokentest/{apitokentest}
            DELETE    | api/apitokentest/{apitokentest}
            GET|HEAD  | api/apitokentest/{apitokentest}/edit | apitokentestgroup::api.apitokentest.edit
\t\t  </pre>
\t\t  
\t\t  So, in Insomnia, I made a GET request to <code>http://startingpoint/api/apitokentest</code> with the following payload: 
\t\t  <pre>
\t\t    <code>
              {\"token\" : \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3N0YXJ0aW5ncG
                          9pbnRcL2FwaVwvbG9naW4iLCJpYXQiOjE0ODQxMjEyNDEsImV4cCI6MTQ4NDEyNDg0MSwibmJmIjoxNDg0M
                          TIxMjQxLCJqdGkiOiI3MDAzZTI4YmQ3NDFlZGVmODJkY2ZiODZhZmQ2OWYyOSJ9.eEW_JjEZU_H-0T_-lAc
                          0TTjJlGJuu8AnUcpJXpB_LXY\", <strong>//note: this token is a result of the previous JWT based login</strong>
               \"data1\" : \"data1\",
               \"data2\" : \"data2\",
               \"data3\" : \"data3\",
               \"data4\" : \"data4\"
              }
            </code>
          </pre>
          
          Giving me this response:
          <pre>
            <code>
              {
                \"error\": \"Token is Expired: from /app/Http/Middleware/authJWT.php\",
                \"errorCode\": 2
              }
            </code>
          </pre>
          So, the middleware is working, making filterings to each <code>HTTP request</code>, in this case, the middleware according to its logic is giving me a TokenExpiredException.
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/middlewares.htm", "");
    }
}
