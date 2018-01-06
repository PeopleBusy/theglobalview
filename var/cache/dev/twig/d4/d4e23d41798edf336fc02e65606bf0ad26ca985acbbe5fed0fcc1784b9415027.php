<?php

/* GlobalViewBundle:Default:pagination.html.twig */
class __TwigTemplate_408ab9919b4279b1566fb0a82ed4ead4757acaebbe29c49278de25ca9aa4721f extends Twig_Template
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
        $__internal_0496ad7a7257572d7798fc507404a388f56bac020d82b4b919cc254253c4b0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0496ad7a7257572d7798fc507404a388f56bac020d82b4b919cc254253c4b0d3->enter($__internal_0496ad7a7257572d7798fc507404a388f56bac020d82b4b919cc254253c4b0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:pagination.html.twig"));

        $__internal_ddba81d2dc728bbcac632b1b07a6201347cb1f312479606f526695fc3e1f95e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddba81d2dc728bbcac632b1b07a6201347cb1f312479606f526695fc3e1f95e3->enter($__internal_ddba81d2dc728bbcac632b1b07a6201347cb1f312479606f526695fc3e1f95e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:pagination.html.twig"));

        // line 1
        if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", array()) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => 1))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 11
($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()) - 1)))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 16
            echo "
        ";
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $context["p"]))), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", array()))) {
                // line 27
                echo "            <li>
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 29
($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", array()) + 1)))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 35
($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", array())))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 40
            echo "    </ul>
";
        }
        
        $__internal_0496ad7a7257572d7798fc507404a388f56bac020d82b4b919cc254253c4b0d3->leave($__internal_0496ad7a7257572d7798fc507404a388f56bac020d82b4b919cc254253c4b0d3_prof);

        
        $__internal_ddba81d2dc728bbcac632b1b07a6201347cb1f312479606f526695fc3e1f95e3->leave($__internal_ddba81d2dc728bbcac632b1b07a6201347cb1f312479606f526695fc3e1f95e3_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  99 => 35,  98 => 34,  90 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  71 => 21,  67 => 20,  60 => 19,  55 => 18,  52 => 16,  44 => 11,  43 => 10,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination.nbPages > 0 %}
    <ul class=\"pagination\">
        {% if pagination.page > 1 %}
            <li>
                <a href=\"{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': 1})) }}\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"{{ path(pagination.nomRoute,
                    pagination.paramsRoute|merge({'page': pagination.page-1})) }}\">
                    <
                </a>
            </li>
        {% endif %}

        {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
        {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}
            <li {% if p == pagination.page %}class=\"active\"{% endif %}>
                <a href=\"{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': p})) }}\">
                    {{ p }}
                </a>
            </li>
        {% endfor %}

        {% if pagination.page < pagination.nbPages %}
            <li>
                <a href=\"{{ path(pagination.nomRoute,
                    pagination.paramsRoute|merge({'page': pagination.page+1})) }}\">
                    >
                </a>
            </li>
            <li>
                <a href=\"{{ path(pagination.nomRoute,
                    pagination.paramsRoute|merge({'page': pagination.nbPages})) }}\">
                    >>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}", "GlobalViewBundle:Default:pagination.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/pagination.html.twig");
    }
}
