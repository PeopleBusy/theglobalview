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
        $__internal_d03d23aa7d6441089b6051f77e7e8195aec36930e453a4a6646ff0900580d26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03d23aa7d6441089b6051f77e7e8195aec36930e453a4a6646ff0900580d26b->enter($__internal_d03d23aa7d6441089b6051f77e7e8195aec36930e453a4a6646ff0900580d26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_644da35477907f156f111b336b26150572ee4d9b6a4d6508aaa1c21d1f5ea086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644da35477907f156f111b336b26150572ee4d9b6a4d6508aaa1c21d1f5ea086->enter($__internal_644da35477907f156f111b336b26150572ee4d9b6a4d6508aaa1c21d1f5ea086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d03d23aa7d6441089b6051f77e7e8195aec36930e453a4a6646ff0900580d26b->leave($__internal_d03d23aa7d6441089b6051f77e7e8195aec36930e453a4a6646ff0900580d26b_prof);

        
        $__internal_644da35477907f156f111b336b26150572ee4d9b6a4d6508aaa1c21d1f5ea086->leave($__internal_644da35477907f156f111b336b26150572ee4d9b6a4d6508aaa1c21d1f5ea086_prof);

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
