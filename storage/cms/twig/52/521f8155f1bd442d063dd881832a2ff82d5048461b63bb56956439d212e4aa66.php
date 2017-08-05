<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/filesystem.htm */
class __TwigTemplate_87aaa71a961715e8811cd384ca14bfd628c8f23ddb6ba28d35717a3b45db2912 extends Twig_Template
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> FileSystem / Cloud Storage </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Its a filesystem abstraction.
      The Laravel Flysystem integration provides simple to use drivers for working with local filesystems, Amazon S3, and Rackspace Cloud Storage. 
      Even better, it's amazingly simple to switch between these storage options as the API remains the same for each system.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      I have not used this with AWS just yet.  I am only using the <code>local</code> disk. <br>
      I wont be going into much detail regarding local file system since I will be using AWS later on and I havent tried AWS just yet. <br>
      And the name of my project is startingpoint.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need to deal with file storage.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Step 1: Create a Symlink at rootProjectDirectory\\public\\storage pointing to rootProjectDirectory\\storage\\app\\public
          
          <pre>
            <code>
              In the terminal in the <strong>rootProjectDirectory\\public\\storage</strong>, run <span class=\"icon-terminal\"></span>: 
              <strong>
                ln -s /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/public/storage/ /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/storage/app/public/
              </strong>
            </code>
          </pre>
        </li>

        <li>
          Create a testing route:
          
          <pre>
            <code>
              Route::get('/testingPublicDisk', 'FileSystemTestController@testingPublicDisk');
            </code>
          </pre>
        </li>

        <li>
          Create a testing Controller
          
          <pre>
            <code>
                &lt;?php
                
                namespace App\\Http\\Controllers;
                
                use Illuminate\\Http\\Request;
                
                use App\\Http\\Requests;
                use Storage;
                
                class FileSystemTestController extends Controller
                {
                    public function testingPublicDisk()
                    {
                      // check if file exists (working)
                      \$existing = Storage::disk('local')->exists('vr46-1-LOCAL.jpg');
                
                      // get the file (working)
                      \$theFile = Storage::disk('local')->get('vr46-1-LOCAL.jpg');
                      
                      // get file details
                      \$fileURL = Storage::disk('public')->url('app/public/vr46-1-PUBLIC.jpg'); // file URL
                
                      // kaning response()->file() kay pang full file path ni
                      // while kaning Storage::url() kai pang Views ni
                      return response()->file( base_path() . \$fileURL );
                    }
                }

            </code>
          </pre>
        </li>

        <li>
\t\t  Access it in the browser at <code>http://startingpoint/testingPublicDisk</code>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/filesystem.htm";
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
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> FileSystem / Cloud Storage </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Its a filesystem abstraction.
      The Laravel Flysystem integration provides simple to use drivers for working with local filesystems, Amazon S3, and Rackspace Cloud Storage. 
      Even better, it's amazingly simple to switch between these storage options as the API remains the same for each system.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      I have not used this with AWS just yet.  I am only using the <code>local</code> disk. <br>
      I wont be going into much detail regarding local file system since I will be using AWS later on and I havent tried AWS just yet. <br>
      And the name of my project is startingpoint.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When you need to deal with file storage.
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Step 1: Create a Symlink at rootProjectDirectory\\public\\storage pointing to rootProjectDirectory\\storage\\app\\public
          
          <pre>
            <code>
              In the terminal in the <strong>rootProjectDirectory\\public\\storage</strong>, run <span class=\"icon-terminal\"></span>: 
              <strong>
                ln -s /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/public/storage/ /home/vagrant/Code/PersonalProjects/StartingPointLaravel5-2-29LTS/storage/app/public/
              </strong>
            </code>
          </pre>
        </li>

        <li>
          Create a testing route:
          
          <pre>
            <code>
              Route::get('/testingPublicDisk', 'FileSystemTestController@testingPublicDisk');
            </code>
          </pre>
        </li>

        <li>
          Create a testing Controller
          
          <pre>
            <code>
                &lt;?php
                
                namespace App\\Http\\Controllers;
                
                use Illuminate\\Http\\Request;
                
                use App\\Http\\Requests;
                use Storage;
                
                class FileSystemTestController extends Controller
                {
                    public function testingPublicDisk()
                    {
                      // check if file exists (working)
                      \$existing = Storage::disk('local')->exists('vr46-1-LOCAL.jpg');
                
                      // get the file (working)
                      \$theFile = Storage::disk('local')->get('vr46-1-LOCAL.jpg');
                      
                      // get file details
                      \$fileURL = Storage::disk('public')->url('app/public/vr46-1-PUBLIC.jpg'); // file URL
                
                      // kaning response()->file() kay pang full file path ni
                      // while kaning Storage::url() kai pang Views ni
                      return response()->file( base_path() . \$fileURL );
                    }
                }

            </code>
          </pre>
        </li>

        <li>
\t\t  Access it in the browser at <code>http://startingpoint/testingPublicDisk</code>
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/laravel5.2/filesystem.htm", "");
    }
}
