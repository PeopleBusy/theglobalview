<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3cb237d79ec9a5dfc4697c3565d4dc1cc209842aa5398c0b38d3b0c584a0e1e6 extends Twig_Template
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
        $__internal_4ebc3eb94d4a425daf4ec6deef12456d8356cfd9ab3fa1750faf4ce32d72449c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebc3eb94d4a425daf4ec6deef12456d8356cfd9ab3fa1750faf4ce32d72449c->enter($__internal_4ebc3eb94d4a425daf4ec6deef12456d8356cfd9ab3fa1750faf4ce32d72449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_99de7d6c179810375067386759be04c3b5ce8904abda9853190f1574870c1ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99de7d6c179810375067386759be04c3b5ce8904abda9853190f1574870c1ede->enter($__internal_99de7d6c179810375067386759be04c3b5ce8904abda9853190f1574870c1ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4ebc3eb94d4a425daf4ec6deef12456d8356cfd9ab3fa1750faf4ce32d72449c->leave($__internal_4ebc3eb94d4a425daf4ec6deef12456d8356cfd9ab3fa1750faf4ce32d72449c_prof);

        
        $__internal_99de7d6c179810375067386759be04c3b5ce8904abda9853190f1574870c1ede->leave($__internal_99de7d6c179810375067386759be04c3b5ce8904abda9853190f1574870c1ede_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
