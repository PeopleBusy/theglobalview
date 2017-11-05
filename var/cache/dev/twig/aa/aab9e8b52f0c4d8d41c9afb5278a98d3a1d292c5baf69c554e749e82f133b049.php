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
        $__internal_fe219c62a55a21d3f114583562d5fa08efd59873e2f57c19efc10026f51639a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe219c62a55a21d3f114583562d5fa08efd59873e2f57c19efc10026f51639a2->enter($__internal_fe219c62a55a21d3f114583562d5fa08efd59873e2f57c19efc10026f51639a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c5d2e4366ca950e4c4616666587dd986ac9b1cde369517dff14cb92cd97f9e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d2e4366ca950e4c4616666587dd986ac9b1cde369517dff14cb92cd97f9e9c->enter($__internal_c5d2e4366ca950e4c4616666587dd986ac9b1cde369517dff14cb92cd97f9e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe219c62a55a21d3f114583562d5fa08efd59873e2f57c19efc10026f51639a2->leave($__internal_fe219c62a55a21d3f114583562d5fa08efd59873e2f57c19efc10026f51639a2_prof);

        
        $__internal_c5d2e4366ca950e4c4616666587dd986ac9b1cde369517dff14cb92cd97f9e9c->leave($__internal_c5d2e4366ca950e4c4616666587dd986ac9b1cde369517dff14cb92cd97f9e9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68ae9385bfaf1d881fbb613f32e5dcd04b5e474d7d07c36e12d33c1c98952ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ae9385bfaf1d881fbb613f32e5dcd04b5e474d7d07c36e12d33c1c98952ce1->enter($__internal_68ae9385bfaf1d881fbb613f32e5dcd04b5e474d7d07c36e12d33c1c98952ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d94d9b5d556bcfcf499a500b434e302cfc9235a7f69145fe8cb3a3b48ea07e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d94d9b5d556bcfcf499a500b434e302cfc9235a7f69145fe8cb3a3b48ea07e6->enter($__internal_2d94d9b5d556bcfcf499a500b434e302cfc9235a7f69145fe8cb3a3b48ea07e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2d94d9b5d556bcfcf499a500b434e302cfc9235a7f69145fe8cb3a3b48ea07e6->leave($__internal_2d94d9b5d556bcfcf499a500b434e302cfc9235a7f69145fe8cb3a3b48ea07e6_prof);

        
        $__internal_68ae9385bfaf1d881fbb613f32e5dcd04b5e474d7d07c36e12d33c1c98952ce1->leave($__internal_68ae9385bfaf1d881fbb613f32e5dcd04b5e474d7d07c36e12d33c1c98952ce1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6db56fbfa44892fec27e467f82fc3288bf974e8caa94ebdfb2add8906b0ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6db56fbfa44892fec27e467f82fc3288bf974e8caa94ebdfb2add8906b0ec2->enter($__internal_4d6db56fbfa44892fec27e467f82fc3288bf974e8caa94ebdfb2add8906b0ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c6d5cae95b8dc515218a242a6bcaa003c5eab40f46513637a2b9963aa039714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6d5cae95b8dc515218a242a6bcaa003c5eab40f46513637a2b9963aa039714->enter($__internal_8c6d5cae95b8dc515218a242a6bcaa003c5eab40f46513637a2b9963aa039714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c6d5cae95b8dc515218a242a6bcaa003c5eab40f46513637a2b9963aa039714->leave($__internal_8c6d5cae95b8dc515218a242a6bcaa003c5eab40f46513637a2b9963aa039714_prof);

        
        $__internal_4d6db56fbfa44892fec27e467f82fc3288bf974e8caa94ebdfb2add8906b0ec2->leave($__internal_4d6db56fbfa44892fec27e467f82fc3288bf974e8caa94ebdfb2add8906b0ec2_prof);

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
