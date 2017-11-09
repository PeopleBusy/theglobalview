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
        $__internal_d09ccc84bd8c76ffc78efc923dfee1d57905d1b897bbe4b93123e0b23262e51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09ccc84bd8c76ffc78efc923dfee1d57905d1b897bbe4b93123e0b23262e51d->enter($__internal_d09ccc84bd8c76ffc78efc923dfee1d57905d1b897bbe4b93123e0b23262e51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_099cc5acb964a4db4df37be5f2dc69fde52056428b692b3bcd451bf2f9a92f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099cc5acb964a4db4df37be5f2dc69fde52056428b692b3bcd451bf2f9a92f35->enter($__internal_099cc5acb964a4db4df37be5f2dc69fde52056428b692b3bcd451bf2f9a92f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09ccc84bd8c76ffc78efc923dfee1d57905d1b897bbe4b93123e0b23262e51d->leave($__internal_d09ccc84bd8c76ffc78efc923dfee1d57905d1b897bbe4b93123e0b23262e51d_prof);

        
        $__internal_099cc5acb964a4db4df37be5f2dc69fde52056428b692b3bcd451bf2f9a92f35->leave($__internal_099cc5acb964a4db4df37be5f2dc69fde52056428b692b3bcd451bf2f9a92f35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e6b9f86d2a372209f7debba529dfda3c5e746e058cc06135864781be621716e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6b9f86d2a372209f7debba529dfda3c5e746e058cc06135864781be621716e->enter($__internal_6e6b9f86d2a372209f7debba529dfda3c5e746e058cc06135864781be621716e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_faecb4cdd2de737abc6457ccc61a631ae9f873f5d17254a89d2e4ccca92afea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faecb4cdd2de737abc6457ccc61a631ae9f873f5d17254a89d2e4ccca92afea4->enter($__internal_faecb4cdd2de737abc6457ccc61a631ae9f873f5d17254a89d2e4ccca92afea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_faecb4cdd2de737abc6457ccc61a631ae9f873f5d17254a89d2e4ccca92afea4->leave($__internal_faecb4cdd2de737abc6457ccc61a631ae9f873f5d17254a89d2e4ccca92afea4_prof);

        
        $__internal_6e6b9f86d2a372209f7debba529dfda3c5e746e058cc06135864781be621716e->leave($__internal_6e6b9f86d2a372209f7debba529dfda3c5e746e058cc06135864781be621716e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54e2742570cd9c03b0b34389ef774faca0ae1e20f1fee2cb6a48efb402f00193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e2742570cd9c03b0b34389ef774faca0ae1e20f1fee2cb6a48efb402f00193->enter($__internal_54e2742570cd9c03b0b34389ef774faca0ae1e20f1fee2cb6a48efb402f00193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a9ca3941e1a5765d9a7b0ced56c354d8df519a0376333ca3ea22fe402dd60a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9ca3941e1a5765d9a7b0ced56c354d8df519a0376333ca3ea22fe402dd60a6->enter($__internal_2a9ca3941e1a5765d9a7b0ced56c354d8df519a0376333ca3ea22fe402dd60a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2a9ca3941e1a5765d9a7b0ced56c354d8df519a0376333ca3ea22fe402dd60a6->leave($__internal_2a9ca3941e1a5765d9a7b0ced56c354d8df519a0376333ca3ea22fe402dd60a6_prof);

        
        $__internal_54e2742570cd9c03b0b34389ef774faca0ae1e20f1fee2cb6a48efb402f00193->leave($__internal_54e2742570cd9c03b0b34389ef774faca0ae1e20f1fee2cb6a48efb402f00193_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f847f22d7fae242b327c0aba92dbcd7e096177cb6a33c69de76a88a0e77e1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f847f22d7fae242b327c0aba92dbcd7e096177cb6a33c69de76a88a0e77e1a7->enter($__internal_9f847f22d7fae242b327c0aba92dbcd7e096177cb6a33c69de76a88a0e77e1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ea1fecba79d0477aee55b924e9ce504f72e1b44615f9917fa8e874475f84672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea1fecba79d0477aee55b924e9ce504f72e1b44615f9917fa8e874475f84672->enter($__internal_5ea1fecba79d0477aee55b924e9ce504f72e1b44615f9917fa8e874475f84672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5ea1fecba79d0477aee55b924e9ce504f72e1b44615f9917fa8e874475f84672->leave($__internal_5ea1fecba79d0477aee55b924e9ce504f72e1b44615f9917fa8e874475f84672_prof);

        
        $__internal_9f847f22d7fae242b327c0aba92dbcd7e096177cb6a33c69de76a88a0e77e1a7->leave($__internal_9f847f22d7fae242b327c0aba92dbcd7e096177cb6a33c69de76a88a0e77e1a7_prof);

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
