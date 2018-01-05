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
        $__internal_ac7b015d468d5e6b283d2405f6b56165294e76c597f1a1149d717210077d6a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7b015d468d5e6b283d2405f6b56165294e76c597f1a1149d717210077d6a52->enter($__internal_ac7b015d468d5e6b283d2405f6b56165294e76c597f1a1149d717210077d6a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9e6ea1e782e4294e0737c6eea1b4f440dae0ef7a550e77ef04fe28149854c4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6ea1e782e4294e0737c6eea1b4f440dae0ef7a550e77ef04fe28149854c4ea->enter($__internal_9e6ea1e782e4294e0737c6eea1b4f440dae0ef7a550e77ef04fe28149854c4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_ac7b015d468d5e6b283d2405f6b56165294e76c597f1a1149d717210077d6a52->leave($__internal_ac7b015d468d5e6b283d2405f6b56165294e76c597f1a1149d717210077d6a52_prof);

        
        $__internal_9e6ea1e782e4294e0737c6eea1b4f440dae0ef7a550e77ef04fe28149854c4ea->leave($__internal_9e6ea1e782e4294e0737c6eea1b4f440dae0ef7a550e77ef04fe28149854c4ea_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
