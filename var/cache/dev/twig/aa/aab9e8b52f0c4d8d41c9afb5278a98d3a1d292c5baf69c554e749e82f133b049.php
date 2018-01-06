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
        $__internal_920df018255a0a05569994fb057b9b86306a68ddc2f4346713df2342da221a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920df018255a0a05569994fb057b9b86306a68ddc2f4346713df2342da221a7b->enter($__internal_920df018255a0a05569994fb057b9b86306a68ddc2f4346713df2342da221a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5fc237ad189d2bae68ad773993166411bd7dc45fca80fcb42b4c1ec7c6a87db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc237ad189d2bae68ad773993166411bd7dc45fca80fcb42b4c1ec7c6a87db5->enter($__internal_5fc237ad189d2bae68ad773993166411bd7dc45fca80fcb42b4c1ec7c6a87db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920df018255a0a05569994fb057b9b86306a68ddc2f4346713df2342da221a7b->leave($__internal_920df018255a0a05569994fb057b9b86306a68ddc2f4346713df2342da221a7b_prof);

        
        $__internal_5fc237ad189d2bae68ad773993166411bd7dc45fca80fcb42b4c1ec7c6a87db5->leave($__internal_5fc237ad189d2bae68ad773993166411bd7dc45fca80fcb42b4c1ec7c6a87db5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2371abff2475d39e68f7481193741f7c90d0923fc3f24eb98c7b820ca1ddc2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2371abff2475d39e68f7481193741f7c90d0923fc3f24eb98c7b820ca1ddc2c0->enter($__internal_2371abff2475d39e68f7481193741f7c90d0923fc3f24eb98c7b820ca1ddc2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc847f574c666f11180e1f884db45d99c89a8310e99aa9fe4f2b3de7677f8a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc847f574c666f11180e1f884db45d99c89a8310e99aa9fe4f2b3de7677f8a54->enter($__internal_bc847f574c666f11180e1f884db45d99c89a8310e99aa9fe4f2b3de7677f8a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bc847f574c666f11180e1f884db45d99c89a8310e99aa9fe4f2b3de7677f8a54->leave($__internal_bc847f574c666f11180e1f884db45d99c89a8310e99aa9fe4f2b3de7677f8a54_prof);

        
        $__internal_2371abff2475d39e68f7481193741f7c90d0923fc3f24eb98c7b820ca1ddc2c0->leave($__internal_2371abff2475d39e68f7481193741f7c90d0923fc3f24eb98c7b820ca1ddc2c0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_76891656ff42b5bc6d59b7200e4190ccf46d7721bfa6b50434a411e4abd33db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76891656ff42b5bc6d59b7200e4190ccf46d7721bfa6b50434a411e4abd33db9->enter($__internal_76891656ff42b5bc6d59b7200e4190ccf46d7721bfa6b50434a411e4abd33db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09e6564e085de4dbf586667c9ced5b319e0afdd1bf9dd03083f0ba47cd13d5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e6564e085de4dbf586667c9ced5b319e0afdd1bf9dd03083f0ba47cd13d5c6->enter($__internal_09e6564e085de4dbf586667c9ced5b319e0afdd1bf9dd03083f0ba47cd13d5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09e6564e085de4dbf586667c9ced5b319e0afdd1bf9dd03083f0ba47cd13d5c6->leave($__internal_09e6564e085de4dbf586667c9ced5b319e0afdd1bf9dd03083f0ba47cd13d5c6_prof);

        
        $__internal_76891656ff42b5bc6d59b7200e4190ccf46d7721bfa6b50434a411e4abd33db9->leave($__internal_76891656ff42b5bc6d59b7200e4190ccf46d7721bfa6b50434a411e4abd33db9_prof);

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
