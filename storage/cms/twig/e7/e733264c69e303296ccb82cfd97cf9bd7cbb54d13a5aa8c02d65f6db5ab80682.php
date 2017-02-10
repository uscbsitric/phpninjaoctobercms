<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/jwt.htm */
class __TwigTemplate_6067af34e19e6bee6b8b2115082537a752f3f487ed56f8438377229a8f56762e extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> JWT(Jason Web Token) based Authentication in Laravel 5.2 </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      A token based authentication using Jason Web Token.  Each subsequent request will require a token for it to be honored in the backend.  
      This is for routes, services and resources that requires permit by way of a particular token.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      The name of my project is startingpoint
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need a token based API with added security.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- What is JSON Web Token -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Is JSON Web Token</h1>
    <p class=\"fontColorWhite2 noMargin\">
      JSON Web Token (JWT) is an open source standard(RFC 7519), that defines a compact and self-contained way for securely transmitting information between parties as a JSON object.
      This information can be verified and trusted because it is digitally signed by the server.  More info at https://jwt.io/introduction/
    </p>
  </div>
</div>            <!-- What is JSON Web Token -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Create Routes:
          
          <pre>
            in RootProjectDirectory\\app\\Http\\routes.php
            <code>
            &lt;php

            use App\\Task;
            use Illuminate\\Http\\Request;

            // API Token Test
            Route::group(['as' => 'apitokentestgroup::',
                          'middleware' => ['api', 'cors'],
                          'prefix' => 'api',
                         ],
                         function()
                         &#123;
                           Route::post('register', 'ApitokentestController@register');
                           Route::post('login', 'ApitokentestController@login');
                           Route::group(['middleware' => 'jwt-auth'],
                                        function()
                                        &#123;
                                          Route::post('get_user_details', 'ApitokentestController@get_user_details');
                                          Route::resource('apitokentest', 'ApitokentestController');
                                        &#125;
                                       );
                         &#125;
                       );
            </code>
          </pre>
        </li>

        <li>
          Create a Controller:
          
          <pre>
            <code>
              &lt;php

                namespace App\\Http\\Controllers;

                use Illuminate\\Http\\Request;
                use App\\User;
                use Hash;
                use JWTAuth;
                use App\\Role;
                use App\\Permission;

                class ApitokentestController extends Controller
                &#123;
\t              public function index( Request \$request )
\t              &#123;
\t\t            \$input = \$request->all();
\t\t            \$user = JWTAuth::toUser(\$input['token']);
\t\t
\t\t            if(\$user->can('can-do-everything'))
\t\t            &#123;
\t\t\t          return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController',
                                               'data1' => \$input['data1'],
                                               'data2' => \$input['data2'],
                                               'data3' => \$input['data3'],
                                               'data4' => \$input['data4'],
                                              ]);
                    &#125;

                    return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController, ACCCESS DENIED',]);
\t              &#125;

\t              public function store()
\t              &#123;
                    return response()->json(['result' => 'This is the result from the STORE function of the ApitokentestController']);
                  &#125;

\t              public function create()
                  &#123;
                    return response()->json(['result' => 'This is the result from the CREATE function of the ApitokentestController']);
                  &#125;

                  public function show()
                  &#123;
                    return response()->json(['result' => 'This is the result from the SHOW function of the ApitokentestController']);
                  &#125;

                  public function update()
                  &#123;
                    return response()->json(['result' => 'This is the result from the UPDATE function of the ApitokentestController']);
                  &#125;

                  public function destroy()
                  &#123;
                    return response()->json(['result' => 'This is the result from the DESTROY function of the ApitokentestController']);
                  &#124;

                  public function edit()
                  &#123;
                    return response()->json(['result' => 'This is the result from the EDIT function of the ApitokentestController']);
                  &#125;

                  public function get_user_details()
                  &#123;
                    \$input = \$request->all();
                    \$user = JWTAuth::toUser(\$input['token']);
                    return response()->json(['result' => \$user]);

                    //return response()->json(['result' => 'This is the result from the get_user_details function of the ApitokentestController']);
                  &#125;

                  public function register(Request \$request)
                  &#123;
                    \$input = \$request->all();
                    \$input['password'] = Hash::make(\$input['password']);
                    \$input['role'] = 2; // default role code

                    \$result = User::create(\$input);

                    // assign a role and permission set to the newly created user

                    // assign a role and permission set to the newly created user

                    return response()->json(['result'=>true]);
