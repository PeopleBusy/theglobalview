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
        $__internal_2b92cd1007574e5d38a66cc4a97078695432f19b8c6cdd6c0bafd02d56471f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b92cd1007574e5d38a66cc4a97078695432f19b8c6cdd6c0bafd02d56471f14->enter($__internal_2b92cd1007574e5d38a66cc4a97078695432f19b8c6cdd6c0bafd02d56471f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_95cef10a9c26a64d205981e32d131c3d0075d6c874413856e99988be5674bb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cef10a9c26a64d205981e32d131c3d0075d6c874413856e99988be5674bb75->enter($__internal_95cef10a9c26a64d205981e32d131c3d0075d6c874413856e99988be5674bb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b92cd1007574e5d38a66cc4a97078695432f19b8c6cdd6c0bafd02d56471f14->leave($__internal_2b92cd1007574e5d38a66cc4a97078695432f19b8c6cdd6c0bafd02d56471f14_prof);

        
        $__internal_95cef10a9c26a64d205981e32d131c3d0075d6c874413856e99988be5674bb75->leave($__internal_95cef10a9c26a64d205981e32d131c3d0075d6c874413856e99988be5674bb75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b5b6c2b49e247f4ba27c9405342254bdd79ab601e582225616fed88d11f12c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5b6c2b49e247f4ba27c9405342254bdd79ab601e582225616fed88d11f12c3->enter($__internal_6b5b6c2b49e247f4ba27c9405342254bdd79ab601e582225616fed88d11f12c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e76510bdd3deebf430df5c9fcf2472e2111364c7e64b162bf774716cbb330062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76510bdd3deebf430df5c9fcf2472e2111364c7e64b162bf774716cbb330062->enter($__internal_e76510bdd3deebf430df5c9fcf2472e2111364c7e64b162bf774716cbb330062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e76510bdd3deebf430df5c9fcf2472e2111364c7e64b162bf774716cbb330062->leave($__internal_e76510bdd3deebf430df5c9fcf2472e2111364c7e64b162bf774716cbb330062_prof);

        
        $__internal_6b5b6c2b49e247f4ba27c9405342254bdd79ab601e582225616fed88d11f12c3->leave($__internal_6b5b6c2b49e247f4ba27c9405342254bdd79ab601e582225616fed88d11f12c3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_982ab5e9a75f345880c676d8afc06ee32281d8ab60953bf61d6f77a00a01dc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982ab5e9a75f345880c676d8afc06ee32281d8ab60953bf61d6f77a00a01dc86->enter($__internal_982ab5e9a75f345880c676d8afc06ee32281d8ab60953bf61d6f77a00a01dc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d7714d18d8b1b03c234dfcdf9d53fade1762ccfdb891b05776a95a9de418404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7714d18d8b1b03c234dfcdf9d53fade1762ccfdb891b05776a95a9de418404->enter($__internal_4d7714d18d8b1b03c234dfcdf9d53fade1762ccfdb891b05776a95a9de418404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4d7714d18d8b1b03c234dfcdf9d53fade1762ccfdb891b05776a95a9de418404->leave($__internal_4d7714d18d8b1b03c234dfcdf9d53fade1762ccfdb891b05776a95a9de418404_prof);

        
        $__internal_982ab5e9a75f345880c676d8afc06ee32281d8ab60953bf61d6f77a00a01dc86->leave($__internal_982ab5e9a75f345880c676d8afc06ee32281d8ab60953bf61d6f77a00a01dc86_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_917ef8d7a65abedc50d3e4548d4e09c9b9770694b48f68650ce6d4298a5d9f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917ef8d7a65abedc50d3e4548d4e09c9b9770694b48f68650ce6d4298a5d9f09->enter($__internal_917ef8d7a65abedc50d3e4548d4e09c9b9770694b48f68650ce6d4298a5d9f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8bf26e1997416a70c7c00abc0d87a0fad192e7fb6a8389535acb57418c7511bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf26e1997416a70c7c00abc0d87a0fad192e7fb6a8389535acb57418c7511bd->enter($__internal_8bf26e1997416a70c7c00abc0d87a0fad192e7fb6a8389535acb57418c7511bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8bf26e1997416a70c7c00abc0d87a0fad192e7fb6a8389535acb57418c7511bd->leave($__internal_8bf26e1997416a70c7c00abc0d87a0fad192e7fb6a8389535acb57418c7511bd_prof);

        
        $__internal_917ef8d7a65abedc50d3e4548d4e09c9b9770694b48f68650ce6d4298a5d9f09->leave($__internal_917ef8d7a65abedc50d3e4548d4e09c9b9770694b48f68650ce6d4298a5d9f09_prof);

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
