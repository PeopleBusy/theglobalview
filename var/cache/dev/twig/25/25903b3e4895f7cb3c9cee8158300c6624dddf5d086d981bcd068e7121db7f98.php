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
        $__internal_8f787bc803914bcf6fa0539cae87034f63ebd6573f96c9a1b5ab6342f8c9d41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f787bc803914bcf6fa0539cae87034f63ebd6573f96c9a1b5ab6342f8c9d41e->enter($__internal_8f787bc803914bcf6fa0539cae87034f63ebd6573f96c9a1b5ab6342f8c9d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5aefd69b2a6aba541925795aa170bb8f8e579f19a8e8b10119daf32c952fb1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aefd69b2a6aba541925795aa170bb8f8e579f19a8e8b10119daf32c952fb1b8->enter($__internal_5aefd69b2a6aba541925795aa170bb8f8e579f19a8e8b10119daf32c952fb1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8f787bc803914bcf6fa0539cae87034f63ebd6573f96c9a1b5ab6342f8c9d41e->leave($__internal_8f787bc803914bcf6fa0539cae87034f63ebd6573f96c9a1b5ab6342f8c9d41e_prof);

        
        $__internal_5aefd69b2a6aba541925795aa170bb8f8e579f19a8e8b10119daf32c952fb1b8->leave($__internal_5aefd69b2a6aba541925795aa170bb8f8e579f19a8e8b10119daf32c952fb1b8_prof);

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