\t              &#125;

                  public function login(Request \$request)
                  &#123;
                    \$input = \$request->all();

                    if (!\$token = JWTAuth::attempt(\$input))
                    &#123;
                      return response()->json(['result' => 'wrong email or password.']);
                    &#125;

                    return response()->json(['result' => \$token]);
                  &#125;

                &#125;
            </code>
          </pre>
        </li>

        <li>
          JWT Installation <br>

          In the <code>RootProjectDirectory</code>, run <span class=\"icon-terminal\"></span>: <code>composer require tymon/jwt-auth</code>
        </li>

        <li>
\t\t  Add the JWT service provider and alias to app.php, and publish the JWT configuration file.  
\t\t  
\t\t  <pre>
\t\t    In RootProjectDirectory\\config\\app.php
\t\t    <code>
              //...
              'providers' =&gt; [ //...
                                  /*
                                  * Custom Providers
                                   */
                                  'Tymon\\JWTAuth\\Providers\\JWTAuthServiceProvider', &lt;--- the JWT service provider
                                ];

              //...

              'aliases' =&gt; [ //...
                                'JWTAuth' => 'Tymon\\JWTAuth\\Facades\\JWTAuth', &lt;--- the JWT alias
                              ];
\t\t    </code>

            Then to <strong>publish</strong> the JWT configuration file, in the RootProjectDirectory in the terminal, 
            run <span class=\"icon-terminal\"></span>: <strong>php artisan vendor:publish --provider = \"Tymon\\JWTAuth\\Providers\\JWTAuthServiceProvider\"</strong>
\t\t  </pre>
        </li>

        <li>
          Generate the JWT Key
          <pre>
            In the terminal while in the project root directory,
            run <span class=\"icon-terminal\"></span>: <strong>php artisan jwt:generate</strong>
            it will update the value of the <strong>secret</strong> index of the jwt.php return array.
          </pre>
        </li>

        <li>
          Create the <code>CORS middleware</code>
\t\t  <pre>
\t\t    <code>
\t\t    This solves the issue of <strong>Cross-Origin Request Blocked: The Same Origin Polciy</strong>

