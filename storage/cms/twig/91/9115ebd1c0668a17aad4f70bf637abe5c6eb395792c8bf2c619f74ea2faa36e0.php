<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/vagrant/howToExportVagrantBox.htm */
class __TwigTemplate_8dcc2d760b3a92ac7d9217cd5d988a52662fa4037cb13c8d49147b1b8689fdc7 extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"green4 tutorialPages\">
    <p>
      ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("quotes2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "    </p>
    <p>
      ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    </p>
  </div>
</div>

<div class=\"row\"> <!-- Laravel Feature -->
  <div class=\"green4 tutorialPages\">
    <h1 class=\"fontColorWhite1 noMargin\">Vagrant Topic</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> How To Export Vagrant Box </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Exports an existing Vagrant Box for use or customization.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Details From: https://scotch.io/tutorials/how-to-create-a-vagrant-base-box-from-an-existing-one </br>
      I did not follow the exact steps, I just figured out what a step does and made my own custom steps.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When You Need Duplicate an Existing Vagrant Box for Custom Development Version out of a Base Development Box
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Step 1: sudo vagrant global-status to see the IDs of the boxes
        </li>

        <li>
          Step 2: Repackage the VM into a new Vagrant Box:  sudo vagrant package 091dafc --output /Users/uchihamadara/Boxes/MyNewBox/mynew.box
        </li>

        <li>
          Step 3: Add the Box into your Vagrant Install: sudo vagrant box add mynewbox /Users/uchihamadara/Boxes/MyNewBox/mynew.box
        </li>

        <li>
\t\t  Step 4: Copy all contents of /Users/uchihamadara/Boxes/HomesteadConfigs/ to /Users/uchihamadara/Boxes/MyNewBox/
        </li>

        <li>
          Step 5: go to /Users/uchihamadara/Boxes/HomesteadConfigs and edit init.sh, set the target for homesteadRoot to /Users/uchihamadara/Boxes/MyNewBox/.homestead
        </li>

        <li>
          Step 6: run bash init.sh
        </li>

        <li>
\t\t  Step 7: replace all instances of “homestead-7” to “mynewbox” of “/Users/uchihamadara/Boxes/MyNewBox/scripts/homestead.rb” (about 4 instances)
        </li>
        <li>
          Step 8: 8. change the ip address of the # Configure A Private Network IP config.vm.network :private_network, ip: settings[\"ip\"] ||= \"192.168.10.10\" in the  scripts/homestead.rb
        </li>

        <li>
          Step 9: inside /Users/uchihamadara/Boxes/MyNewBox, edit the file Vagrantfile , add the line   confDir = \"/Users/uchihamadara/Boxes/LaravelFiveFour/.homestead\" right below the line   confDir = \$confDir ||= File.expand_path(File.join(Dir.home, \".homestead\"))
        </li>

        <li>
\t\t  Step 10: configure the /Users/uchihamadara/Boxes/MyNewBox/.homestead/Homestead.yaml file to suit the needs of the new box
        </li>

        <li>
\t\t  Step 11: inside /Users/uchihamadara/Boxes/MyNewBox , sudo vagrant up
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/vagrant/howToExportVagrantBox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"green4 tutorialPages\">
    <p>
      {% component 'quotes2' %}
    </p>
    <p>
      {% component 'siteSearchInclude' %}
    </p>
  </div>
</div>

<div class=\"row\"> <!-- Laravel Feature -->
  <div class=\"green4 tutorialPages\">
    <h1 class=\"fontColorWhite1 noMargin\">Vagrant Topic</h1>
    <h3 class=\"fontColorGrey3 noMargin\"> <span class=\"icon-tasks icon-2x\"></span> How To Export Vagrant Box </h3>
  </div>
</div>            <!-- Laravel Feature -->

<div class=\"row\"> <!-- What Does It Do -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">What Does It Do</h1>
    <p class=\"fontColorWhite2 noMargin\">
      Exports an existing Vagrant Box for use or customization.
    </p>
  </div>
</div>            <!-- What Does It Do -->

<div class=\"row\"> <!-- Note -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">NOTE: <span class=\"icon-warning-sign icon-1x\"></span></h1>
    <div class=\"well\">
      Details From: https://scotch.io/tutorials/how-to-create-a-vagrant-base-box-from-an-existing-one </br>
      I did not follow the exact steps, I just figured out what a step does and made my own custom steps.
    </div>
  </div>
</div>            <!-- Note -->

<div class=\"row\"> <!-- When To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">When To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      When You Need Duplicate an Existing Vagrant Box for Custom Development Version out of a Base Development Box
    </p>
  </div>
</div>            <!-- When To Do It -->

<div class=\"row\"> <!-- How To Do It -->
  <div class=\"grey2 tutorialPages withBorderBottom\">
    <h1 class=\"noMargin fontColorGreen3\">How To Do It</h1>
    <p class=\"fontColorWhite2 noMargin\">
      <ol>
        <li>
          Step 1: sudo vagrant global-status to see the IDs of the boxes
        </li>

        <li>
          Step 2: Repackage the VM into a new Vagrant Box:  sudo vagrant package 091dafc --output /Users/uchihamadara/Boxes/MyNewBox/mynew.box
        </li>

        <li>
          Step 3: Add the Box into your Vagrant Install: sudo vagrant box add mynewbox /Users/uchihamadara/Boxes/MyNewBox/mynew.box
        </li>

        <li>
\t\t  Step 4: Copy all contents of /Users/uchihamadara/Boxes/HomesteadConfigs/ to /Users/uchihamadara/Boxes/MyNewBox/
        </li>

        <li>
          Step 5: go to /Users/uchihamadara/Boxes/HomesteadConfigs and edit init.sh, set the target for homesteadRoot to /Users/uchihamadara/Boxes/MyNewBox/.homestead
        </li>

        <li>
          Step 6: run bash init.sh
        </li>

        <li>
\t\t  Step 7: replace all instances of “homestead-7” to “mynewbox” of “/Users/uchihamadara/Boxes/MyNewBox/scripts/homestead.rb” (about 4 instances)
        </li>
        <li>
          Step 8: 8. change the ip address of the # Configure A Private Network IP config.vm.network :private_network, ip: settings[\"ip\"] ||= \"192.168.10.10\" in the  scripts/homestead.rb
        </li>

        <li>
          Step 9: inside /Users/uchihamadara/Boxes/MyNewBox, edit the file Vagrantfile , add the line   confDir = \"/Users/uchihamadara/Boxes/LaravelFiveFour/.homestead\" right below the line   confDir = \$confDir ||= File.expand_path(File.join(Dir.home, \".homestead\"))
        </li>

        <li>
\t\t  Step 10: configure the /Users/uchihamadara/Boxes/MyNewBox/.homestead/Homestead.yaml file to suit the needs of the new box
        </li>

        <li>
\t\t  Step 11: inside /Users/uchihamadara/Boxes/MyNewBox , sudo vagrant up
        </li>
      </ol>
    </p>
  </div>
</div>            <!-- How To Do It -->", "/home/vagrant/Code/octobercms/themes/demo/pages/vagrant/howToExportVagrantBox.htm", "");
    }
}
