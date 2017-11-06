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
        $__internal_d8501eb4bf44859b95e448d449a4e251f1c6678324dff7714e5abcfa58225a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8501eb4bf44859b95e448d449a4e251f1c6678324dff7714e5abcfa58225a4b->enter($__internal_d8501eb4bf44859b95e448d449a4e251f1c6678324dff7714e5abcfa58225a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7fdf2a9f85eb2906d654bdc5a1fab0c5130d09da0a5b7af057a93bb86e30e7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdf2a9f85eb2906d654bdc5a1fab0c5130d09da0a5b7af057a93bb86e30e7c9->enter($__internal_7fdf2a9f85eb2906d654bdc5a1fab0c5130d09da0a5b7af057a93bb86e30e7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d8501eb4bf44859b95e448d449a4e251f1c6678324dff7714e5abcfa58225a4b->leave($__internal_d8501eb4bf44859b95e448d449a4e251f1c6678324dff7714e5abcfa58225a4b_prof);

        
        $__internal_7fdf2a9f85eb2906d654bdc5a1fab0c5130d09da0a5b7af057a93bb86e30e7c9->leave($__internal_7fdf2a9f85eb2906d654bdc5a1fab0c5130d09da0a5b7af057a93bb86e30e7c9_prof);

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
