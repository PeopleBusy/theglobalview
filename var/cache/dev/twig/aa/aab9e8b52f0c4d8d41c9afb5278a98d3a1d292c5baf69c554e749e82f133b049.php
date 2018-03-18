<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fff8390ac5e20fb8c9b35136324e466c3adc4a99fd3fc15c2cedb1f180ffea96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04b1a61b6d3901d7dc67f302eaa4b04b049beda39cd8d8a7fa4eeeea06cad502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b1a61b6d3901d7dc67f302eaa4b04b049beda39cd8d8a7fa4eeeea06cad502->enter($__internal_04b1a61b6d3901d7dc67f302eaa4b04b049beda39cd8d8a7fa4eeeea06cad502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e4bfd8c4e2c830f5c55c80886b8da3f93b273e2e21c4e950e6b640be708cdf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bfd8c4e2c830f5c55c80886b8da3f93b273e2e21c4e950e6b640be708cdf7c->enter($__internal_e4bfd8c4e2c830f5c55c80886b8da3f93b273e2e21c4e950e6b640be708cdf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b1a61b6d3901d7dc67f302eaa4b04b049beda39cd8d8a7fa4eeeea06cad502->leave($__internal_04b1a61b6d3901d7dc67f302eaa4b04b049beda39cd8d8a7fa4eeeea06cad502_prof);

        
        $__internal_e4bfd8c4e2c830f5c55c80886b8da3f93b273e2e21c4e950e6b640be708cdf7c->leave($__internal_e4bfd8c4e2c830f5c55c80886b8da3f93b273e2e21c4e950e6b640be708cdf7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2955641a2e865d755937311dec15b3195077af2d975abe60712a3d27b40095ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2955641a2e865d755937311dec15b3195077af2d975abe60712a3d27b40095ea->enter($__internal_2955641a2e865d755937311dec15b3195077af2d975abe60712a3d27b40095ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28a701a1bd089ace32b6547f7239e0e3c3234a2daba9fca0dcb4a89217c2cbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a701a1bd089ace32b6547f7239e0e3c3234a2daba9fca0dcb4a89217c2cbae->enter($__internal_28a701a1bd089ace32b6547f7239e0e3c3234a2daba9fca0dcb4a89217c2cbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_28a701a1bd089ace32b6547f7239e0e3c3234a2daba9fca0dcb4a89217c2cbae->leave($__internal_28a701a1bd089ace32b6547f7239e0e3c3234a2daba9fca0dcb4a89217c2cbae_prof);

        
        $__internal_2955641a2e865d755937311dec15b3195077af2d975abe60712a3d27b40095ea->leave($__internal_2955641a2e865d755937311dec15b3195077af2d975abe60712a3d27b40095ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3918f4aa4739a1cc3cf6bdfd8724a78b7f787a28fa6d9ebaf5d0bf3a2e28f3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3918f4aa4739a1cc3cf6bdfd8724a78b7f787a28fa6d9ebaf5d0bf3a2e28f3a3->enter($__internal_3918f4aa4739a1cc3cf6bdfd8724a78b7f787a28fa6d9ebaf5d0bf3a2e28f3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a56ca39ef0acfb98fb0dd10240e4891d3cfdded78cc1d35892dc4b93917af1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56ca39ef0acfb98fb0dd10240e4891d3cfdded78cc1d35892dc4b93917af1f1->enter($__internal_a56ca39ef0acfb98fb0dd10240e4891d3cfdded78cc1d35892dc4b93917af1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a56ca39ef0acfb98fb0dd10240e4891d3cfdded78cc1d35892dc4b93917af1f1->leave($__internal_a56ca39ef0acfb98fb0dd10240e4891d3cfdded78cc1d35892dc4b93917af1f1_prof);

        
        $__internal_3918f4aa4739a1cc3cf6bdfd8724a78b7f787a28fa6d9ebaf5d0bf3a2e28f3a3->leave($__internal_3918f4aa4739a1cc3cf6bdfd8724a78b7f787a28fa6d9ebaf5d0bf3a2e28f3a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
