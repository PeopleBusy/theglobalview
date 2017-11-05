<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ba3ad10205dbd09cb3430d17bce6b00dac1fa02b1ad6b75cfc7d44ed195cd257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac3824b36f67a0ee3fa4e0d48ac09f8fcf4050ca9d9bf9eec972edf4921743e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3824b36f67a0ee3fa4e0d48ac09f8fcf4050ca9d9bf9eec972edf4921743e6->enter($__internal_ac3824b36f67a0ee3fa4e0d48ac09f8fcf4050ca9d9bf9eec972edf4921743e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f986cbf25cc215e53997fa13e10061f1ad87f9a00705323368b7b9aff242aefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f986cbf25cc215e53997fa13e10061f1ad87f9a00705323368b7b9aff242aefd->enter($__internal_f986cbf25cc215e53997fa13e10061f1ad87f9a00705323368b7b9aff242aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3824b36f67a0ee3fa4e0d48ac09f8fcf4050ca9d9bf9eec972edf4921743e6->leave($__internal_ac3824b36f67a0ee3fa4e0d48ac09f8fcf4050ca9d9bf9eec972edf4921743e6_prof);

        
        $__internal_f986cbf25cc215e53997fa13e10061f1ad87f9a00705323368b7b9aff242aefd->leave($__internal_f986cbf25cc215e53997fa13e10061f1ad87f9a00705323368b7b9aff242aefd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c84b8f45506e3a15271e88e8ff08870524b43cf786ad98533dcdf41ba45b58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c84b8f45506e3a15271e88e8ff08870524b43cf786ad98533dcdf41ba45b58e->enter($__internal_1c84b8f45506e3a15271e88e8ff08870524b43cf786ad98533dcdf41ba45b58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cafd47c677dd8d9386fca5e30bac9fb3562e37a875be96389c5f1e5cf8dd8188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafd47c677dd8d9386fca5e30bac9fb3562e37a875be96389c5f1e5cf8dd8188->enter($__internal_cafd47c677dd8d9386fca5e30bac9fb3562e37a875be96389c5f1e5cf8dd8188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cafd47c677dd8d9386fca5e30bac9fb3562e37a875be96389c5f1e5cf8dd8188->leave($__internal_cafd47c677dd8d9386fca5e30bac9fb3562e37a875be96389c5f1e5cf8dd8188_prof);

        
        $__internal_1c84b8f45506e3a15271e88e8ff08870524b43cf786ad98533dcdf41ba45b58e->leave($__internal_1c84b8f45506e3a15271e88e8ff08870524b43cf786ad98533dcdf41ba45b58e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc7fd4a3ce52104f123121aa5f26fb5cc76a546375972bf7be108f5bb9fad8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7fd4a3ce52104f123121aa5f26fb5cc76a546375972bf7be108f5bb9fad8ec->enter($__internal_bc7fd4a3ce52104f123121aa5f26fb5cc76a546375972bf7be108f5bb9fad8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06b343ac2d0abd54e5e87fdac8ad43242ebfc69271f354c58f0c35269a12a3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b343ac2d0abd54e5e87fdac8ad43242ebfc69271f354c58f0c35269a12a3ce->enter($__internal_06b343ac2d0abd54e5e87fdac8ad43242ebfc69271f354c58f0c35269a12a3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_06b343ac2d0abd54e5e87fdac8ad43242ebfc69271f354c58f0c35269a12a3ce->leave($__internal_06b343ac2d0abd54e5e87fdac8ad43242ebfc69271f354c58f0c35269a12a3ce_prof);

        
        $__internal_bc7fd4a3ce52104f123121aa5f26fb5cc76a546375972bf7be108f5bb9fad8ec->leave($__internal_bc7fd4a3ce52104f123121aa5f26fb5cc76a546375972bf7be108f5bb9fad8ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
