<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_675f58a7383cbe414d634a8c2bdebae087461bad2850512ad915280a214d809c extends Twig_Template
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
        $__internal_9e157278677932b47a42e5b1a4ce85e8812a99fe538ba3f29c09556f758fdb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e157278677932b47a42e5b1a4ce85e8812a99fe538ba3f29c09556f758fdb92->enter($__internal_9e157278677932b47a42e5b1a4ce85e8812a99fe538ba3f29c09556f758fdb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9a8950bbf3a49f4fa2f0bfb5541567ac78d89ad2926075dd9dfe1e9ab86e3dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8950bbf3a49f4fa2f0bfb5541567ac78d89ad2926075dd9dfe1e9ab86e3dac->enter($__internal_9a8950bbf3a49f4fa2f0bfb5541567ac78d89ad2926075dd9dfe1e9ab86e3dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9e157278677932b47a42e5b1a4ce85e8812a99fe538ba3f29c09556f758fdb92->leave($__internal_9e157278677932b47a42e5b1a4ce85e8812a99fe538ba3f29c09556f758fdb92_prof);

        
        $__internal_9a8950bbf3a49f4fa2f0bfb5541567ac78d89ad2926075dd9dfe1e9ab86e3dac->leave($__internal_9a8950bbf3a49f4fa2f0bfb5541567ac78d89ad2926075dd9dfe1e9ab86e3dac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
