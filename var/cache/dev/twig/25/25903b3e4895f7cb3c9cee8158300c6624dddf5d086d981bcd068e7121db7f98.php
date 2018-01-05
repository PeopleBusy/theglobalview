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
        $__internal_fe4e014b5c02c941dc9e1836c224f9939400f9a808e793c703ead5501044f5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4e014b5c02c941dc9e1836c224f9939400f9a808e793c703ead5501044f5ac->enter($__internal_fe4e014b5c02c941dc9e1836c224f9939400f9a808e793c703ead5501044f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c83204e55be2db6ca73ba96f8b40f726f553a9ec2188d438c6e17bc6fe6be404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83204e55be2db6ca73ba96f8b40f726f553a9ec2188d438c6e17bc6fe6be404->enter($__internal_c83204e55be2db6ca73ba96f8b40f726f553a9ec2188d438c6e17bc6fe6be404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fe4e014b5c02c941dc9e1836c224f9939400f9a808e793c703ead5501044f5ac->leave($__internal_fe4e014b5c02c941dc9e1836c224f9939400f9a808e793c703ead5501044f5ac_prof);

        
        $__internal_c83204e55be2db6ca73ba96f8b40f726f553a9ec2188d438c6e17bc6fe6be404->leave($__internal_c83204e55be2db6ca73ba96f8b40f726f553a9ec2188d438c6e17bc6fe6be404_prof);

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
