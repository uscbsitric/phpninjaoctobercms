<?php

/* /home/vagrant/Code/octobercms/plugins/offline/sitesearch/components/searchresults/default.htm */
class __TwigTemplate_afee1f8a0f3a53514e70568b44c19189ae8f635f3b5160b86f3855c00b6929f8 extends Twig_Template
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
        $context["results"] = $this->getAttribute(($context["__SELF__"] ?? null), "results", array());
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = $context["result"]            ;
            echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::searchresult.htm")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::no-results.htm")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['results'] = ($context["results"] ?? null)        ;
        echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::pagination.htm")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/plugins/offline/sitesearch/components/searchresults/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  42 => 8,  40 => 7,  31 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set results = __SELF__.results %}

{% for result in results %}
    {# Display all results #}
    {% partial __SELF__ ~ '::searchresult.htm' result = result %}
{% else %}
    {# No results found #}
    {% partial __SELF__ ~ '::no-results.htm' %}
{% endfor %}

{% partial __SELF__ ~ '::pagination.htm' results = results %}
", "/home/vagrant/Code/octobercms/plugins/offline/sitesearch/components/searchresults/default.htm", "");
    }
}