\t\t    in the terminal in the Root Project Directory, run <span class=\"icon-terminal\"></span>: php artisan make:middleware CORS
\t\t    it will generate the file, <strong>RootProjectDirectory/app/Http/Middleware/CORS.php</strong>
\t\t    edit it to have the following code:
\t\t    
            &lt;?php

            namespace App\\Http\\Middleware;

            use Closure;

            class CORS
            &#123;
              /**
               * Handle an incoming request.
               *
               * @param  \\Illuminate\\Http\\Request  \$request
               * @param  \\Closure  \$next
               * @return mixed
              */
              public function handle(\$request, Closure \$next)
              &#123;
    \t        header('Access-Control-Allow-Origin: *');

    \t        \$headers = ['Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
                            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
                           ];

    \t        if(\$request->getMethod() == \"OPTIONS\")
    \t        &#123;
    \t          return Response::make('OK', 200, \$headers);
    \t        &#125;

    \t        \$response = \$next(\$request);

    \t        foreach(\$headers as \$key => \$value)
    \t          \$response->header(\$key, \$value);

    \t        return \$response;
             &#125;
            &#125;
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Register the <code>CORS Middleware</code>
\t\t  <pre>
\t\t    <code>
\t\t    in <strong>ProjectRootDirectory\\app\\Http\\Kernel.php</strong> file, append the following line.

\t\t    class Kernel extends HttpKernel
\t\t    &#123;
                      //...
                      //...
                      protected \$routeMiddleware = ['cors' => \\App\\Http\\Middleware\\CORS::class];
\t\t    &#125;
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Create <code>API Routes</code>
\t\t  <pre>
\t\t    for RootProjectDirectory/app/Http/routes.php, refer to Step 1 (it is the complete code listing already)
\t\t    for RootProjectDirectory/app/Http/Controllers/ApitokentestController.php, refer to Step 1 (it is the complete controler code already)
\t\t  </pre>
        </li>

        <li>
          Create the <code>authJWT middleware</code>
\t\t  <pre>
\t\t    in the Root Project Directory, in the terminal, run <span class=\"icon-terminal\"></span>: <strong>php artisan make:middleware authJWT</strong>
\t\t    it will generate the file <strong>RootProjectDirectory\\app\\Http\\Middleware\\authJWT.php</strong>

\t\t    <code>
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
        \t        // Find a user using the user identifier in the subject claim.
                    \$user = JWTAuth::toUser(\$request->input('token'));
                  }
                  catch (Exception \$e)
                  {
                    if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenInvalidException)
                    {
                      return response()->json(['error'=>'Token is Invalid: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 1
                                              ]);
                    }
                    else if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenExpiredException)
                    {
                      return response()->json(['error'=>'Token is Expired: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 2
                                              ]);
                    }
                    else if(\$e instanceof Tymon\\JWTAuth\\Exceptions\\JWTException)
                    {
            \t      return response()->json(['error' => 'Token Absent: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 3
                                              ]);
                    }
                    else
                    {
                      return response()->json(['error'=>'Something is wrong: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 4
                                              ]);
                    }
                  }

                  return \$next(\$request);
                }
              }
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Register the <code>authJWT middleware</code>
\t\t  <pre>
            in the RootProjectDirectory\\app\\Http\\Kernel.php
\t\t    <code>
              //...
              protected \$routeMiddleware = [ //...
                                             'jwt-auth' => \\App\\Http\\Middleware\\authJWT::class,
                                             //...
                                           ];
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Update the <code>ApitokentestController</code>, add the register, login and get_user_details
        </li>

        <li>
          Commented out the VerifyCSRF token middleware
\t\t  <pre>
\t\t  Included in the web middleware group is the VerifyCSRF token that is automatically applied to the default routes.php by the RouteServiceProvider.
\t\t  Since I am doing API-JWT based development, I wont have the need of CSRF tokens because this is being taken cared of by the JWT created by the server.
\t\t    <code>
            In RootProjectDirectory\\app\\Http\\Kernel.php

            // ...
            protected \$middlewareGroups = ['web' => [ \\App\\Http\\Middleware\\EncryptCookies::class,
                                                      \\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse::class,
                                                      \\Illuminate\\Session\\Middleware\\StartSession::class,
                                                      \\Illuminate\\View\\Middleware\\ShareErrorsFromSession::class,
                                                      /*
                                                      //\\App\\Http\\Middleware\\VerifyCsrfToken::class,
                                                      *
                                                      */
                                                    ],
                                                    'api' => ['throttle:60,1',],
                                         ];
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          In the terminal, in the RootProjectDirectory, run <span class=\"icon-terminal\"></span>: <code>composer dump-autoload</code>
\t\t  <pre>
          It will udpate the following files:
          RootProjectDirectory\\vendor\\composer\\autoload_classmap.php
          RootProjectDirectory\\vendor\\composer\\autoload_static.php
\t\t  </pre>
        </li>

        <li>
          Clear Compile and Optimize
\t\t  <pre>
\t\t  In the RootProjectDirectory, in the terminal, run <span class=\"icon-terminal\"></span>: 
\t\t  <strong>php artisan clear-compiled</strong>
\t\t  <strong>php artisan optimize</strong>

