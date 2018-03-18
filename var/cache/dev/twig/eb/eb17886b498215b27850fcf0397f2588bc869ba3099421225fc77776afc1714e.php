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
        $__internal_91d8469e5e834963e7422b225ff3ee22957d3e032e7e824080d199428ba13eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d8469e5e834963e7422b225ff3ee22957d3e032e7e824080d199428ba13eb4->enter($__internal_91d8469e5e834963e7422b225ff3ee22957d3e032e7e824080d199428ba13eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4bd999549a24c5b5dd9e29775b3a870bc09d4699ea1799f193956dcd00aa83ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd999549a24c5b5dd9e29775b3a870bc09d4699ea1799f193956dcd00aa83ae->enter($__internal_4bd999549a24c5b5dd9e29775b3a870bc09d4699ea1799f193956dcd00aa83ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_91d8469e5e834963e7422b225ff3ee22957d3e032e7e824080d199428ba13eb4->leave($__internal_91d8469e5e834963e7422b225ff3ee22957d3e032e7e824080d199428ba13eb4_prof);

        
        $__internal_4bd999549a24c5b5dd9e29775b3a870bc09d4699ea1799f193956dcd00aa83ae->leave($__internal_4bd999549a24c5b5dd9e29775b3a870bc09d4699ea1799f193956dcd00aa83ae_prof);

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
