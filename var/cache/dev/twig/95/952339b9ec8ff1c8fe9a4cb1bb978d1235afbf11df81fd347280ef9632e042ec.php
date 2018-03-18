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
        $__internal_315a245e80b7bb60548641961bf9874b4419c22f702971a8896b3a625a38ba31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315a245e80b7bb60548641961bf9874b4419c22f702971a8896b3a625a38ba31->enter($__internal_315a245e80b7bb60548641961bf9874b4419c22f702971a8896b3a625a38ba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b4da8413d918cf985f3c7b5c4cd19a14e0686e3ef40b7651835c7ec1afb276af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4da8413d918cf985f3c7b5c4cd19a14e0686e3ef40b7651835c7ec1afb276af->enter($__internal_b4da8413d918cf985f3c7b5c4cd19a14e0686e3ef40b7651835c7ec1afb276af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_315a245e80b7bb60548641961bf9874b4419c22f702971a8896b3a625a38ba31->leave($__internal_315a245e80b7bb60548641961bf9874b4419c22f702971a8896b3a625a38ba31_prof);

        
        $__internal_b4da8413d918cf985f3c7b5c4cd19a14e0686e3ef40b7651835c7ec1afb276af->leave($__internal_b4da8413d918cf985f3c7b5c4cd19a14e0686e3ef40b7651835c7ec1afb276af_prof);

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
