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
        $__internal_01ef0491796bbc7b778f6b94fe5dbb55ca1961b1e8ea6d07a2b111ef45da9028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ef0491796bbc7b778f6b94fe5dbb55ca1961b1e8ea6d07a2b111ef45da9028->enter($__internal_01ef0491796bbc7b778f6b94fe5dbb55ca1961b1e8ea6d07a2b111ef45da9028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home_link.html.twig"));

        $__internal_ce27004bd350dff14e769fe1e1f8de90c6f11e9433f3247ca234d50ed9825668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce27004bd350dff14e769fe1e1f8de90c6f11e9433f3247ca234d50ed9825668->enter($__internal_ce27004bd350dff14e769fe1e1f8de90c6f11e9433f3247ca234d50ed9825668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home_link.html.twig"));

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
        
        $__internal_01ef0491796bbc7b778f6b94fe5dbb55ca1961b1e8ea6d07a2b111ef45da9028->leave($__internal_01ef0491796bbc7b778f6b94fe5dbb55ca1961b1e8ea6d07a2b111ef45da9028_prof);

        
        $__internal_ce27004bd350dff14e769fe1e1f8de90c6f11e9433f3247ca234d50ed9825668->leave($__internal_ce27004bd350dff14e769fe1e1f8de90c6f11e9433f3247ca234d50ed9825668_prof);

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
