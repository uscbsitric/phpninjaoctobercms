<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/home.htm */
class __TwigTemplate_8a2e600a40c69f7191908963d45d4e0a5fb28c9784e5b29e6531db028859d398 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
