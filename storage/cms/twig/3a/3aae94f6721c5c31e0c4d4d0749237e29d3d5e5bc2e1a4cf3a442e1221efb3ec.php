<?php

/* /home/vagrant/Code/octobercms/plugins/martin/quotes/components/quotes/default.htm */
class __TwigTemplate_4d3420aa55c218ad29ecca8989640be311e9becffcfc81477dca48becc768031 extends Twig_Template
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
        echo "<div class=\"container\">

    <div class='row'>
        <div class='col-md-offset-1 col-md-10'>
            <div class=\"quote-carousel carousel slide\" data-ride=\"carousel\" id=\"quote-carousel-";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">

                <ol class=\"carousel-indicators\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "quotes", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "                    <li data-target=\"#quote-carousel-";
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" class=\"";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\"></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                </ol>

                <div class=\"carousel-inner\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "quotes", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 15
            echo "                    <div class=\"item ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\">
                        <blockquote>
                            <div class=\"row\">
                            ";
            // line 18
            if ($this->getAttribute($context["row"], "image", array())) {
                // line 19
                echo "                                <div class=\"col-sm-3 text-center\">
                                    <img class=\"img-circle\" src=\"";
                // line 20
                echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute($context["row"], "image", array()));
                echo "\" style=\"width: 100px;height:100px;\">
                                </div>
                            ";
            }
            // line 23
            echo "                                <div class=\"";
            echo ((($this->getAttribute($context["row"], "image", array()) == "")) ? ("col-sm-offset-1 col-sm-10") : ("col-sm-9"));
            echo "\">
                                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "quote", array()), "html", null, true);
            echo "</p>
                                ";
            // line 25
            if ($this->getAttribute($context["row"], "author", array())) {
                // line 26
                echo "                                    <small>
                                    ";
                // line 27
                if ($this->getAttribute($context["row"], "link", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "link", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                }
                // line 28
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
                echo "
                                    ";
                // line 29
                if ($this->getAttribute($context["row"], "link", array())) {
                    echo "</a>";
                }
                // line 30
                echo "                                    </small>
                                ";
            }
            // line 32
            echo "                                </div>
                            </div>
                        </blockquote>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div>

                <a data-slide=\"prev\" href=\"#quote-carousel-";
        // line 39
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\" class=\"left  carousel-control\"><i class=\"fa fa-chevron-left icon-chevron-left\"></i></a>
                <a data-slide=\"next\" href=\"#quote-carousel-";
        // line 40
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\" class=\"right carousel-control\"><i class=\"fa fa-chevron-right icon-chevron-right\"></i></a>

            </div>
        </div>
    </div>
</div>

";
        // line 47
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 48
        echo "    <script>
        \$(document).ready(function() {
            \$('#quote-carousel-";
        // line 50
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "').carousel({
                pause   : ";
        // line 51
        echo (($this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "pause"), "method")) ? ("'hover'") : ("'null'"));
        echo ",
                interval: ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "interval"), "method"), "html", null, true);
        echo ",
            });
        });
    </script>
";
        // line 47
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/plugins/martin/quotes/components/quotes/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 47,  192 => 52,  188 => 51,  184 => 50,  180 => 48,  178 => 47,  168 => 40,  164 => 39,  160 => 37,  142 => 32,  138 => 30,  134 => 29,  129 => 28,  123 => 27,  120 => 26,  118 => 25,  114 => 24,  109 => 23,  103 => 20,  100 => 19,  98 => 18,  91 => 15,  74 => 14,  69 => 11,  48 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class='row'>
        <div class='col-md-offset-1 col-md-10'>
            <div class=\"quote-carousel carousel slide\" data-ride=\"carousel\" id=\"quote-carousel-{{ __SELF__ }}\">

                <ol class=\"carousel-indicators\">
                {% for row in __SELF__.quotes %}
                    <li data-target=\"#quote-carousel-{{ __SELF__ }}\" data-slide-to=\"{{ loop.index0 }}\" class=\"{{ (loop.first) ? 'active' : '' }}\"></li>
                {% endfor %}
                </ol>

                <div class=\"carousel-inner\">
                {% for row in __SELF__.quotes %}
                    <div class=\"item {{ (loop.first) ? 'active' : '' }}\">
                        <blockquote>
                            <div class=\"row\">
                            {% if row.image %}
                                <div class=\"col-sm-3 text-center\">
                                    <img class=\"img-circle\" src=\"{{ row.image|media }}\" style=\"width: 100px;height:100px;\">
                                </div>
                            {% endif %}
                                <div class=\"{{ (row.image == '') ? 'col-sm-offset-1 col-sm-10' : 'col-sm-9' }}\">
                                    <p>{{ row.quote }}</p>
                                {% if row.author %}
                                    <small>
                                    {% if row.link %}<a href=\"{{ row.link }}\" target=\"_blank\">{% endif %}
                                        {{ row.author }}
                                    {% if row.link %}</a>{% endif %}
                                    </small>
                                {% endif %}
                                </div>
                            </div>
                        </blockquote>
                    </div>
                {% endfor %}
                </div>

                <a data-slide=\"prev\" href=\"#quote-carousel-{{ __SELF__ }}\" class=\"left  carousel-control\"><i class=\"fa fa-chevron-left icon-chevron-left\"></i></a>
                <a data-slide=\"next\" href=\"#quote-carousel-{{ __SELF__ }}\" class=\"right carousel-control\"><i class=\"fa fa-chevron-right icon-chevron-right\"></i></a>

            </div>
        </div>
    </div>
</div>

{% put scripts %}
    <script>
        \$(document).ready(function() {
            \$('#quote-carousel-{{ __SELF__ }}').carousel({
                pause   : {{ (__SELF__.property('pause')) ? \"'hover'\" : \"'null'\" }},
                interval: {{ __SELF__.property('interval') }},
            });
        });
    </script>
{% endput %}
", "/home/vagrant/Code/octobercms/plugins/martin/quotes/components/quotes/default.htm", "");
    }
}
