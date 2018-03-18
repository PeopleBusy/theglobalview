<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_675f58a7383cbe414d634a8c2bdebae087461bad2850512ad915280a214d809c extends Twig_Template
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
        $__internal_8b08810e5af7d9cd4307d179d8a6673c2999ed2878d3fa9dafc22af9cd8208cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b08810e5af7d9cd4307d179d8a6673c2999ed2878d3fa9dafc22af9cd8208cb->enter($__internal_8b08810e5af7d9cd4307d179d8a6673c2999ed2878d3fa9dafc22af9cd8208cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0531462ddb01346d31ece30f3eed269a8a51b50a61a551833c5c560d95b873b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0531462ddb01346d31ece30f3eed269a8a51b50a61a551833c5c560d95b873b1->enter($__internal_0531462ddb01346d31ece30f3eed269a8a51b50a61a551833c5c560d95b873b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8b08810e5af7d9cd4307d179d8a6673c2999ed2878d3fa9dafc22af9cd8208cb->leave($__internal_8b08810e5af7d9cd4307d179d8a6673c2999ed2878d3fa9dafc22af9cd8208cb_prof);

        
        $__internal_0531462ddb01346d31ece30f3eed269a8a51b50a61a551833c5c560d95b873b1->leave($__internal_0531462ddb01346d31ece30f3eed269a8a51b50a61a551833c5c560d95b873b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
