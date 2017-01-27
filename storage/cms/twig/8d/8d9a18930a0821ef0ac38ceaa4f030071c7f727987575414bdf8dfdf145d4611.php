<?php

/* /home/vagrant/Code/octobercms/themes/demo/partials/site/ninjaFooter.htm */
class __TwigTemplate_1fb9839e7678bd454301ecf073d1497ee97dca2918c1fba599066edb0a21682b extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <!--
        <p class=\"muted credit\">&copy; 2017 - ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
        -->
        <p class=\"muted credit\">&copy; 2017 Frederick G. Sandalo &nbsp<span class=\"icon-terminal\"></span><code>ThePHP Ninja</code> </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/partials/site/ninjaFooter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <!--
        <p class=\"muted credit\">&copy; 2017 - {{ \"now\"|date(\"Y\") }} Alexey Bobkov &amp; Samuel Georges.</p>
        -->
        <p class=\"muted credit\">&copy; 2017 Frederick G. Sandalo &nbsp<span class=\"icon-terminal\"></span><code>ThePHP Ninja</code> </p>
    </div>
</div>", "/home/vagrant/Code/octobercms/themes/demo/partials/site/ninjaFooter.htm", "");
    }
}
