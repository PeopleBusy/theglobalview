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
        $__internal_140d786823f03f1037b03ce49b99c5b3778477ed809d588a5ec1997a59460a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140d786823f03f1037b03ce49b99c5b3778477ed809d588a5ec1997a59460a9e->enter($__internal_140d786823f03f1037b03ce49b99c5b3778477ed809d588a5ec1997a59460a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b5600f7e88218b57da4ce6cfe4025455e39d480f52e5beea3459cfcce3454c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5600f7e88218b57da4ce6cfe4025455e39d480f52e5beea3459cfcce3454c25->enter($__internal_b5600f7e88218b57da4ce6cfe4025455e39d480f52e5beea3459cfcce3454c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_140d786823f03f1037b03ce49b99c5b3778477ed809d588a5ec1997a59460a9e->leave($__internal_140d786823f03f1037b03ce49b99c5b3778477ed809d588a5ec1997a59460a9e_prof);

        
        $__internal_b5600f7e88218b57da4ce6cfe4025455e39d480f52e5beea3459cfcce3454c25->leave($__internal_b5600f7e88218b57da4ce6cfe4025455e39d480f52e5beea3459cfcce3454c25_prof);

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
