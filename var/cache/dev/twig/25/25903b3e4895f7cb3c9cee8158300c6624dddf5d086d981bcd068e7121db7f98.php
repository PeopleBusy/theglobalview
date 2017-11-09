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
        $__internal_c8dad428cbee3237930f0bec71a69ae4ac8272e35ecbf263db24cef9de66aa77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dad428cbee3237930f0bec71a69ae4ac8272e35ecbf263db24cef9de66aa77->enter($__internal_c8dad428cbee3237930f0bec71a69ae4ac8272e35ecbf263db24cef9de66aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_07b3b751c5e84a3efc6425aa43e822d1f215fba64ca1a3962830dd84fdc161af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b3b751c5e84a3efc6425aa43e822d1f215fba64ca1a3962830dd84fdc161af->enter($__internal_07b3b751c5e84a3efc6425aa43e822d1f215fba64ca1a3962830dd84fdc161af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c8dad428cbee3237930f0bec71a69ae4ac8272e35ecbf263db24cef9de66aa77->leave($__internal_c8dad428cbee3237930f0bec71a69ae4ac8272e35ecbf263db24cef9de66aa77_prof);

        
        $__internal_07b3b751c5e84a3efc6425aa43e822d1f215fba64ca1a3962830dd84fdc161af->leave($__internal_07b3b751c5e84a3efc6425aa43e822d1f215fba64ca1a3962830dd84fdc161af_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
