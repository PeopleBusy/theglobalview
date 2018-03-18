<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0fb3b8de6c4f6f53861ca270ace1febd39f7e8f64261c4ee737044bb190a83fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f537847a981215641ea9be0253804a6ba7d37e08da6c85129931f9755727080d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f537847a981215641ea9be0253804a6ba7d37e08da6c85129931f9755727080d->enter($__internal_f537847a981215641ea9be0253804a6ba7d37e08da6c85129931f9755727080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7a2f0f9eaa4cbae93b09fd11ea7b598734616977e4d9dc8f853046654b840928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2f0f9eaa4cbae93b09fd11ea7b598734616977e4d9dc8f853046654b840928->enter($__internal_7a2f0f9eaa4cbae93b09fd11ea7b598734616977e4d9dc8f853046654b840928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f537847a981215641ea9be0253804a6ba7d37e08da6c85129931f9755727080d->leave($__internal_f537847a981215641ea9be0253804a6ba7d37e08da6c85129931f9755727080d_prof);

        
        $__internal_7a2f0f9eaa4cbae93b09fd11ea7b598734616977e4d9dc8f853046654b840928->leave($__internal_7a2f0f9eaa4cbae93b09fd11ea7b598734616977e4d9dc8f853046654b840928_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e8be15eca9daefe67a41e82610beb23e0bffcc929fab26cbb62c1a252c8aaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8be15eca9daefe67a41e82610beb23e0bffcc929fab26cbb62c1a252c8aaa9->enter($__internal_5e8be15eca9daefe67a41e82610beb23e0bffcc929fab26cbb62c1a252c8aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ab3cd459c277d64e4b66641d3e1b6e3860392bd5bd4f0591d457f4e2b9dfd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab3cd459c277d64e4b66641d3e1b6e3860392bd5bd4f0591d457f4e2b9dfd5f->enter($__internal_9ab3cd459c277d64e4b66641d3e1b6e3860392bd5bd4f0591d457f4e2b9dfd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ab3cd459c277d64e4b66641d3e1b6e3860392bd5bd4f0591d457f4e2b9dfd5f->leave($__internal_9ab3cd459c277d64e4b66641d3e1b6e3860392bd5bd4f0591d457f4e2b9dfd5f_prof);

        
        $__internal_5e8be15eca9daefe67a41e82610beb23e0bffcc929fab26cbb62c1a252c8aaa9->leave($__internal_5e8be15eca9daefe67a41e82610beb23e0bffcc929fab26cbb62c1a252c8aaa9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5ea07c4d5bba95555e574e35a6fcebae75912bdfb2621fe9c2d261ee0798884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ea07c4d5bba95555e574e35a6fcebae75912bdfb2621fe9c2d261ee0798884->enter($__internal_b5ea07c4d5bba95555e574e35a6fcebae75912bdfb2621fe9c2d261ee0798884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90a28265ad5bc70c8475e1e68f42b90bb36ffd182b45faaddc51814afb44aa31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a28265ad5bc70c8475e1e68f42b90bb36ffd182b45faaddc51814afb44aa31->enter($__internal_90a28265ad5bc70c8475e1e68f42b90bb36ffd182b45faaddc51814afb44aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_90a28265ad5bc70c8475e1e68f42b90bb36ffd182b45faaddc51814afb44aa31->leave($__internal_90a28265ad5bc70c8475e1e68f42b90bb36ffd182b45faaddc51814afb44aa31_prof);

        
        $__internal_b5ea07c4d5bba95555e574e35a6fcebae75912bdfb2621fe9c2d261ee0798884->leave($__internal_b5ea07c4d5bba95555e574e35a6fcebae75912bdfb2621fe9c2d261ee0798884_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8a87ca9aad525b98653dfd8958607fa3cb832dfb1f8213ce52b4dbd3fb7a012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a87ca9aad525b98653dfd8958607fa3cb832dfb1f8213ce52b4dbd3fb7a012->enter($__internal_f8a87ca9aad525b98653dfd8958607fa3cb832dfb1f8213ce52b4dbd3fb7a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0df01d8e3747cb4775c72a8f957af8f5123525e18259c164975576b93cdc1e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df01d8e3747cb4775c72a8f957af8f5123525e18259c164975576b93cdc1e75->enter($__internal_0df01d8e3747cb4775c72a8f957af8f5123525e18259c164975576b93cdc1e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0df01d8e3747cb4775c72a8f957af8f5123525e18259c164975576b93cdc1e75->leave($__internal_0df01d8e3747cb4775c72a8f957af8f5123525e18259c164975576b93cdc1e75_prof);

        
        $__internal_f8a87ca9aad525b98653dfd8958607fa3cb832dfb1f8213ce52b4dbd3fb7a012->leave($__internal_f8a87ca9aad525b98653dfd8958607fa3cb832dfb1f8213ce52b4dbd3fb7a012_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
