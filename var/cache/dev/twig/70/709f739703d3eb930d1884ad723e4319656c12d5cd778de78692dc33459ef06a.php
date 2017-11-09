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
        $__internal_61515a55958ea9819076b3ae1224199d7ce65c8845ea0e1a7e5b54c0e80abe22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61515a55958ea9819076b3ae1224199d7ce65c8845ea0e1a7e5b54c0e80abe22->enter($__internal_61515a55958ea9819076b3ae1224199d7ce65c8845ea0e1a7e5b54c0e80abe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e84af662fed4d5bbcbb5b822536b4ee96b857b1d50356925a689bf9d1daf418a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84af662fed4d5bbcbb5b822536b4ee96b857b1d50356925a689bf9d1daf418a->enter($__internal_e84af662fed4d5bbcbb5b822536b4ee96b857b1d50356925a689bf9d1daf418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_61515a55958ea9819076b3ae1224199d7ce65c8845ea0e1a7e5b54c0e80abe22->leave($__internal_61515a55958ea9819076b3ae1224199d7ce65c8845ea0e1a7e5b54c0e80abe22_prof);

        
        $__internal_e84af662fed4d5bbcbb5b822536b4ee96b857b1d50356925a689bf9d1daf418a->leave($__internal_e84af662fed4d5bbcbb5b822536b4ee96b857b1d50356925a689bf9d1daf418a_prof);

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
