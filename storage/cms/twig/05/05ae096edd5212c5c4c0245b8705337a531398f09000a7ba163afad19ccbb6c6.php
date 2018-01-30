<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/home.htm */
class __TwigTemplate_d11cd9bbc5bf2365e67ea5707122b4be1fc9ebb56771d657447f4ef9f335dadc extends Twig_Template
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
        echo "<div class=\"jumbotron green4\">
    <div class=\"container-fluid\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron green4\">
    <div class=\"container-fluid\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container-fluid\">
    <div class=\"row\">
    </div>
</div>", "/home/vagrant/Code/octobercms/themes/demo/pages/home.htm", "");
    }
}
