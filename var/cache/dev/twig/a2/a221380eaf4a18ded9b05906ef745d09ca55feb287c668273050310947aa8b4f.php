<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_128246a92fadfed2b53a96143f921e90255a935cc8920d11219995c5bb3135ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c06faa14893e1627351ba8e9e4eb88c0919a231e63fa79210c574381549c7b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06faa14893e1627351ba8e9e4eb88c0919a231e63fa79210c574381549c7b79->enter($__internal_c06faa14893e1627351ba8e9e4eb88c0919a231e63fa79210c574381549c7b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e07a823adc7912c54d91d4b4e5dfd7fbaca42b9aab91de7539b2f8af463a41e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07a823adc7912c54d91d4b4e5dfd7fbaca42b9aab91de7539b2f8af463a41e2->enter($__internal_e07a823adc7912c54d91d4b4e5dfd7fbaca42b9aab91de7539b2f8af463a41e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06faa14893e1627351ba8e9e4eb88c0919a231e63fa79210c574381549c7b79->leave($__internal_c06faa14893e1627351ba8e9e4eb88c0919a231e63fa79210c574381549c7b79_prof);

        
        $__internal_e07a823adc7912c54d91d4b4e5dfd7fbaca42b9aab91de7539b2f8af463a41e2->leave($__internal_e07a823adc7912c54d91d4b4e5dfd7fbaca42b9aab91de7539b2f8af463a41e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cf0477dd8f832941586a28923f45c8db33539e24ae5d983a8b79fd43a84a3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf0477dd8f832941586a28923f45c8db33539e24ae5d983a8b79fd43a84a3a8->enter($__internal_5cf0477dd8f832941586a28923f45c8db33539e24ae5d983a8b79fd43a84a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e11a909a04d3f42009be448f220b08f876845c37e6a68d09e2f1e62bfd4086e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11a909a04d3f42009be448f220b08f876845c37e6a68d09e2f1e62bfd4086e6->enter($__internal_e11a909a04d3f42009be448f220b08f876845c37e6a68d09e2f1e62bfd4086e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e11a909a04d3f42009be448f220b08f876845c37e6a68d09e2f1e62bfd4086e6->leave($__internal_e11a909a04d3f42009be448f220b08f876845c37e6a68d09e2f1e62bfd4086e6_prof);

        
        $__internal_5cf0477dd8f832941586a28923f45c8db33539e24ae5d983a8b79fd43a84a3a8->leave($__internal_5cf0477dd8f832941586a28923f45c8db33539e24ae5d983a8b79fd43a84a3a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52233c252241e1511e0cb734f48473fcb0f0c49191e3ee773f03fd86a273646a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52233c252241e1511e0cb734f48473fcb0f0c49191e3ee773f03fd86a273646a->enter($__internal_52233c252241e1511e0cb734f48473fcb0f0c49191e3ee773f03fd86a273646a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64ec7b609fe71cab0ce5f3e95d308a7d34f47a14777cfadce04b4f67a95e4849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ec7b609fe71cab0ce5f3e95d308a7d34f47a14777cfadce04b4f67a95e4849->enter($__internal_64ec7b609fe71cab0ce5f3e95d308a7d34f47a14777cfadce04b4f67a95e4849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64ec7b609fe71cab0ce5f3e95d308a7d34f47a14777cfadce04b4f67a95e4849->leave($__internal_64ec7b609fe71cab0ce5f3e95d308a7d34f47a14777cfadce04b4f67a95e4849_prof);

        
        $__internal_52233c252241e1511e0cb734f48473fcb0f0c49191e3ee773f03fd86a273646a->leave($__internal_52233c252241e1511e0cb734f48473fcb0f0c49191e3ee773f03fd86a273646a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80e1a22151461ec733160ae5bd2531eaf7e4fed80ac06495d3bee5ef56f9aa77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e1a22151461ec733160ae5bd2531eaf7e4fed80ac06495d3bee5ef56f9aa77->enter($__internal_80e1a22151461ec733160ae5bd2531eaf7e4fed80ac06495d3bee5ef56f9aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c30827fab222c3474c644fa71ab86bf555dbaf9a41bbae1c528ecfff4d577624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30827fab222c3474c644fa71ab86bf555dbaf9a41bbae1c528ecfff4d577624->enter($__internal_c30827fab222c3474c644fa71ab86bf555dbaf9a41bbae1c528ecfff4d577624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c30827fab222c3474c644fa71ab86bf555dbaf9a41bbae1c528ecfff4d577624->leave($__internal_c30827fab222c3474c644fa71ab86bf555dbaf9a41bbae1c528ecfff4d577624_prof);

        
        $__internal_80e1a22151461ec733160ae5bd2531eaf7e4fed80ac06495d3bee5ef56f9aa77->leave($__internal_80e1a22151461ec733160ae5bd2531eaf7e4fed80ac06495d3bee5ef56f9aa77_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
