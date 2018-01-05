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
        $__internal_ff8652a5d0340e3640e776dd4c937550e8a21b40ebd89c3b299bed92f727a3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8652a5d0340e3640e776dd4c937550e8a21b40ebd89c3b299bed92f727a3b5->enter($__internal_ff8652a5d0340e3640e776dd4c937550e8a21b40ebd89c3b299bed92f727a3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_adf6165ecc6c2343596b2c7bcfc94180173ce472efc1da8d2215d859a54cc304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf6165ecc6c2343596b2c7bcfc94180173ce472efc1da8d2215d859a54cc304->enter($__internal_adf6165ecc6c2343596b2c7bcfc94180173ce472efc1da8d2215d859a54cc304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8652a5d0340e3640e776dd4c937550e8a21b40ebd89c3b299bed92f727a3b5->leave($__internal_ff8652a5d0340e3640e776dd4c937550e8a21b40ebd89c3b299bed92f727a3b5_prof);

        
        $__internal_adf6165ecc6c2343596b2c7bcfc94180173ce472efc1da8d2215d859a54cc304->leave($__internal_adf6165ecc6c2343596b2c7bcfc94180173ce472efc1da8d2215d859a54cc304_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b513b0b92403cbc70918841ce97c37897f8e971958f1c8856916761bee2cee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b513b0b92403cbc70918841ce97c37897f8e971958f1c8856916761bee2cee8->enter($__internal_6b513b0b92403cbc70918841ce97c37897f8e971958f1c8856916761bee2cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3b9792980ab384689e02a39d68855a3d888b87645d5922e645043ee28e44d083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9792980ab384689e02a39d68855a3d888b87645d5922e645043ee28e44d083->enter($__internal_3b9792980ab384689e02a39d68855a3d888b87645d5922e645043ee28e44d083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3b9792980ab384689e02a39d68855a3d888b87645d5922e645043ee28e44d083->leave($__internal_3b9792980ab384689e02a39d68855a3d888b87645d5922e645043ee28e44d083_prof);

        
        $__internal_6b513b0b92403cbc70918841ce97c37897f8e971958f1c8856916761bee2cee8->leave($__internal_6b513b0b92403cbc70918841ce97c37897f8e971958f1c8856916761bee2cee8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_280fdba717238942a59bf916ecdd3088a098e33a9424eb2ca45a334e22021489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280fdba717238942a59bf916ecdd3088a098e33a9424eb2ca45a334e22021489->enter($__internal_280fdba717238942a59bf916ecdd3088a098e33a9424eb2ca45a334e22021489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3c548eba883d767c95094dfe5153cd6173cba49b2c5ef5a3e66eab7e91e18a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c548eba883d767c95094dfe5153cd6173cba49b2c5ef5a3e66eab7e91e18a1->enter($__internal_b3c548eba883d767c95094dfe5153cd6173cba49b2c5ef5a3e66eab7e91e18a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3c548eba883d767c95094dfe5153cd6173cba49b2c5ef5a3e66eab7e91e18a1->leave($__internal_b3c548eba883d767c95094dfe5153cd6173cba49b2c5ef5a3e66eab7e91e18a1_prof);

        
        $__internal_280fdba717238942a59bf916ecdd3088a098e33a9424eb2ca45a334e22021489->leave($__internal_280fdba717238942a59bf916ecdd3088a098e33a9424eb2ca45a334e22021489_prof);

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
