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
        $__internal_04c4c676922a63f7a3759b2aa2ed5e2b07064aab013905051e59ff78c8919122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c4c676922a63f7a3759b2aa2ed5e2b07064aab013905051e59ff78c8919122->enter($__internal_04c4c676922a63f7a3759b2aa2ed5e2b07064aab013905051e59ff78c8919122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c334a4d94f9b56866c39063648a6e226dd97a28c2886f246d1a5941dda3e8812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c334a4d94f9b56866c39063648a6e226dd97a28c2886f246d1a5941dda3e8812->enter($__internal_c334a4d94f9b56866c39063648a6e226dd97a28c2886f246d1a5941dda3e8812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c4c676922a63f7a3759b2aa2ed5e2b07064aab013905051e59ff78c8919122->leave($__internal_04c4c676922a63f7a3759b2aa2ed5e2b07064aab013905051e59ff78c8919122_prof);

        
        $__internal_c334a4d94f9b56866c39063648a6e226dd97a28c2886f246d1a5941dda3e8812->leave($__internal_c334a4d94f9b56866c39063648a6e226dd97a28c2886f246d1a5941dda3e8812_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28b1d547498ac2d65b55082e58b1373d88c11b9782f540217767b337e6d07483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b1d547498ac2d65b55082e58b1373d88c11b9782f540217767b337e6d07483->enter($__internal_28b1d547498ac2d65b55082e58b1373d88c11b9782f540217767b337e6d07483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c09dafb1557153ac8b5db036f6b0c34a1690e8f264d87513c59f13e9ef47334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c09dafb1557153ac8b5db036f6b0c34a1690e8f264d87513c59f13e9ef47334->enter($__internal_4c09dafb1557153ac8b5db036f6b0c34a1690e8f264d87513c59f13e9ef47334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4c09dafb1557153ac8b5db036f6b0c34a1690e8f264d87513c59f13e9ef47334->leave($__internal_4c09dafb1557153ac8b5db036f6b0c34a1690e8f264d87513c59f13e9ef47334_prof);

        
        $__internal_28b1d547498ac2d65b55082e58b1373d88c11b9782f540217767b337e6d07483->leave($__internal_28b1d547498ac2d65b55082e58b1373d88c11b9782f540217767b337e6d07483_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fad8e6b5d5c6ae378d9c5457822a7dc91c1cf55b999198cd66d001c015c3e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fad8e6b5d5c6ae378d9c5457822a7dc91c1cf55b999198cd66d001c015c3e3a->enter($__internal_2fad8e6b5d5c6ae378d9c5457822a7dc91c1cf55b999198cd66d001c015c3e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c8c48ecf20f7065ac5ee41c3d8e0226eb94bca9f0da846baa30c11532ec590f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8c48ecf20f7065ac5ee41c3d8e0226eb94bca9f0da846baa30c11532ec590f->enter($__internal_1c8c48ecf20f7065ac5ee41c3d8e0226eb94bca9f0da846baa30c11532ec590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c8c48ecf20f7065ac5ee41c3d8e0226eb94bca9f0da846baa30c11532ec590f->leave($__internal_1c8c48ecf20f7065ac5ee41c3d8e0226eb94bca9f0da846baa30c11532ec590f_prof);

        
        $__internal_2fad8e6b5d5c6ae378d9c5457822a7dc91c1cf55b999198cd66d001c015c3e3a->leave($__internal_2fad8e6b5d5c6ae378d9c5457822a7dc91c1cf55b999198cd66d001c015c3e3a_prof);

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
