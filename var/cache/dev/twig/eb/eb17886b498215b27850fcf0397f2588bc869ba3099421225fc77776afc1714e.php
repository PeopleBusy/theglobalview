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
        $__internal_4ae9237d3181785ebf1305173f68bf6828886c599054523b92b5e2deb35fe02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae9237d3181785ebf1305173f68bf6828886c599054523b92b5e2deb35fe02f->enter($__internal_4ae9237d3181785ebf1305173f68bf6828886c599054523b92b5e2deb35fe02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b4ef4c40bdec662e0886b9b7896b0177a85f985666bac6c1f68ec0a62d409796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ef4c40bdec662e0886b9b7896b0177a85f985666bac6c1f68ec0a62d409796->enter($__internal_b4ef4c40bdec662e0886b9b7896b0177a85f985666bac6c1f68ec0a62d409796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4ae9237d3181785ebf1305173f68bf6828886c599054523b92b5e2deb35fe02f->leave($__internal_4ae9237d3181785ebf1305173f68bf6828886c599054523b92b5e2deb35fe02f_prof);

        
        $__internal_b4ef4c40bdec662e0886b9b7896b0177a85f985666bac6c1f68ec0a62d409796->leave($__internal_b4ef4c40bdec662e0886b9b7896b0177a85f985666bac6c1f68ec0a62d409796_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
