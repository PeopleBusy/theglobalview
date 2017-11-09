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
        $__internal_ba3237812766a3c7babc3ba6dd9688c4c632ad52062c0d5630714223c8ac071e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3237812766a3c7babc3ba6dd9688c4c632ad52062c0d5630714223c8ac071e->enter($__internal_ba3237812766a3c7babc3ba6dd9688c4c632ad52062c0d5630714223c8ac071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_0aef0621d285d2afbc5394bc5b42ad7ea28d0f6d184d9dcb1afaad1b360243d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aef0621d285d2afbc5394bc5b42ad7ea28d0f6d184d9dcb1afaad1b360243d5->enter($__internal_0aef0621d285d2afbc5394bc5b42ad7ea28d0f6d184d9dcb1afaad1b360243d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_ba3237812766a3c7babc3ba6dd9688c4c632ad52062c0d5630714223c8ac071e->leave($__internal_ba3237812766a3c7babc3ba6dd9688c4c632ad52062c0d5630714223c8ac071e_prof);

        
        $__internal_0aef0621d285d2afbc5394bc5b42ad7ea28d0f6d184d9dcb1afaad1b360243d5->leave($__internal_0aef0621d285d2afbc5394bc5b42ad7ea28d0f6d184d9dcb1afaad1b360243d5_prof);

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
