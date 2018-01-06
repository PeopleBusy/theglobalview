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
        $__internal_f74caaf93c02617f85c4f95604ac5cdeee1d3da40454f26bd54fb4da14de86c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74caaf93c02617f85c4f95604ac5cdeee1d3da40454f26bd54fb4da14de86c1->enter($__internal_f74caaf93c02617f85c4f95604ac5cdeee1d3da40454f26bd54fb4da14de86c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fe7109ef3e782d5d2a1d86d6f617dfd25de142096e08c8e075236898578f38c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7109ef3e782d5d2a1d86d6f617dfd25de142096e08c8e075236898578f38c7->enter($__internal_fe7109ef3e782d5d2a1d86d6f617dfd25de142096e08c8e075236898578f38c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f74caaf93c02617f85c4f95604ac5cdeee1d3da40454f26bd54fb4da14de86c1->leave($__internal_f74caaf93c02617f85c4f95604ac5cdeee1d3da40454f26bd54fb4da14de86c1_prof);

        
        $__internal_fe7109ef3e782d5d2a1d86d6f617dfd25de142096e08c8e075236898578f38c7->leave($__internal_fe7109ef3e782d5d2a1d86d6f617dfd25de142096e08c8e075236898578f38c7_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
