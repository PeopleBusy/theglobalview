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
        $__internal_8c8f56e6aa14a974269e9ed2e2e354652ce102f4a7c6ad01ac210b0310594171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8f56e6aa14a974269e9ed2e2e354652ce102f4a7c6ad01ac210b0310594171->enter($__internal_8c8f56e6aa14a974269e9ed2e2e354652ce102f4a7c6ad01ac210b0310594171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f7cad58fd4dbf4db4dcd8bdbc90b1e9ca26750e87f54b01123401b0b6ff0354d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cad58fd4dbf4db4dcd8bdbc90b1e9ca26750e87f54b01123401b0b6ff0354d->enter($__internal_f7cad58fd4dbf4db4dcd8bdbc90b1e9ca26750e87f54b01123401b0b6ff0354d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8f56e6aa14a974269e9ed2e2e354652ce102f4a7c6ad01ac210b0310594171->leave($__internal_8c8f56e6aa14a974269e9ed2e2e354652ce102f4a7c6ad01ac210b0310594171_prof);

        
        $__internal_f7cad58fd4dbf4db4dcd8bdbc90b1e9ca26750e87f54b01123401b0b6ff0354d->leave($__internal_f7cad58fd4dbf4db4dcd8bdbc90b1e9ca26750e87f54b01123401b0b6ff0354d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11ba3a4c5aa03f9c2310c5d42e598733c07d69a42a1afba5aa5a6fca6f3d953d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ba3a4c5aa03f9c2310c5d42e598733c07d69a42a1afba5aa5a6fca6f3d953d->enter($__internal_11ba3a4c5aa03f9c2310c5d42e598733c07d69a42a1afba5aa5a6fca6f3d953d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b81c84887065e718d22792b61d7fa634f926e369c5d381286557ddcc8dd614b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81c84887065e718d22792b61d7fa634f926e369c5d381286557ddcc8dd614b8->enter($__internal_b81c84887065e718d22792b61d7fa634f926e369c5d381286557ddcc8dd614b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b81c84887065e718d22792b61d7fa634f926e369c5d381286557ddcc8dd614b8->leave($__internal_b81c84887065e718d22792b61d7fa634f926e369c5d381286557ddcc8dd614b8_prof);

        
        $__internal_11ba3a4c5aa03f9c2310c5d42e598733c07d69a42a1afba5aa5a6fca6f3d953d->leave($__internal_11ba3a4c5aa03f9c2310c5d42e598733c07d69a42a1afba5aa5a6fca6f3d953d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_27ab2789cca5444613fbc959afa02939dd7fd895edd59c3eab57f21a9eaa9003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ab2789cca5444613fbc959afa02939dd7fd895edd59c3eab57f21a9eaa9003->enter($__internal_27ab2789cca5444613fbc959afa02939dd7fd895edd59c3eab57f21a9eaa9003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4235a32962e07c12b1f21c419c60769cfe93a835e969a2a3fb46fa5a3d84e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4235a32962e07c12b1f21c419c60769cfe93a835e969a2a3fb46fa5a3d84e5c->enter($__internal_b4235a32962e07c12b1f21c419c60769cfe93a835e969a2a3fb46fa5a3d84e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4235a32962e07c12b1f21c419c60769cfe93a835e969a2a3fb46fa5a3d84e5c->leave($__internal_b4235a32962e07c12b1f21c419c60769cfe93a835e969a2a3fb46fa5a3d84e5c_prof);

        
        $__internal_27ab2789cca5444613fbc959afa02939dd7fd895edd59c3eab57f21a9eaa9003->leave($__internal_27ab2789cca5444613fbc959afa02939dd7fd895edd59c3eab57f21a9eaa9003_prof);

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
