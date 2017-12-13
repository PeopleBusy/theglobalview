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
        $__internal_4bde3c565f34c2001d879577e8cc304de520b0af641fc381687ef11928692c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bde3c565f34c2001d879577e8cc304de520b0af641fc381687ef11928692c60->enter($__internal_4bde3c565f34c2001d879577e8cc304de520b0af641fc381687ef11928692c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0ca074da51f0050d9219d855d25ceb8429fdd8c26dd3f42bdd580ff5063c1a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca074da51f0050d9219d855d25ceb8429fdd8c26dd3f42bdd580ff5063c1a2a->enter($__internal_0ca074da51f0050d9219d855d25ceb8429fdd8c26dd3f42bdd580ff5063c1a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4bde3c565f34c2001d879577e8cc304de520b0af641fc381687ef11928692c60->leave($__internal_4bde3c565f34c2001d879577e8cc304de520b0af641fc381687ef11928692c60_prof);

        
        $__internal_0ca074da51f0050d9219d855d25ceb8429fdd8c26dd3f42bdd580ff5063c1a2a->leave($__internal_0ca074da51f0050d9219d855d25ceb8429fdd8c26dd3f42bdd580ff5063c1a2a_prof);

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
