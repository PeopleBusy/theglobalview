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
        $__internal_972f1ded157945ebd2c384d205eec3187cf305a7064e593be5089ea2a594e334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972f1ded157945ebd2c384d205eec3187cf305a7064e593be5089ea2a594e334->enter($__internal_972f1ded157945ebd2c384d205eec3187cf305a7064e593be5089ea2a594e334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_03f07b60b9308a224fe7e63252e99cf6e32411ac81b3e63493ba515d7ad386db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f07b60b9308a224fe7e63252e99cf6e32411ac81b3e63493ba515d7ad386db->enter($__internal_03f07b60b9308a224fe7e63252e99cf6e32411ac81b3e63493ba515d7ad386db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_972f1ded157945ebd2c384d205eec3187cf305a7064e593be5089ea2a594e334->leave($__internal_972f1ded157945ebd2c384d205eec3187cf305a7064e593be5089ea2a594e334_prof);

        
        $__internal_03f07b60b9308a224fe7e63252e99cf6e32411ac81b3e63493ba515d7ad386db->leave($__internal_03f07b60b9308a224fe7e63252e99cf6e32411ac81b3e63493ba515d7ad386db_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
