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
        $__internal_3a3ea02b86d38234f584297fe941835f30df804d2f1356e8f5cb5ec6e18e3f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3ea02b86d38234f584297fe941835f30df804d2f1356e8f5cb5ec6e18e3f36->enter($__internal_3a3ea02b86d38234f584297fe941835f30df804d2f1356e8f5cb5ec6e18e3f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_411b7153254d3683255f84c3dd1d543f7c96c0d83fac8d493fcd5c5e86dc4333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411b7153254d3683255f84c3dd1d543f7c96c0d83fac8d493fcd5c5e86dc4333->enter($__internal_411b7153254d3683255f84c3dd1d543f7c96c0d83fac8d493fcd5c5e86dc4333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3ea02b86d38234f584297fe941835f30df804d2f1356e8f5cb5ec6e18e3f36->leave($__internal_3a3ea02b86d38234f584297fe941835f30df804d2f1356e8f5cb5ec6e18e3f36_prof);

        
        $__internal_411b7153254d3683255f84c3dd1d543f7c96c0d83fac8d493fcd5c5e86dc4333->leave($__internal_411b7153254d3683255f84c3dd1d543f7c96c0d83fac8d493fcd5c5e86dc4333_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38faaef875f0bb3f8935651a852e5a6ffa2a9c0e1c59a7c63a3bdc1cb4628cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38faaef875f0bb3f8935651a852e5a6ffa2a9c0e1c59a7c63a3bdc1cb4628cdf->enter($__internal_38faaef875f0bb3f8935651a852e5a6ffa2a9c0e1c59a7c63a3bdc1cb4628cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7afe4d56040559fc6ea01d658f71195fac76a4bf49336cecc2306d17b5500fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afe4d56040559fc6ea01d658f71195fac76a4bf49336cecc2306d17b5500fde->enter($__internal_7afe4d56040559fc6ea01d658f71195fac76a4bf49336cecc2306d17b5500fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7afe4d56040559fc6ea01d658f71195fac76a4bf49336cecc2306d17b5500fde->leave($__internal_7afe4d56040559fc6ea01d658f71195fac76a4bf49336cecc2306d17b5500fde_prof);

        
        $__internal_38faaef875f0bb3f8935651a852e5a6ffa2a9c0e1c59a7c63a3bdc1cb4628cdf->leave($__internal_38faaef875f0bb3f8935651a852e5a6ffa2a9c0e1c59a7c63a3bdc1cb4628cdf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d1e5afe0e532ded8df2a1f45271645393fa2655444ff2bca4e1c58a43caddac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1e5afe0e532ded8df2a1f45271645393fa2655444ff2bca4e1c58a43caddac->enter($__internal_7d1e5afe0e532ded8df2a1f45271645393fa2655444ff2bca4e1c58a43caddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_975d734ae5eaac4c454dcd0894be80ddc117b2ce11b40385c81e3d4d121afc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975d734ae5eaac4c454dcd0894be80ddc117b2ce11b40385c81e3d4d121afc54->enter($__internal_975d734ae5eaac4c454dcd0894be80ddc117b2ce11b40385c81e3d4d121afc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_975d734ae5eaac4c454dcd0894be80ddc117b2ce11b40385c81e3d4d121afc54->leave($__internal_975d734ae5eaac4c454dcd0894be80ddc117b2ce11b40385c81e3d4d121afc54_prof);

        
        $__internal_7d1e5afe0e532ded8df2a1f45271645393fa2655444ff2bca4e1c58a43caddac->leave($__internal_7d1e5afe0e532ded8df2a1f45271645393fa2655444ff2bca4e1c58a43caddac_prof);

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
