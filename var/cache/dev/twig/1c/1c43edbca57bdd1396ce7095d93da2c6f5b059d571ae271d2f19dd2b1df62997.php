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
        $__internal_b034d4f2cdcf09a6c646cf837ca0528732b01467d1a30c9b6439098a740b56b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b034d4f2cdcf09a6c646cf837ca0528732b01467d1a30c9b6439098a740b56b9->enter($__internal_b034d4f2cdcf09a6c646cf837ca0528732b01467d1a30c9b6439098a740b56b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_46469011c613dc0d1b445c69903c55a8bbab025a88573a6de4b11878b852abdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46469011c613dc0d1b445c69903c55a8bbab025a88573a6de4b11878b852abdc->enter($__internal_46469011c613dc0d1b445c69903c55a8bbab025a88573a6de4b11878b852abdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b034d4f2cdcf09a6c646cf837ca0528732b01467d1a30c9b6439098a740b56b9->leave($__internal_b034d4f2cdcf09a6c646cf837ca0528732b01467d1a30c9b6439098a740b56b9_prof);

        
        $__internal_46469011c613dc0d1b445c69903c55a8bbab025a88573a6de4b11878b852abdc->leave($__internal_46469011c613dc0d1b445c69903c55a8bbab025a88573a6de4b11878b852abdc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d41fbc3e8f049905e80ef2726c96c33a29524f9d976e8c6bc5a1832eb7a0974c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41fbc3e8f049905e80ef2726c96c33a29524f9d976e8c6bc5a1832eb7a0974c->enter($__internal_d41fbc3e8f049905e80ef2726c96c33a29524f9d976e8c6bc5a1832eb7a0974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eeb727d37e70258d8f366954389381894c379d655c701bdb0e83c25a4e2ad25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb727d37e70258d8f366954389381894c379d655c701bdb0e83c25a4e2ad25e->enter($__internal_eeb727d37e70258d8f366954389381894c379d655c701bdb0e83c25a4e2ad25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eeb727d37e70258d8f366954389381894c379d655c701bdb0e83c25a4e2ad25e->leave($__internal_eeb727d37e70258d8f366954389381894c379d655c701bdb0e83c25a4e2ad25e_prof);

        
        $__internal_d41fbc3e8f049905e80ef2726c96c33a29524f9d976e8c6bc5a1832eb7a0974c->leave($__internal_d41fbc3e8f049905e80ef2726c96c33a29524f9d976e8c6bc5a1832eb7a0974c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_587624e58cc0df571a8ae601d4a044834a280762b5e37539f3093ad5f5fb7599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587624e58cc0df571a8ae601d4a044834a280762b5e37539f3093ad5f5fb7599->enter($__internal_587624e58cc0df571a8ae601d4a044834a280762b5e37539f3093ad5f5fb7599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8a9c691e33483dbdbff7d285f14b842af0e22b92d438c51040d6b0c19223127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a9c691e33483dbdbff7d285f14b842af0e22b92d438c51040d6b0c19223127->enter($__internal_b8a9c691e33483dbdbff7d285f14b842af0e22b92d438c51040d6b0c19223127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b8a9c691e33483dbdbff7d285f14b842af0e22b92d438c51040d6b0c19223127->leave($__internal_b8a9c691e33483dbdbff7d285f14b842af0e22b92d438c51040d6b0c19223127_prof);

        
        $__internal_587624e58cc0df571a8ae601d4a044834a280762b5e37539f3093ad5f5fb7599->leave($__internal_587624e58cc0df571a8ae601d4a044834a280762b5e37539f3093ad5f5fb7599_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e547a985dd2206f0065edb182f7eeac396d953b9077766df7ae5688db7569564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e547a985dd2206f0065edb182f7eeac396d953b9077766df7ae5688db7569564->enter($__internal_e547a985dd2206f0065edb182f7eeac396d953b9077766df7ae5688db7569564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2e5bff5e285e03d3ad8ae252727960e4471fea94eb8f4de048599336abeb440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e5bff5e285e03d3ad8ae252727960e4471fea94eb8f4de048599336abeb440->enter($__internal_f2e5bff5e285e03d3ad8ae252727960e4471fea94eb8f4de048599336abeb440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f2e5bff5e285e03d3ad8ae252727960e4471fea94eb8f4de048599336abeb440->leave($__internal_f2e5bff5e285e03d3ad8ae252727960e4471fea94eb8f4de048599336abeb440_prof);

        
        $__internal_e547a985dd2206f0065edb182f7eeac396d953b9077766df7ae5688db7569564->leave($__internal_e547a985dd2206f0065edb182f7eeac396d953b9077766df7ae5688db7569564_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