\t\t  it will update the following files:
\t\t  RootDirectory\\vendor\\composer\\autoload_classmap.php
\t\t  RootDirectory\\vendor\\composer\\autoload_static.php
\t\t  </pre>
        </li>
        
        <li>
          Now the testing part, In my case, I am using <code>Insomnia REST Client</code>
          <pre>
            <code>
            1. Make a POST request to http://startingpoint/api/login with the following payload:
               {\"email\" : \"user1@somewhere.com\",
                \"password\" : \"user1\"
               }
               
               which will give the following reply: (note: this is the JWT generated by the server, notice the three parts described in the JWT documentation)
               {
\t             \"result\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9
\t                        .eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3N0YXJ0aW5ncG9pbnRcL2FwaVwvbG9naW4iLCJpYXQiOjE0ODQxMjEyNDEsImV4cCI6MTQ4NDEyNDg0MSwibmJmIjoxNDg0MTIxMjQxLCJqdGkiOiI3MDAzZTI4YmQ3NDFlZGVmODJkY2ZiODZhZmQ2OWYyOSJ9
\t                        .eEW_JjEZU_H-0T_-lAc0TTjJlGJuu8AnUcpJXpB_LXY\"
               }

            2. Attempt to access any <strong>JWT-Auth</strong> protected route:
            
               In this case, a GET request to http://startingpoint/api/apitokentest with the following payload:
               {\"token\" : \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9
\t                       .eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3N0YXJ0aW5ncG9pbnRcL2FwaVwvbG9naW4iLCJpYXQiOjE0ODQxMjEyNDEsImV4cCI6MTQ4NDEyNDg0MSwibmJmIjoxNDg0MTIxMjQxLCJqdGkiOiI3MDAzZTI4YmQ3NDFlZGVmODJkY2ZiODZhZmQ2OWYyOSJ9
\t                       .eEW_JjEZU_H-0T_-lAc0TTjJlGJuu8AnUcpJXpB_LXY\",
                \"data1\" : \"data1\",
                \"data2\" : \"data2\",
                \"data3\" : \"data3\",
                \"data4\" : \"data4\"
               }
               
               which will give the following reply: (if token is valid)
               {
\t             \"result\": \"This is the result from the INDEX function of the ApitokentestController\",
\t             \"data1\": \"data1\",
\t             \"data2\": \"data2\",
\t             \"data3\": \"data3\",
\t             \"data4\": \"data4\"
               }
               
               if not, any of the configured responses in <strong>authJWT middleware</strong>.
            </code>
          </pre>
        </li
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/jwt.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> JWT(Jason Web Token) based Authentication in Laravel 5.2 </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      A token based authentication using Jason Web Token.  Each subsequent request will require a token for it to be honored in the backend.  
      This is for routes, services and resources that requires permit by way of a particular token.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      The name of my project is startingpoint
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need a token based API with added security.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- What is JSON Web Token -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Is JSON Web Token</h1>
    <p class=\"fontColorWhite2 noMargin\">
      JSON Web Token (JWT) is an open source standard(RFC 7519), that defines a compact and self-contained way for securely transmitting information between parties as a JSON object.
      This information can be verified and trusted because it is digitally signed by the server.  More info at https://jwt.io/introduction/
    </p>
  </div>
</div>            <!-- What is JSON Web Token -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Create Routes:
          
          <pre>
            in RootProjectDirectory\\app\\Http\\routes.php
            <code>
            &lt;php

            use App\\Task;
            use Illuminate\\Http\\Request;

            // API Token Test
            Route::group(['as' => 'apitokentestgroup::',
                          'middleware' => ['api', 'cors'],
                          'prefix' => 'api',
                         ],
                         function()
                         &#123;
                           Route::post('register', 'ApitokentestController@register');
                           Route::post('login', 'ApitokentestController@login');
                           Route::group(['middleware' => 'jwt-auth'],
                                        function()
                                        &#123;
                                          Route::post('get_user_details', 'ApitokentestController@get_user_details');
                                          Route::resource('apitokentest', 'ApitokentestController');
                                        &#125;
                                       );
                         &#125;
                       );
            </code>
          </pre>
        </li>

        <li>
          Create a Controller:
          
          <pre>
            <code>
              &lt;php

                namespace App\\Http\\Controllers;

                use Illuminate\\Http\\Request;
                use App\\User;
                use Hash;
                use JWTAuth;
                use App\\Role;
                use App\\Permission;

                class ApitokentestController extends Controller
                &#123;
