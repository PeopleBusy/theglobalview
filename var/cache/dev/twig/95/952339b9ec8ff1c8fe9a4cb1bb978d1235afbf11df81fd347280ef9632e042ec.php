<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_278a9a8aa59b9c09ef29a5dd531c42212f4e31498bc29c3fbfd770723d488917 extends Twig_Template
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
        $__internal_7ccb2c04cb34a0008d4c4b8ffe91dba733f42b677c0593cf7f891bc7030e4286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccb2c04cb34a0008d4c4b8ffe91dba733f42b677c0593cf7f891bc7030e4286->enter($__internal_7ccb2c04cb34a0008d4c4b8ffe91dba733f42b677c0593cf7f891bc7030e4286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0f2c76dbf2ea871132e593540e26e2138f3ba87a61b101cfe680c9c25fcfd0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2c76dbf2ea871132e593540e26e2138f3ba87a61b101cfe680c9c25fcfd0ec->enter($__internal_0f2c76dbf2ea871132e593540e26e2138f3ba87a61b101cfe680c9c25fcfd0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7ccb2c04cb34a0008d4c4b8ffe91dba733f42b677c0593cf7f891bc7030e4286->leave($__internal_7ccb2c04cb34a0008d4c4b8ffe91dba733f42b677c0593cf7f891bc7030e4286_prof);

        
        $__internal_0f2c76dbf2ea871132e593540e26e2138f3ba87a61b101cfe680c9c25fcfd0ec->leave($__internal_0f2c76dbf2ea871132e593540e26e2138f3ba87a61b101cfe680c9c25fcfd0ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
