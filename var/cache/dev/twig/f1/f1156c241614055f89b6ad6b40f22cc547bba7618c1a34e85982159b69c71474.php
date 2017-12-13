<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_93231e928c85d88a098f15399d02c25c920e3b8ceaee58abd73130fb094b7bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2152d3a0e085b7394471e998d9f9606201dbd509e2fa399ecc2d5736947ac6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2152d3a0e085b7394471e998d9f9606201dbd509e2fa399ecc2d5736947ac6f7->enter($__internal_2152d3a0e085b7394471e998d9f9606201dbd509e2fa399ecc2d5736947ac6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5fb2c3c4115e7203805e1cedaa5af8b8dafd55ecf66f2c39406fdd4a460bad0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb2c3c4115e7203805e1cedaa5af8b8dafd55ecf66f2c39406fdd4a460bad0f->enter($__internal_5fb2c3c4115e7203805e1cedaa5af8b8dafd55ecf66f2c39406fdd4a460bad0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2152d3a0e085b7394471e998d9f9606201dbd509e2fa399ecc2d5736947ac6f7->leave($__internal_2152d3a0e085b7394471e998d9f9606201dbd509e2fa399ecc2d5736947ac6f7_prof);

        
        $__internal_5fb2c3c4115e7203805e1cedaa5af8b8dafd55ecf66f2c39406fdd4a460bad0f->leave($__internal_5fb2c3c4115e7203805e1cedaa5af8b8dafd55ecf66f2c39406fdd4a460bad0f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c143f80ad0e2b5a5e34178746599cf7f4555e057d14f358ada040a6059845ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c143f80ad0e2b5a5e34178746599cf7f4555e057d14f358ada040a6059845ed0->enter($__internal_c143f80ad0e2b5a5e34178746599cf7f4555e057d14f358ada040a6059845ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_76f4bd89150484858ba8b5b550de28f74c43c53d6d0671940f53b59b4ae0f0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f4bd89150484858ba8b5b550de28f74c43c53d6d0671940f53b59b4ae0f0fb->enter($__internal_76f4bd89150484858ba8b5b550de28f74c43c53d6d0671940f53b59b4ae0f0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_76f4bd89150484858ba8b5b550de28f74c43c53d6d0671940f53b59b4ae0f0fb->leave($__internal_76f4bd89150484858ba8b5b550de28f74c43c53d6d0671940f53b59b4ae0f0fb_prof);

        
        $__internal_c143f80ad0e2b5a5e34178746599cf7f4555e057d14f358ada040a6059845ed0->leave($__internal_c143f80ad0e2b5a5e34178746599cf7f4555e057d14f358ada040a6059845ed0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e085da8a0209b841d51b472b2ffa69697c280df2695108853d14398401381a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e085da8a0209b841d51b472b2ffa69697c280df2695108853d14398401381a6->enter($__internal_0e085da8a0209b841d51b472b2ffa69697c280df2695108853d14398401381a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89aed355fa6d9d8f8650834dfcaa0e33304904ccca45f0ac1ed212a1e7a40f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89aed355fa6d9d8f8650834dfcaa0e33304904ccca45f0ac1ed212a1e7a40f85->enter($__internal_89aed355fa6d9d8f8650834dfcaa0e33304904ccca45f0ac1ed212a1e7a40f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_89aed355fa6d9d8f8650834dfcaa0e33304904ccca45f0ac1ed212a1e7a40f85->leave($__internal_89aed355fa6d9d8f8650834dfcaa0e33304904ccca45f0ac1ed212a1e7a40f85_prof);

        
        $__internal_0e085da8a0209b841d51b472b2ffa69697c280df2695108853d14398401381a6->leave($__internal_0e085da8a0209b841d51b472b2ffa69697c280df2695108853d14398401381a6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