\t              public function index( Request \$request )
\t              &#123;
\t\t            \$input = \$request->all();
\t\t            \$user = JWTAuth::toUser(\$input['token']);
\t\t
\t\t            if(\$user->can('can-do-everything'))
\t\t            &#123;
\t\t\t          return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController',
                                               'data1' => \$input['data1'],
                                               'data2' => \$input['data2'],
                                               'data3' => \$input['data3'],
                                               'data4' => \$input['data4'],
                                              ]);
                    &#125;

                    return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController, ACCCESS DENIED',]);
\t              &#125;

\t              public function store()
\t              &#123;
                    return response()->json(['result' => 'This is the result from the STORE function of the ApitokentestController']);
                  &#125;

\t              public function create()
                  &#123;
                    return response()->json(['result' => 'This is the result from the CREATE function of the ApitokentestController']);
                  &#125;

                  public function show()
                  &#123;
                    return response()->json(['result' => 'This is the result from the SHOW function of the ApitokentestController']);
                  &#125;

                  public function update()
                  &#123;
                    return response()->json(['result' => 'This is the result from the UPDATE function of the ApitokentestController']);
                  &#125;

                  public function destroy()
                  &#123;
                    return response()->json(['result' => 'This is the result from the DESTROY function of the ApitokentestController']);
                  &#124;

                  public function edit()
                  &#123;
                    return response()->json(['result' => 'This is the result from the EDIT function of the ApitokentestController']);
                  &#125;

                  public function get_user_details()
                  &#123;
                    \$input = \$request->all();
                    \$user = JWTAuth::toUser(\$input['token']);
                    return response()->json(['result' => \$user]);

                    //return response()->json(['result' => 'This is the result from the get_user_details function of the ApitokentestController']);
                  &#125;

                  public function register(Request \$request)
                  &#123;
                    \$input = \$request->all();
                    \$input['password'] = Hash::make(\$input['password']);
                    \$input['role'] = 2; // default role code

                    \$result = User::create(\$input);

                    // assign a role and permission set to the newly created user

                    // assign a role and permission set to the newly created user

                    return response()->json(['result'=>true]);
\t              &#125;

                  public function login(Request \$request)
                  &#123;
                    \$input = \$request->all();

                    if (!\$token = JWTAuth::attempt(\$input))
                    &#123;
                      return response()->json(['result' => 'wrong email or password.']);
                    &#125;

                    return response()->json(['result' => \$token]);
                  &#125;

                &#125;
            </code>
          </pre>
        </li>

        <li>
          JWT Installation <br>

          In the <code>RootProjectDirectory</code>, run <span class=\"icon-terminal\"></span>: <code>composer require tymon/jwt-auth</code>
        </li>

        <li>
\t\t  Add the JWT service provider and alias to app.php, and publish the JWT configuration file.  
\t\t  
\t\t  <pre>
\t\t    In RootProjectDirectory\\config\\app.php
\t\t    <code>
              //...
              'providers' =&gt; [ //...
                                  /*
                                  * Custom Providers
                                   */
                                  'Tymon\\JWTAuth\\Providers\\JWTAuthServiceProvider', &lt;--- the JWT service provider
                                ];

              //...

              'aliases' =&gt; [ //...
                                'JWTAuth' => 'Tymon\\JWTAuth\\Facades\\JWTAuth', &lt;--- the JWT alias
                              ];
\t\t    </code>

            Then to <strong>publish</strong> the JWT configuration file, in the RootProjectDirectory in the terminal, 
            run <span class=\"icon-terminal\"></span>: <strong>php artisan vendor:publish --provider = \"Tymon\\JWTAuth\\Providers\\JWTAuthServiceProvider\"</strong>
\t\t  </pre>
        </li>

        <li>
          Generate the JWT Key
          <pre>
            In the terminal while in the project root directory,
            run <span class=\"icon-terminal\"></span>: <strong>php artisan jwt:generate</strong>
            it will update the value of the <strong>secret</strong> index of the jwt.php return array.
          </pre>
        </li>

        <li>
          Create the <code>CORS middleware</code>
