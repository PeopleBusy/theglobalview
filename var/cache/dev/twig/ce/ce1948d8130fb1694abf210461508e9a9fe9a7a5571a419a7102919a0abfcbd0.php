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
        $__internal_edf296deba3067dceee87590dded2de00b1623c5c31522bfa57d4056bbda677c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf296deba3067dceee87590dded2de00b1623c5c31522bfa57d4056bbda677c->enter($__internal_edf296deba3067dceee87590dded2de00b1623c5c31522bfa57d4056bbda677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d6a4f06e9fdbc312d84610b4f71467e13345157de3c2b31284aa293c530688e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a4f06e9fdbc312d84610b4f71467e13345157de3c2b31284aa293c530688e3->enter($__internal_d6a4f06e9fdbc312d84610b4f71467e13345157de3c2b31284aa293c530688e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf296deba3067dceee87590dded2de00b1623c5c31522bfa57d4056bbda677c->leave($__internal_edf296deba3067dceee87590dded2de00b1623c5c31522bfa57d4056bbda677c_prof);

        
        $__internal_d6a4f06e9fdbc312d84610b4f71467e13345157de3c2b31284aa293c530688e3->leave($__internal_d6a4f06e9fdbc312d84610b4f71467e13345157de3c2b31284aa293c530688e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9368254586945f4c69df2caa5aabe224563fe147c23ced05698e8905519545b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9368254586945f4c69df2caa5aabe224563fe147c23ced05698e8905519545b3->enter($__internal_9368254586945f4c69df2caa5aabe224563fe147c23ced05698e8905519545b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_781024be511aebdb869d5c5fa6a80e76730efad06dcfc790b7d16d7b813d4cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781024be511aebdb869d5c5fa6a80e76730efad06dcfc790b7d16d7b813d4cfb->enter($__internal_781024be511aebdb869d5c5fa6a80e76730efad06dcfc790b7d16d7b813d4cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_781024be511aebdb869d5c5fa6a80e76730efad06dcfc790b7d16d7b813d4cfb->leave($__internal_781024be511aebdb869d5c5fa6a80e76730efad06dcfc790b7d16d7b813d4cfb_prof);

        
        $__internal_9368254586945f4c69df2caa5aabe224563fe147c23ced05698e8905519545b3->leave($__internal_9368254586945f4c69df2caa5aabe224563fe147c23ced05698e8905519545b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_502ad4dbf000a27e275679ce56016214abdb9f0d685f54713c3698353133fd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502ad4dbf000a27e275679ce56016214abdb9f0d685f54713c3698353133fd63->enter($__internal_502ad4dbf000a27e275679ce56016214abdb9f0d685f54713c3698353133fd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54cfc7138d216cc7c1c45e7c4beef6e0108358dac4d8b9d4526b71c6ffd0f518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cfc7138d216cc7c1c45e7c4beef6e0108358dac4d8b9d4526b71c6ffd0f518->enter($__internal_54cfc7138d216cc7c1c45e7c4beef6e0108358dac4d8b9d4526b71c6ffd0f518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54cfc7138d216cc7c1c45e7c4beef6e0108358dac4d8b9d4526b71c6ffd0f518->leave($__internal_54cfc7138d216cc7c1c45e7c4beef6e0108358dac4d8b9d4526b71c6ffd0f518_prof);

        
        $__internal_502ad4dbf000a27e275679ce56016214abdb9f0d685f54713c3698353133fd63->leave($__internal_502ad4dbf000a27e275679ce56016214abdb9f0d685f54713c3698353133fd63_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
