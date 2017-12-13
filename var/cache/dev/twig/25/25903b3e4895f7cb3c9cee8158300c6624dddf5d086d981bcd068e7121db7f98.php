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
        $__internal_8749f563684734597e3ece3836df926f784809f7d63daae176dce9c25121f7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8749f563684734597e3ece3836df926f784809f7d63daae176dce9c25121f7dd->enter($__internal_8749f563684734597e3ece3836df926f784809f7d63daae176dce9c25121f7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_39cc908504f7ae11a55ea9d769023368439517074b72c3d77630843fae5d9ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cc908504f7ae11a55ea9d769023368439517074b72c3d77630843fae5d9ac6->enter($__internal_39cc908504f7ae11a55ea9d769023368439517074b72c3d77630843fae5d9ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8749f563684734597e3ece3836df926f784809f7d63daae176dce9c25121f7dd->leave($__internal_8749f563684734597e3ece3836df926f784809f7d63daae176dce9c25121f7dd_prof);

        
        $__internal_39cc908504f7ae11a55ea9d769023368439517074b72c3d77630843fae5d9ac6->leave($__internal_39cc908504f7ae11a55ea9d769023368439517074b72c3d77630843fae5d9ac6_prof);

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
