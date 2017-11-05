<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e3c7e49f9aed94606824421afe77e55543ba3fa876873d6bb3688a5c711650c8 extends Twig_Template
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
        $__internal_f99d2888ab3d40f927d0d28b47cc6d7e47297c05ffd035636bfc3513405897e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99d2888ab3d40f927d0d28b47cc6d7e47297c05ffd035636bfc3513405897e1->enter($__internal_f99d2888ab3d40f927d0d28b47cc6d7e47297c05ffd035636bfc3513405897e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_359b36a856475d8a14da4992ae53b0835995d9d4913f18f89225cb432d63ad17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359b36a856475d8a14da4992ae53b0835995d9d4913f18f89225cb432d63ad17->enter($__internal_359b36a856475d8a14da4992ae53b0835995d9d4913f18f89225cb432d63ad17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f99d2888ab3d40f927d0d28b47cc6d7e47297c05ffd035636bfc3513405897e1->leave($__internal_f99d2888ab3d40f927d0d28b47cc6d7e47297c05ffd035636bfc3513405897e1_prof);

        
        $__internal_359b36a856475d8a14da4992ae53b0835995d9d4913f18f89225cb432d63ad17->leave($__internal_359b36a856475d8a14da4992ae53b0835995d9d4913f18f89225cb432d63ad17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
