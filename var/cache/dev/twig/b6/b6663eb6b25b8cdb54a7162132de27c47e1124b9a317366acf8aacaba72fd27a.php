<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b51e2951f2bf15a572850e232782a87ed92c6fa3021f3775ae432dd032479bfa extends Twig_Template
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
        $__internal_f09cfac35e16591238740205b92381f2c74d79016964c8258c5f6ea059b97a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09cfac35e16591238740205b92381f2c74d79016964c8258c5f6ea059b97a59->enter($__internal_f09cfac35e16591238740205b92381f2c74d79016964c8258c5f6ea059b97a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_909021f5dd5bb2d8e5f6d3f722891091b0f52b9f6e1a9b3d59ef37c39c0892cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909021f5dd5bb2d8e5f6d3f722891091b0f52b9f6e1a9b3d59ef37c39c0892cd->enter($__internal_909021f5dd5bb2d8e5f6d3f722891091b0f52b9f6e1a9b3d59ef37c39c0892cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f09cfac35e16591238740205b92381f2c74d79016964c8258c5f6ea059b97a59->leave($__internal_f09cfac35e16591238740205b92381f2c74d79016964c8258c5f6ea059b97a59_prof);

        
        $__internal_909021f5dd5bb2d8e5f6d3f722891091b0f52b9f6e1a9b3d59ef37c39c0892cd->leave($__internal_909021f5dd5bb2d8e5f6d3f722891091b0f52b9f6e1a9b3d59ef37c39c0892cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