\t\t  <pre>
\t\t    <code>
\t\t    This solves the issue of <strong>Cross-Origin Request Blocked: The Same Origin Polciy</strong>

\t\t    in the terminal in the Root Project Directory, run <span class=\"icon-terminal\"></span>: php artisan make:middleware CORS
\t\t    it will generate the file, <strong>RootProjectDirectory/app/Http/Middleware/CORS.php</strong>
\t\t    edit it to have the following code:
\t\t    
            &lt;?php

            namespace App\\Http\\Middleware;

            use Closure;

            class CORS
            &#123;
              /**
               * Handle an incoming request.
               *
               * @param  \\Illuminate\\Http\\Request  \$request
               * @param  \\Closure  \$next
               * @return mixed
              */
              public function handle(\$request, Closure \$next)
              &#123;
    \t        header('Access-Control-Allow-Origin: *');

    \t        \$headers = ['Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
                            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
                           ];

    \t        if(\$request->getMethod() == \"OPTIONS\")
    \t        &#123;
    \t          return Response::make('OK', 200, \$headers);
    \t        &#125;

    \t        \$response = \$next(\$request);

    \t        foreach(\$headers as \$key => \$value)
    \t          \$response->header(\$key, \$value);

    \t        return \$response;
             &#125;
            &#125;
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Register the <code>CORS Middleware</code>
\t\t  <pre>
\t\t    <code>
\t\t    in <strong>ProjectRootDirectory\\app\\Http\\Kernel.php</strong> file, append the following line.

\t\t    class Kernel extends HttpKernel
\t\t    &#123;
                      //...
                      //...
                      protected \$routeMiddleware = ['cors' => \\App\\Http\\Middleware\\CORS::class];
\t\t    &#125;
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Create <code>API Routes</code>
\t\t  <pre>
\t\t    for RootProjectDirectory/app/Http/routes.php, refer to Step 1 (it is the complete code listing already)
\t\t    for RootProjectDirectory/app/Http/Controllers/ApitokentestController.php, refer to Step 1 (it is the complete controler code already)
\t\t  </pre>
        </li>

        <li>
          Create the <code>authJWT middleware</code>
\t\t  <pre>
\t\t    in the Root Project Directory, in the terminal, run <span class=\"icon-terminal\"></span>: <strong>php artisan make:middleware authJWT</strong>
\t\t    it will generate the file <strong>RootProjectDirectory\\app\\Http\\Middleware\\authJWT.php</strong>

\t\t    <code>
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
        \t        // Find a user using the user identifier in the subject claim.
                    \$user = JWTAuth::toUser(\$request->input('token'));
                  }
                  catch (Exception \$e)
                  {
                    if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenInvalidException)
                    {
                      return response()->json(['error'=>'Token is Invalid: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 1
                                              ]);
                    }
                    else if (\$e instanceof \\Tymon\\JWTAuth\\Exceptions\\TokenExpiredException)
                    {
                      return response()->json(['error'=>'Token is Expired: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 2
                                              ]);
                    }
                    else if(\$e instanceof Tymon\\JWTAuth\\Exceptions\\JWTException)
                    {
            \t      return response()->json(['error' => 'Token Absent: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 3
                                              ]);
                    }
                    else
                    {
                      return response()->json(['error'=>'Something is wrong: from /app/Http/Middleware/authJWT.php',
                                               'errorCode' => 4
                                              ]);
                    }
                  }

                  return \$next(\$request);
                }
              }
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Register the <code>authJWT middleware</code>
\t\t  <pre>
            in the RootProjectDirectory\\app\\Http\\Kernel.php
\t\t    <code>
              //...
              protected \$routeMiddleware = [ //...
                                             'jwt-auth' => \\App\\Http\\Middleware\\authJWT::class,
                                             //...
                                           ];
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          Update the <code>ApitokentestController</code>, add the register, login and get_user_details
        </li>

        <li>
          Commented out the VerifyCSRF token middleware
