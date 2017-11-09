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
        $__internal_252b5a6e47fcab7f3a7ad08ffdbc10c2d70039b08a4d7661cff70beee132c0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252b5a6e47fcab7f3a7ad08ffdbc10c2d70039b08a4d7661cff70beee132c0af->enter($__internal_252b5a6e47fcab7f3a7ad08ffdbc10c2d70039b08a4d7661cff70beee132c0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8dd06e30ae1af2b4155a3479acb60e4384985a3ef0990aa5c2c93855169ae86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd06e30ae1af2b4155a3479acb60e4384985a3ef0990aa5c2c93855169ae86a->enter($__internal_8dd06e30ae1af2b4155a3479acb60e4384985a3ef0990aa5c2c93855169ae86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_252b5a6e47fcab7f3a7ad08ffdbc10c2d70039b08a4d7661cff70beee132c0af->leave($__internal_252b5a6e47fcab7f3a7ad08ffdbc10c2d70039b08a4d7661cff70beee132c0af_prof);

        
        $__internal_8dd06e30ae1af2b4155a3479acb60e4384985a3ef0990aa5c2c93855169ae86a->leave($__internal_8dd06e30ae1af2b4155a3479acb60e4384985a3ef0990aa5c2c93855169ae86a_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
