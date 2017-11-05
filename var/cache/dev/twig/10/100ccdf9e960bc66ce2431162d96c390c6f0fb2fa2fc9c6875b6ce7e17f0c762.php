<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_de9fcd01c44cb0d7df9d03ccc03c4c709a9872636e4f3f878eaee1a5f9a17b14 extends Twig_Template
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
        $__internal_476e4f029c83d13114d6a699cddc8e1bd90e7b5f4d588edd049887210b7854ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476e4f029c83d13114d6a699cddc8e1bd90e7b5f4d588edd049887210b7854ff->enter($__internal_476e4f029c83d13114d6a699cddc8e1bd90e7b5f4d588edd049887210b7854ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_31feaac056db2ff3cdef357c274ef69d55cba60e93b047f8f2f9e89cb5cdf54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31feaac056db2ff3cdef357c274ef69d55cba60e93b047f8f2f9e89cb5cdf54d->enter($__internal_31feaac056db2ff3cdef357c274ef69d55cba60e93b047f8f2f9e89cb5cdf54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_476e4f029c83d13114d6a699cddc8e1bd90e7b5f4d588edd049887210b7854ff->leave($__internal_476e4f029c83d13114d6a699cddc8e1bd90e7b5f4d588edd049887210b7854ff_prof);

        
        $__internal_31feaac056db2ff3cdef357c274ef69d55cba60e93b047f8f2f9e89cb5cdf54d->leave($__internal_31feaac056db2ff3cdef357c274ef69d55cba60e93b047f8f2f9e89cb5cdf54d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
