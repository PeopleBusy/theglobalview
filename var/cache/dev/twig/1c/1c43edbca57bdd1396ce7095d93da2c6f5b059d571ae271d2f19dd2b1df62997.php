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
        $__internal_621ec164a1487de99a1ede0eba78190c3e5af92e9c6a79c48df36b348b056633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621ec164a1487de99a1ede0eba78190c3e5af92e9c6a79c48df36b348b056633->enter($__internal_621ec164a1487de99a1ede0eba78190c3e5af92e9c6a79c48df36b348b056633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_44ab2cbf8110d75f46d24c8ab3255ad94486fb2c8bb40fec011ad964ab64bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ab2cbf8110d75f46d24c8ab3255ad94486fb2c8bb40fec011ad964ab64bb1e->enter($__internal_44ab2cbf8110d75f46d24c8ab3255ad94486fb2c8bb40fec011ad964ab64bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_621ec164a1487de99a1ede0eba78190c3e5af92e9c6a79c48df36b348b056633->leave($__internal_621ec164a1487de99a1ede0eba78190c3e5af92e9c6a79c48df36b348b056633_prof);

        
        $__internal_44ab2cbf8110d75f46d24c8ab3255ad94486fb2c8bb40fec011ad964ab64bb1e->leave($__internal_44ab2cbf8110d75f46d24c8ab3255ad94486fb2c8bb40fec011ad964ab64bb1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d243cafa4ff69d081ab98385bebd54b5f3877a410cc8e4525ddcb19bc1df1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d243cafa4ff69d081ab98385bebd54b5f3877a410cc8e4525ddcb19bc1df1da->enter($__internal_8d243cafa4ff69d081ab98385bebd54b5f3877a410cc8e4525ddcb19bc1df1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bb06c53a88ae8d57832cbcdeb400cfae1e34620934d01fd02c7131bb22e507d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb06c53a88ae8d57832cbcdeb400cfae1e34620934d01fd02c7131bb22e507d->enter($__internal_2bb06c53a88ae8d57832cbcdeb400cfae1e34620934d01fd02c7131bb22e507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2bb06c53a88ae8d57832cbcdeb400cfae1e34620934d01fd02c7131bb22e507d->leave($__internal_2bb06c53a88ae8d57832cbcdeb400cfae1e34620934d01fd02c7131bb22e507d_prof);

        
        $__internal_8d243cafa4ff69d081ab98385bebd54b5f3877a410cc8e4525ddcb19bc1df1da->leave($__internal_8d243cafa4ff69d081ab98385bebd54b5f3877a410cc8e4525ddcb19bc1df1da_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecbbc9c27eb29406b3305232525aad063c8c55a70fa5f3293ecda92ff4dc133a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbbc9c27eb29406b3305232525aad063c8c55a70fa5f3293ecda92ff4dc133a->enter($__internal_ecbbc9c27eb29406b3305232525aad063c8c55a70fa5f3293ecda92ff4dc133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3ecfc0200ae309f4768170b1c256194f6b81b0b194912bda49d749c505f80d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ecfc0200ae309f4768170b1c256194f6b81b0b194912bda49d749c505f80d8->enter($__internal_c3ecfc0200ae309f4768170b1c256194f6b81b0b194912bda49d749c505f80d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c3ecfc0200ae309f4768170b1c256194f6b81b0b194912bda49d749c505f80d8->leave($__internal_c3ecfc0200ae309f4768170b1c256194f6b81b0b194912bda49d749c505f80d8_prof);

        
        $__internal_ecbbc9c27eb29406b3305232525aad063c8c55a70fa5f3293ecda92ff4dc133a->leave($__internal_ecbbc9c27eb29406b3305232525aad063c8c55a70fa5f3293ecda92ff4dc133a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc1ce515604187594985232f8bbdb07a4a8aad66085a4d87bd8d78edf86a3816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1ce515604187594985232f8bbdb07a4a8aad66085a4d87bd8d78edf86a3816->enter($__internal_cc1ce515604187594985232f8bbdb07a4a8aad66085a4d87bd8d78edf86a3816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c1c31057f2bc473a9893f63a89a9fa0fe8093c9e4e544322ee500bb558e24c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1c31057f2bc473a9893f63a89a9fa0fe8093c9e4e544322ee500bb558e24c6->enter($__internal_7c1c31057f2bc473a9893f63a89a9fa0fe8093c9e4e544322ee500bb558e24c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7c1c31057f2bc473a9893f63a89a9fa0fe8093c9e4e544322ee500bb558e24c6->leave($__internal_7c1c31057f2bc473a9893f63a89a9fa0fe8093c9e4e544322ee500bb558e24c6_prof);

        
        $__internal_cc1ce515604187594985232f8bbdb07a4a8aad66085a4d87bd8d78edf86a3816->leave($__internal_cc1ce515604187594985232f8bbdb07a4a8aad66085a4d87bd8d78edf86a3816_prof);

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
