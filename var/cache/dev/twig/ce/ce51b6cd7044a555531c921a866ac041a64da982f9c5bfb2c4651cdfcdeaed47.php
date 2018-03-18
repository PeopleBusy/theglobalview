<?php

/* ::lang_link.html.twig */
class __TwigTemplate_53d7ef4cc8d8c3baeac1bcc1e4907da5666e243f8fb9066050f75592a7fa926a extends Twig_Template
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
        $__internal_66940efe08cd782ad6554a10fcaac147a354d19e5f931c6832996e930ae00eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66940efe08cd782ad6554a10fcaac147a354d19e5f931c6832996e930ae00eff->enter($__internal_66940efe08cd782ad6554a10fcaac147a354d19e5f931c6832996e930ae00eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::lang_link.html.twig"));

        $__internal_fbc86e4291016225dd157ee775e4585f0ce3c3e39d7cb2e1ad3c530dfef809d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc86e4291016225dd157ee775e4585f0ce3c3e39d7cb2e1ad3c530dfef809d9->enter($__internal_fbc86e4291016225dd157ee775e4585f0ce3c3e39d7cb2e1ad3c530dfef809d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::lang_link.html.twig"));

        // line 1
        echo "<li class=\"dropdown\">

    ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 4
            echo "        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-gb\"></span> <b class=\"caret\"></b></a>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 8
            echo "        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-fr\"></span> <b class=\"caret\"></b></a>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 12
            echo "        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-de\"></span> <b class=\"caret\"></b></a>
    ";
        }
        // line 14
        echo "
    <ul class=\"dropdown-menu\" style=\"min-width: 65px !important;\">

        ";
        // line 17
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 18
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
            <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 23
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-gb\"></span></a></li>
            <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 28
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-gb\"></span></a></li>
            <li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
        ";
        }
        // line 31
        echo "
    </ul>
</li>";
        
        $__internal_66940efe08cd782ad6554a10fcaac147a354d19e5f931c6832996e930ae00eff->leave($__internal_66940efe08cd782ad6554a10fcaac147a354d19e5f931c6832996e930ae00eff_prof);

        
        $__internal_fbc86e4291016225dd157ee775e4585f0ce3c3e39d7cb2e1ad3c530dfef809d9->leave($__internal_fbc86e4291016225dd157ee775e4585f0ce3c3e39d7cb2e1ad3c530dfef809d9_prof);

    }

    public function getTemplateName()
    {
        return "::lang_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  95 => 29,  90 => 28,  88 => 27,  85 => 26,  80 => 24,  75 => 23,  73 => 22,  70 => 21,  65 => 19,  60 => 18,  58 => 17,  53 => 14,  49 => 12,  47 => 11,  44 => 10,  40 => 8,  38 => 7,  35 => 6,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"dropdown\">

    {% if (app.request.getLocale() == 'en') %}
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-gb\"></span> <b class=\"caret\"></b></a>
    {% endif %}

    {% if (app.request.getLocale() == 'fr') %}
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-fr\"></span> <b class=\"caret\"></b></a>
    {% endif %}

    {% if (app.request.getLocale() == 'de') %}
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-de\"></span> <b class=\"caret\"></b></a>
    {% endif %}

    <ul class=\"dropdown-menu\" style=\"min-width: 65px !important;\">

        {% if (app.request.getLocale() == 'en') %}
            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'fr'})) }}\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'de'})) }}\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
        {% endif %}

        {% if (app.request.getLocale() == 'fr') %}
            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'en'})) }}\"><span class=\"flag-icon flag-icon-gb\"></span></a></li>
            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'de'})) }}\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
        {% endif %}

        {% if (app.request.getLocale() == 'de') %}
            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'en'})) }}\"><span class=\"flag-icon flag-icon-gb\"></span></a></li>
            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'fr'})) }}\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
        {% endif %}

    </ul>
</li>", "::lang_link.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/app/Resources/views/lang_link.html.twig");
    }
}
