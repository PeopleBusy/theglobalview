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
        $__internal_5d6be24289fa22bcff07816593c1646a8d5cd1203c3847bd1cd8c7a9fbaa8fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6be24289fa22bcff07816593c1646a8d5cd1203c3847bd1cd8c7a9fbaa8fd6->enter($__internal_5d6be24289fa22bcff07816593c1646a8d5cd1203c3847bd1cd8c7a9fbaa8fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_27fa6821eb8b96dba8ba5b4f64248d9b753f8c47d4bc1adf0dc302948aa59016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fa6821eb8b96dba8ba5b4f64248d9b753f8c47d4bc1adf0dc302948aa59016->enter($__internal_27fa6821eb8b96dba8ba5b4f64248d9b753f8c47d4bc1adf0dc302948aa59016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d6be24289fa22bcff07816593c1646a8d5cd1203c3847bd1cd8c7a9fbaa8fd6->leave($__internal_5d6be24289fa22bcff07816593c1646a8d5cd1203c3847bd1cd8c7a9fbaa8fd6_prof);

        
        $__internal_27fa6821eb8b96dba8ba5b4f64248d9b753f8c47d4bc1adf0dc302948aa59016->leave($__internal_27fa6821eb8b96dba8ba5b4f64248d9b753f8c47d4bc1adf0dc302948aa59016_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ccad7df74290908caa71c46539e981aa1281d28c78744b14bdfbfe5206645dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccad7df74290908caa71c46539e981aa1281d28c78744b14bdfbfe5206645dd->enter($__internal_2ccad7df74290908caa71c46539e981aa1281d28c78744b14bdfbfe5206645dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96a6a050ef067ba2bddbefd6750565231875c44e15b0b77cd83d28b33d51a8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a6a050ef067ba2bddbefd6750565231875c44e15b0b77cd83d28b33d51a8dd->enter($__internal_96a6a050ef067ba2bddbefd6750565231875c44e15b0b77cd83d28b33d51a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_96a6a050ef067ba2bddbefd6750565231875c44e15b0b77cd83d28b33d51a8dd->leave($__internal_96a6a050ef067ba2bddbefd6750565231875c44e15b0b77cd83d28b33d51a8dd_prof);

        
        $__internal_2ccad7df74290908caa71c46539e981aa1281d28c78744b14bdfbfe5206645dd->leave($__internal_2ccad7df74290908caa71c46539e981aa1281d28c78744b14bdfbfe5206645dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f03d07e17b849e3776864d5aa04d2f6791509b09ff32216b28d4626c240105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f03d07e17b849e3776864d5aa04d2f6791509b09ff32216b28d4626c240105->enter($__internal_09f03d07e17b849e3776864d5aa04d2f6791509b09ff32216b28d4626c240105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_506d7d565dceac28bafa4c3ac7079eed12c1b0f0faecf50d85d47d5dbc30a7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506d7d565dceac28bafa4c3ac7079eed12c1b0f0faecf50d85d47d5dbc30a7c7->enter($__internal_506d7d565dceac28bafa4c3ac7079eed12c1b0f0faecf50d85d47d5dbc30a7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_506d7d565dceac28bafa4c3ac7079eed12c1b0f0faecf50d85d47d5dbc30a7c7->leave($__internal_506d7d565dceac28bafa4c3ac7079eed12c1b0f0faecf50d85d47d5dbc30a7c7_prof);

        
        $__internal_09f03d07e17b849e3776864d5aa04d2f6791509b09ff32216b28d4626c240105->leave($__internal_09f03d07e17b849e3776864d5aa04d2f6791509b09ff32216b28d4626c240105_prof);

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