\t\t  <pre>
\t\t  Included in the web middleware group is the VerifyCSRF token that is automatically applied to the default routes.php by the RouteServiceProvider.
\t\t  Since I am doing API-JWT based development, I wont have the need of CSRF tokens because this is being taken cared of by the JWT created by the server.
\t\t    <code>
            In RootProjectDirectory\\app\\Http\\Kernel.php

            // ...
            protected \$middlewareGroups = ['web' => [ \\App\\Http\\Middleware\\EncryptCookies::class,
                                                      \\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse::class,
                                                      \\Illuminate\\Session\\Middleware\\StartSession::class,
                                                      \\Illuminate\\View\\Middleware\\ShareErrorsFromSession::class,
                                                      /*
                                                      //\\App\\Http\\Middleware\\VerifyCsrfToken::class,
                                                      *
                                                      */
                                                    ],
                                                    'api' => ['throttle:60,1',],
                                         ];
\t\t    </code>
\t\t  </pre>
        </li>

        <li>
          In the terminal, in the RootProjectDirectory, run <span class=\"icon-terminal\"></span>: <code>composer dump-autoload</code>
\t\t  <pre>
          It will udpate the following files:
          RootProjectDirectory\\vendor\\composer\\autoload_classmap.php
          RootProjectDirectory\\vendor\\composer\\autoload_static.php
\t\t  </pre>
        </li>

        <li>
          Clear Compile and Optimize
\t\t  <pre>
\t\t  In the RootProjectDirectory, in the terminal, run <span class=\"icon-terminal\"></span>: 
\t\t  <strong>php artisan clear-compiled</strong>
\t\t  <strong>php artisan optimize</strong>

\t\t  it will update the following files:
\t\t  RootDirectory\\vendor\\composer\\autoload_classmap.php
\t\t  RootDirectory\\vendor\\composer\\autoload_static.php
\t\t  </pre>
        </li>
        
        <li>
          Now the testing part, In my case, I am using <code>Insomnia REST Client</code>
          <pre>
            <code>
            1. Make a POST request to http://startingpoint/api/login with the following payload:
               {\"email\" : \"user1@somewhere.com\",
                \"password\" : \"user1\"
               }
               
               which will give the following reply: (note: this is the JWT generated by the server, notice the three parts described in the JWT documentation)
               {
\t             \"result\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9
\t                        .eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3N0YXJ0aW5ncG9pbnRcL2FwaVwvbG9naW4iLCJpYXQiOjE0ODQxMjEyNDEsImV4cCI6MTQ4NDEyNDg0MSwibmJmIjoxNDg0MTIxMjQxLCJqdGkiOiI3MDAzZTI4YmQ3NDFlZGVmODJkY2ZiODZhZmQ2OWYyOSJ9
\t                        .eEW_JjEZU_H-0T_-lAc0TTjJlGJuu8AnUcpJXpB_LXY\"
               }

            2. Attempt to access any <strong>JWT-Auth</strong> protected route:
            
               In this case, a GET request to http://startingpoint/api/apitokentest with the following payload:
               {\"token\" : \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9
\t                       .eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3N0YXJ0aW5ncG9pbnRcL2FwaVwvbG9naW4iLCJpYXQiOjE0ODQxMjEyNDEsImV4cCI6MTQ4NDEyNDg0MSwibmJmIjoxNDg0MTIxMjQxLCJqdGkiOiI3MDAzZTI4YmQ3NDFlZGVmODJkY2ZiODZhZmQ2OWYyOSJ9
\t                       .eEW_JjEZU_H-0T_-lAc0TTjJlGJuu8AnUcpJXpB_LXY\",
                \"data1\" : \"data1\",
                \"data2\" : \"data2\",
                \"data3\" : \"data3\",
                \"data4\" : \"data4\"
               }
               
               which will give the following reply: (if token is valid)
               {
\t             \"result\": \"This is the result from the INDEX function of the ApitokentestController\",
\t             \"data1\": \"data1\",
\t             \"data2\": \"data2\",
\t             \"data3\": \"data3\",
\t             \"data4\": \"data4\"
               }
               
               if not, any of the configured responses in <strong>authJWT middleware</strong>.
            </code>
          </pre>
        </li
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/jwt.htm", "");
    }
}
