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
        $__internal_c5c83402b75fd191e66935654ddf200b4d0fc8aa53a4df8b9f54b852f711d908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c83402b75fd191e66935654ddf200b4d0fc8aa53a4df8b9f54b852f711d908->enter($__internal_c5c83402b75fd191e66935654ddf200b4d0fc8aa53a4df8b9f54b852f711d908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b0bc6331645e22f58183e43d39f4bd6ac0f8c2dde00f7ccf666b11d9393fd939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bc6331645e22f58183e43d39f4bd6ac0f8c2dde00f7ccf666b11d9393fd939->enter($__internal_b0bc6331645e22f58183e43d39f4bd6ac0f8c2dde00f7ccf666b11d9393fd939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c83402b75fd191e66935654ddf200b4d0fc8aa53a4df8b9f54b852f711d908->leave($__internal_c5c83402b75fd191e66935654ddf200b4d0fc8aa53a4df8b9f54b852f711d908_prof);

        
        $__internal_b0bc6331645e22f58183e43d39f4bd6ac0f8c2dde00f7ccf666b11d9393fd939->leave($__internal_b0bc6331645e22f58183e43d39f4bd6ac0f8c2dde00f7ccf666b11d9393fd939_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d3730467855ea5d1e9959a818a04c4964bf46dcc1ac2981d7d8b8e942d57bafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3730467855ea5d1e9959a818a04c4964bf46dcc1ac2981d7d8b8e942d57bafa->enter($__internal_d3730467855ea5d1e9959a818a04c4964bf46dcc1ac2981d7d8b8e942d57bafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9eb32764f52904f2fb660e6f86d11569de6ba23b09e27a77a00b6d28fe4f4609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb32764f52904f2fb660e6f86d11569de6ba23b09e27a77a00b6d28fe4f4609->enter($__internal_9eb32764f52904f2fb660e6f86d11569de6ba23b09e27a77a00b6d28fe4f4609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9eb32764f52904f2fb660e6f86d11569de6ba23b09e27a77a00b6d28fe4f4609->leave($__internal_9eb32764f52904f2fb660e6f86d11569de6ba23b09e27a77a00b6d28fe4f4609_prof);

        
        $__internal_d3730467855ea5d1e9959a818a04c4964bf46dcc1ac2981d7d8b8e942d57bafa->leave($__internal_d3730467855ea5d1e9959a818a04c4964bf46dcc1ac2981d7d8b8e942d57bafa_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae7d4e67e0bb1f6051586855da42d819b41119f9e88eb0bcf0613e1407392ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7d4e67e0bb1f6051586855da42d819b41119f9e88eb0bcf0613e1407392ba1->enter($__internal_ae7d4e67e0bb1f6051586855da42d819b41119f9e88eb0bcf0613e1407392ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce8a3a5701adc0bb69181e4891bf365d4f6e3f4ba8319d9e296261b734db287e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8a3a5701adc0bb69181e4891bf365d4f6e3f4ba8319d9e296261b734db287e->enter($__internal_ce8a3a5701adc0bb69181e4891bf365d4f6e3f4ba8319d9e296261b734db287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ce8a3a5701adc0bb69181e4891bf365d4f6e3f4ba8319d9e296261b734db287e->leave($__internal_ce8a3a5701adc0bb69181e4891bf365d4f6e3f4ba8319d9e296261b734db287e_prof);

        
        $__internal_ae7d4e67e0bb1f6051586855da42d819b41119f9e88eb0bcf0613e1407392ba1->leave($__internal_ae7d4e67e0bb1f6051586855da42d819b41119f9e88eb0bcf0613e1407392ba1_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
