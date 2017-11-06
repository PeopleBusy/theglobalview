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
        $__internal_29e8641dd8ac78cb4f9216451083a24e7605e196d3910a9d178f90956ccc78b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e8641dd8ac78cb4f9216451083a24e7605e196d3910a9d178f90956ccc78b6->enter($__internal_29e8641dd8ac78cb4f9216451083a24e7605e196d3910a9d178f90956ccc78b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3363ad6c5e7ef42771be2b498f36aa5bd02083547dfaa5332380fc6dea4575bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3363ad6c5e7ef42771be2b498f36aa5bd02083547dfaa5332380fc6dea4575bd->enter($__internal_3363ad6c5e7ef42771be2b498f36aa5bd02083547dfaa5332380fc6dea4575bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e8641dd8ac78cb4f9216451083a24e7605e196d3910a9d178f90956ccc78b6->leave($__internal_29e8641dd8ac78cb4f9216451083a24e7605e196d3910a9d178f90956ccc78b6_prof);

        
        $__internal_3363ad6c5e7ef42771be2b498f36aa5bd02083547dfaa5332380fc6dea4575bd->leave($__internal_3363ad6c5e7ef42771be2b498f36aa5bd02083547dfaa5332380fc6dea4575bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b3abe59d192f0538d89261a9fa76fb1bafb7794a6d256b15734c0f6f15d43e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3abe59d192f0538d89261a9fa76fb1bafb7794a6d256b15734c0f6f15d43e6->enter($__internal_6b3abe59d192f0538d89261a9fa76fb1bafb7794a6d256b15734c0f6f15d43e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7604d32b5705963253811a8444446f954eb8dca25d29c62a093051a6e7109f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7604d32b5705963253811a8444446f954eb8dca25d29c62a093051a6e7109f5->enter($__internal_c7604d32b5705963253811a8444446f954eb8dca25d29c62a093051a6e7109f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7604d32b5705963253811a8444446f954eb8dca25d29c62a093051a6e7109f5->leave($__internal_c7604d32b5705963253811a8444446f954eb8dca25d29c62a093051a6e7109f5_prof);

        
        $__internal_6b3abe59d192f0538d89261a9fa76fb1bafb7794a6d256b15734c0f6f15d43e6->leave($__internal_6b3abe59d192f0538d89261a9fa76fb1bafb7794a6d256b15734c0f6f15d43e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_057b919f48c8cf9b6dd0c79b38c52747b3e77a5e8873f0483ac2364dc0719e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057b919f48c8cf9b6dd0c79b38c52747b3e77a5e8873f0483ac2364dc0719e40->enter($__internal_057b919f48c8cf9b6dd0c79b38c52747b3e77a5e8873f0483ac2364dc0719e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_345bd2c6ed37fe52ab38464cc024a7532d11e48765f6ef83da88ca7b25d51a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345bd2c6ed37fe52ab38464cc024a7532d11e48765f6ef83da88ca7b25d51a00->enter($__internal_345bd2c6ed37fe52ab38464cc024a7532d11e48765f6ef83da88ca7b25d51a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_345bd2c6ed37fe52ab38464cc024a7532d11e48765f6ef83da88ca7b25d51a00->leave($__internal_345bd2c6ed37fe52ab38464cc024a7532d11e48765f6ef83da88ca7b25d51a00_prof);

        
        $__internal_057b919f48c8cf9b6dd0c79b38c52747b3e77a5e8873f0483ac2364dc0719e40->leave($__internal_057b919f48c8cf9b6dd0c79b38c52747b3e77a5e8873f0483ac2364dc0719e40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bff50e951298ef21a22b13972719c31211289d86cb6e9829f7a8b89b98017274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff50e951298ef21a22b13972719c31211289d86cb6e9829f7a8b89b98017274->enter($__internal_bff50e951298ef21a22b13972719c31211289d86cb6e9829f7a8b89b98017274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e8367672b94e898116073478bff9aabc4bb70a1cd6fabf4fc7d46d4666043ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8367672b94e898116073478bff9aabc4bb70a1cd6fabf4fc7d46d4666043ec->enter($__internal_2e8367672b94e898116073478bff9aabc4bb70a1cd6fabf4fc7d46d4666043ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e8367672b94e898116073478bff9aabc4bb70a1cd6fabf4fc7d46d4666043ec->leave($__internal_2e8367672b94e898116073478bff9aabc4bb70a1cd6fabf4fc7d46d4666043ec_prof);

        
        $__internal_bff50e951298ef21a22b13972719c31211289d86cb6e9829f7a8b89b98017274->leave($__internal_bff50e951298ef21a22b13972719c31211289d86cb6e9829f7a8b89b98017274_prof);

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
