<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f32c1950d897e64958ba640506596e793cc54e1da11946ed25e21a83c04df0a4 extends Twig_Template
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
        $__internal_5bfd455ed6d84704317aee66105ea04bb9ed326adef1fbeecd4df7a5fed244b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfd455ed6d84704317aee66105ea04bb9ed326adef1fbeecd4df7a5fed244b2->enter($__internal_5bfd455ed6d84704317aee66105ea04bb9ed326adef1fbeecd4df7a5fed244b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_408904056a270daee4c29776928dea048fddeaacd686f58fec876e8c3c007e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408904056a270daee4c29776928dea048fddeaacd686f58fec876e8c3c007e33->enter($__internal_408904056a270daee4c29776928dea048fddeaacd686f58fec876e8c3c007e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5bfd455ed6d84704317aee66105ea04bb9ed326adef1fbeecd4df7a5fed244b2->leave($__internal_5bfd455ed6d84704317aee66105ea04bb9ed326adef1fbeecd4df7a5fed244b2_prof);

        
        $__internal_408904056a270daee4c29776928dea048fddeaacd686f58fec876e8c3c007e33->leave($__internal_408904056a270daee4c29776928dea048fddeaacd686f58fec876e8c3c007e33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
