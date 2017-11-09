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
        $__internal_7632852679f53ef0c64bfff84df06edb3d245765372d63c177a9939910d78d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7632852679f53ef0c64bfff84df06edb3d245765372d63c177a9939910d78d63->enter($__internal_7632852679f53ef0c64bfff84df06edb3d245765372d63c177a9939910d78d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a8bbfe62563030576df800cf08c9799a8de8af3f50165c4996ae1d5c7f68b7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bbfe62563030576df800cf08c9799a8de8af3f50165c4996ae1d5c7f68b7b9->enter($__internal_a8bbfe62563030576df800cf08c9799a8de8af3f50165c4996ae1d5c7f68b7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7632852679f53ef0c64bfff84df06edb3d245765372d63c177a9939910d78d63->leave($__internal_7632852679f53ef0c64bfff84df06edb3d245765372d63c177a9939910d78d63_prof);

        
        $__internal_a8bbfe62563030576df800cf08c9799a8de8af3f50165c4996ae1d5c7f68b7b9->leave($__internal_a8bbfe62563030576df800cf08c9799a8de8af3f50165c4996ae1d5c7f68b7b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a309ba4ec8347ee5ca9c6acaa99c49aab277d7ed264eac2c051f9fcd5384576f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a309ba4ec8347ee5ca9c6acaa99c49aab277d7ed264eac2c051f9fcd5384576f->enter($__internal_a309ba4ec8347ee5ca9c6acaa99c49aab277d7ed264eac2c051f9fcd5384576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f29061cca642030819addb396b656e7bd58ad9c9de396ca8a6d002d694f1051a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29061cca642030819addb396b656e7bd58ad9c9de396ca8a6d002d694f1051a->enter($__internal_f29061cca642030819addb396b656e7bd58ad9c9de396ca8a6d002d694f1051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f29061cca642030819addb396b656e7bd58ad9c9de396ca8a6d002d694f1051a->leave($__internal_f29061cca642030819addb396b656e7bd58ad9c9de396ca8a6d002d694f1051a_prof);

        
        $__internal_a309ba4ec8347ee5ca9c6acaa99c49aab277d7ed264eac2c051f9fcd5384576f->leave($__internal_a309ba4ec8347ee5ca9c6acaa99c49aab277d7ed264eac2c051f9fcd5384576f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_61e50868f6b0a821b1340735fe794e0f73d226dcdc79c58259b11999784a29ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e50868f6b0a821b1340735fe794e0f73d226dcdc79c58259b11999784a29ba->enter($__internal_61e50868f6b0a821b1340735fe794e0f73d226dcdc79c58259b11999784a29ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_814f56d1a3275d39a49eb9cc7990190206e1b10e710f94b4cdf6c707a594b5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814f56d1a3275d39a49eb9cc7990190206e1b10e710f94b4cdf6c707a594b5eb->enter($__internal_814f56d1a3275d39a49eb9cc7990190206e1b10e710f94b4cdf6c707a594b5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_814f56d1a3275d39a49eb9cc7990190206e1b10e710f94b4cdf6c707a594b5eb->leave($__internal_814f56d1a3275d39a49eb9cc7990190206e1b10e710f94b4cdf6c707a594b5eb_prof);

        
        $__internal_61e50868f6b0a821b1340735fe794e0f73d226dcdc79c58259b11999784a29ba->leave($__internal_61e50868f6b0a821b1340735fe794e0f73d226dcdc79c58259b11999784a29ba_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
