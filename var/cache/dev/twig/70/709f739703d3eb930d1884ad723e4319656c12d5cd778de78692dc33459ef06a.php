<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_27fe7a5793e08a9b7e6f385b7ea14b7e6c783b6284bc8b9318ffa953caa352e2 extends Twig_Template
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
        $__internal_f9204b881d9386ca771d0b9b8f8ee2d22bff597ac7fea95ce6e8a87c7e694fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9204b881d9386ca771d0b9b8f8ee2d22bff597ac7fea95ce6e8a87c7e694fe5->enter($__internal_f9204b881d9386ca771d0b9b8f8ee2d22bff597ac7fea95ce6e8a87c7e694fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b09f8762a56ff6e72e53db9daae79a5e6526c8af3446459aff1cb1667df97e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f8762a56ff6e72e53db9daae79a5e6526c8af3446459aff1cb1667df97e31->enter($__internal_b09f8762a56ff6e72e53db9daae79a5e6526c8af3446459aff1cb1667df97e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f9204b881d9386ca771d0b9b8f8ee2d22bff597ac7fea95ce6e8a87c7e694fe5->leave($__internal_f9204b881d9386ca771d0b9b8f8ee2d22bff597ac7fea95ce6e8a87c7e694fe5_prof);

        
        $__internal_b09f8762a56ff6e72e53db9daae79a5e6526c8af3446459aff1cb1667df97e31->leave($__internal_b09f8762a56ff6e72e53db9daae79a5e6526c8af3446459aff1cb1667df97e31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
