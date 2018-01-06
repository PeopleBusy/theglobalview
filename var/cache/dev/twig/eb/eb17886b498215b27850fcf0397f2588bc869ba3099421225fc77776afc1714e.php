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
        $__internal_8c47bde140eb4e786ca188085c36e50d58ea5015ef100327732bbebeaa119e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c47bde140eb4e786ca188085c36e50d58ea5015ef100327732bbebeaa119e43->enter($__internal_8c47bde140eb4e786ca188085c36e50d58ea5015ef100327732bbebeaa119e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e0cec78acce004fcf5c7acc0fbb798f3056781d6180fd4cf78b37d8fa8bf8d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cec78acce004fcf5c7acc0fbb798f3056781d6180fd4cf78b37d8fa8bf8d06->enter($__internal_e0cec78acce004fcf5c7acc0fbb798f3056781d6180fd4cf78b37d8fa8bf8d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8c47bde140eb4e786ca188085c36e50d58ea5015ef100327732bbebeaa119e43->leave($__internal_8c47bde140eb4e786ca188085c36e50d58ea5015ef100327732bbebeaa119e43_prof);

        
        $__internal_e0cec78acce004fcf5c7acc0fbb798f3056781d6180fd4cf78b37d8fa8bf8d06->leave($__internal_e0cec78acce004fcf5c7acc0fbb798f3056781d6180fd4cf78b37d8fa8bf8d06_prof);

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
