<?php

/* ::home_link.html.twig */
class __TwigTemplate_c298483654a8f1a0b0982a8360e28186e5071512ecfc4550fc513803cfb54f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1570f2c03c01cd94a8a8b56eaa2f7d8af97e991ab3b461114b7184f739d9f08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1570f2c03c01cd94a8a8b56eaa2f7d8af97e991ab3b461114b7184f739d9f08b->enter($__internal_1570f2c03c01cd94a8a8b56eaa2f7d8af97e991ab3b461114b7184f739d9f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home_link.html.twig"));

        $__internal_1cd515ad80f6c87c2f05493ec8cdfe3bd04c279a19e92790664bb05ed43870b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd515ad80f6c87c2f05493ec8cdfe3bd04c279a19e92790664bb05ed43870b5->enter($__internal_1cd515ad80f6c87c2f05493ec8cdfe3bd04c279a19e92790664bb05ed43870b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home_link.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 2
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
";
        }
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 6
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
";
        }
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 10
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
";
        }
        
        $__internal_1570f2c03c01cd94a8a8b56eaa2f7d8af97e991ab3b461114b7184f739d9f08b->leave($__internal_1570f2c03c01cd94a8a8b56eaa2f7d8af97e991ab3b461114b7184f739d9f08b_prof);

        
        $__internal_1cd515ad80f6c87c2f05493ec8cdfe3bd04c279a19e92790664bb05ed43870b5->leave($__internal_1cd515ad80f6c87c2f05493ec8cdfe3bd04c279a19e92790664bb05ed43870b5_prof);

    }

    public function getTemplateName()
    {
        return "::home_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  51 => 9,  48 => 8,  40 => 6,  38 => 5,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (app.request.getLocale() == 'en') %}
        <a class=\"navbar-brand\" href=\"{{ path('global_view_homepage') }}\"><img src=\"{{ asset('/img/logo_global.png') }}\" alt=\"logo\"></a>
{% endif %}

{% if (app.request.getLocale() == 'fr') %}
        <a class=\"navbar-brand\" href=\"{{ path('global_view_homepage') }}\"><img src=\"{{ asset('/img/logo_global.png') }}\" alt=\"logo\"></a>
{% endif %}

{% if (app.request.getLocale() == 'de') %}
        <a class=\"navbar-brand\" href=\"{{ path('global_view_homepage') }}\"><img src=\"{{ asset('/img/logo_global.png') }}\" alt=\"logo\"></a>
{% endif %}", "::home_link.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/app/Resources/views/home_link.html.twig");
    }
}
