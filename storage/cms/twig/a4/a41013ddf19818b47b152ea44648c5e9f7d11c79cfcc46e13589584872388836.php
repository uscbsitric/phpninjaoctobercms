<?php

/* /home/vagrant/Code/octobercms/themes/demo/pages/search-results.htm */
class __TwigTemplate_f7fbdd487f1c57056f8a736c07b4544871100f54aed0e51b52fc288b6a563d9a extends Twig_Template
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
        echo "<style>
  .ss-result {
    margin-bottom: 2em;
  }
  .ss-result__aside {
    float: right;
    margin-left: .5em;
  }
  .ss-result__title {
    font-weight: bold;
    margin-bottom: .5em;
  }
  .ss-result__badge {
    font-size: .7em;
    padding: .2em .5em;
    border-radius: 4px;
    margin-left: .75em;
    background: #eee;
    display: inline-block;
  }
  .ss-result__text {
    margin-bottom: .5em;
  }
  .ss-result__url {
  }
</style>



<h2>Search results for ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["searchResults"] ?? null), "query", array()), "html", null, true);
        echo "</h2>

";
        // line 32
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/themes/demo/pages/search-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 32,  50 => 30,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
  .ss-result {
    margin-bottom: 2em;
  }
  .ss-result__aside {
    float: right;
    margin-left: .5em;
  }
  .ss-result__title {
    font-weight: bold;
    margin-bottom: .5em;
  }
  .ss-result__badge {
    font-size: .7em;
    padding: .2em .5em;
    border-radius: 4px;
    margin-left: .75em;
    background: #eee;
    display: inline-block;
  }
  .ss-result__text {
    margin-bottom: .5em;
  }
  .ss-result__url {
  }
</style>



<h2>Search results for {{ searchResults.query }}</h2>

{% component 'searchResults' %}", "/home/vagrant/Code/octobercms/themes/demo/pages/search-results.htm", "");
    }
}
