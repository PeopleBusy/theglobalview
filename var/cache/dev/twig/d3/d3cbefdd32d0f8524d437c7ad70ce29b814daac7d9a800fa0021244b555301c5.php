<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d6de93f66fdfd95efb38287a8cbba2c2b6989eadd3d67d49a4dd343830be05e4 extends Twig_Template
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
        $__internal_866ac3c596c0b8560c7c9ee8990091526b7daa8cc1c30be83c84b4bd1902464c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866ac3c596c0b8560c7c9ee8990091526b7daa8cc1c30be83c84b4bd1902464c->enter($__internal_866ac3c596c0b8560c7c9ee8990091526b7daa8cc1c30be83c84b4bd1902464c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_77d574bce9da0d906c4406f9a15d74198669cd16869b795970a3108d0fdd0b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d574bce9da0d906c4406f9a15d74198669cd16869b795970a3108d0fdd0b11->enter($__internal_77d574bce9da0d906c4406f9a15d74198669cd16869b795970a3108d0fdd0b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_866ac3c596c0b8560c7c9ee8990091526b7daa8cc1c30be83c84b4bd1902464c->leave($__internal_866ac3c596c0b8560c7c9ee8990091526b7daa8cc1c30be83c84b4bd1902464c_prof);

        
        $__internal_77d574bce9da0d906c4406f9a15d74198669cd16869b795970a3108d0fdd0b11->leave($__internal_77d574bce9da0d906c4406f9a15d74198669cd16869b795970a3108d0fdd0b11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
