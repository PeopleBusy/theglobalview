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
        $__internal_0533bcd9a32720a8f78a3d0cf1fecd5ea4c485d2a71ebf10bf19a4526736ba15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0533bcd9a32720a8f78a3d0cf1fecd5ea4c485d2a71ebf10bf19a4526736ba15->enter($__internal_0533bcd9a32720a8f78a3d0cf1fecd5ea4c485d2a71ebf10bf19a4526736ba15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d8fcea8795f8347fac8089d9f7a6f7cbfb57efd0fd2ecf5c3ff9d4ea68930a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fcea8795f8347fac8089d9f7a6f7cbfb57efd0fd2ecf5c3ff9d4ea68930a1a->enter($__internal_d8fcea8795f8347fac8089d9f7a6f7cbfb57efd0fd2ecf5c3ff9d4ea68930a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0533bcd9a32720a8f78a3d0cf1fecd5ea4c485d2a71ebf10bf19a4526736ba15->leave($__internal_0533bcd9a32720a8f78a3d0cf1fecd5ea4c485d2a71ebf10bf19a4526736ba15_prof);

        
        $__internal_d8fcea8795f8347fac8089d9f7a6f7cbfb57efd0fd2ecf5c3ff9d4ea68930a1a->leave($__internal_d8fcea8795f8347fac8089d9f7a6f7cbfb57efd0fd2ecf5c3ff9d4ea68930a1a_prof);

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
