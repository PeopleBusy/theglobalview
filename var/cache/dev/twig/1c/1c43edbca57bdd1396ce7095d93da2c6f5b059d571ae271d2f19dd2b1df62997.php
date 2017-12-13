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
        $__internal_ef7a0e3629cd5da79a78aaaab06f22e5b0b25acc13d5f0cff4f574083a49fe98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7a0e3629cd5da79a78aaaab06f22e5b0b25acc13d5f0cff4f574083a49fe98->enter($__internal_ef7a0e3629cd5da79a78aaaab06f22e5b0b25acc13d5f0cff4f574083a49fe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_50484f4ea8f0bb8347c0fad693dd7fbafe34571cb1fc23504a2e341b9935d858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50484f4ea8f0bb8347c0fad693dd7fbafe34571cb1fc23504a2e341b9935d858->enter($__internal_50484f4ea8f0bb8347c0fad693dd7fbafe34571cb1fc23504a2e341b9935d858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7a0e3629cd5da79a78aaaab06f22e5b0b25acc13d5f0cff4f574083a49fe98->leave($__internal_ef7a0e3629cd5da79a78aaaab06f22e5b0b25acc13d5f0cff4f574083a49fe98_prof);

        
        $__internal_50484f4ea8f0bb8347c0fad693dd7fbafe34571cb1fc23504a2e341b9935d858->leave($__internal_50484f4ea8f0bb8347c0fad693dd7fbafe34571cb1fc23504a2e341b9935d858_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e41ddc67621ae3135c880566add99644132e528874fb70da7bb0fc65c52300e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e41ddc67621ae3135c880566add99644132e528874fb70da7bb0fc65c52300e->enter($__internal_0e41ddc67621ae3135c880566add99644132e528874fb70da7bb0fc65c52300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f027e3f3c74126dc981bb3309f9a16836ebc32b48a9b45635c9b5c1243227afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f027e3f3c74126dc981bb3309f9a16836ebc32b48a9b45635c9b5c1243227afe->enter($__internal_f027e3f3c74126dc981bb3309f9a16836ebc32b48a9b45635c9b5c1243227afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f027e3f3c74126dc981bb3309f9a16836ebc32b48a9b45635c9b5c1243227afe->leave($__internal_f027e3f3c74126dc981bb3309f9a16836ebc32b48a9b45635c9b5c1243227afe_prof);

        
        $__internal_0e41ddc67621ae3135c880566add99644132e528874fb70da7bb0fc65c52300e->leave($__internal_0e41ddc67621ae3135c880566add99644132e528874fb70da7bb0fc65c52300e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa3987da86b5240e1512c1148afe917455154e92404648abe9b6a8ababd1846d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3987da86b5240e1512c1148afe917455154e92404648abe9b6a8ababd1846d->enter($__internal_aa3987da86b5240e1512c1148afe917455154e92404648abe9b6a8ababd1846d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa99fbda387b0fddd9ce9f6dc3b79374fcf24e7d8870dc6af0c754d896b5a9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa99fbda387b0fddd9ce9f6dc3b79374fcf24e7d8870dc6af0c754d896b5a9ce->enter($__internal_fa99fbda387b0fddd9ce9f6dc3b79374fcf24e7d8870dc6af0c754d896b5a9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fa99fbda387b0fddd9ce9f6dc3b79374fcf24e7d8870dc6af0c754d896b5a9ce->leave($__internal_fa99fbda387b0fddd9ce9f6dc3b79374fcf24e7d8870dc6af0c754d896b5a9ce_prof);

        
        $__internal_aa3987da86b5240e1512c1148afe917455154e92404648abe9b6a8ababd1846d->leave($__internal_aa3987da86b5240e1512c1148afe917455154e92404648abe9b6a8ababd1846d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_323269229f9a7261f18df80566a1af3e749ef7b10ea6579dd9a6d1dcbb061a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323269229f9a7261f18df80566a1af3e749ef7b10ea6579dd9a6d1dcbb061a47->enter($__internal_323269229f9a7261f18df80566a1af3e749ef7b10ea6579dd9a6d1dcbb061a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9416f56dd28545e1f7da7176c03e13ba13eb89966bc322cf8303d1ac35cc9f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9416f56dd28545e1f7da7176c03e13ba13eb89966bc322cf8303d1ac35cc9f5a->enter($__internal_9416f56dd28545e1f7da7176c03e13ba13eb89966bc322cf8303d1ac35cc9f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9416f56dd28545e1f7da7176c03e13ba13eb89966bc322cf8303d1ac35cc9f5a->leave($__internal_9416f56dd28545e1f7da7176c03e13ba13eb89966bc322cf8303d1ac35cc9f5a_prof);

        
        $__internal_323269229f9a7261f18df80566a1af3e749ef7b10ea6579dd9a6d1dcbb061a47->leave($__internal_323269229f9a7261f18df80566a1af3e749ef7b10ea6579dd9a6d1dcbb061a47_prof);

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
