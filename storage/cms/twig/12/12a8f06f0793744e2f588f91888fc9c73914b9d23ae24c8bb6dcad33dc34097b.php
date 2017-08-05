<?php

/* /home/vagrant/Code/octobercms/plugins/offline/sitesearch/components/searchresults/content.htm */
class __TwigTemplate_a8f2380a43974ff28cafceb8f6c97c95bda9c6cc5090bee8e14a3f077618fbbf extends Twig_Template
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
        echo "<h4 class=\"ss-result__title\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["result"] ?? null), "url", array()), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["result"] ?? null), "title", array());
        echo "</a>
    ";
        // line 3
        if ($this->getAttribute(($context["__SELF__"] ?? null), "showProviderBadge", array())) {
            // line 4
            echo "        <span class=\"ss-result__badge\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["result"] ?? null), "provider", array()), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "</h4>

<p class=\"ss-result__text\">
    ";
        // line 14
        echo $this->getAttribute(($context["result"] ?? null), "excerpt", array());
        echo "
</p>

<p class=\"ss-result__url\">
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["result"] ?? null), "url", array()), "html", null, true);
        echo "\" class=\"ss-result__link\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "visitPageMessage", array()), "html", null, true);
        echo " &rarr;</a>
</p>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/plugins/offline/sitesearch/components/searchresults/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  49 => 14,  44 => 11,  42 => 10,  39 => 8,  33 => 5,  30 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ss-result__title\">
    <a href=\"{{ result.url }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"ss-result__badge\">
            {{ result.provider }}
        </span>
    {% endif %}

    {# Some results contain meta information.    #}
    {# You can access it using {{ result.meta }} #}
</h4>

<p class=\"ss-result__text\">
    {{ result.excerpt | raw }}
</p>

<p class=\"ss-result__url\">
    <a href=\"{{ result.url }}\" class=\"ss-result__link\">{{ __SELF__.visitPageMessage }} &rarr;</a>
</p>", "/home/vagrant/Code/octobercms/plugins/offline/sitesearch/components/searchresults/content.htm", "");
    }
}
