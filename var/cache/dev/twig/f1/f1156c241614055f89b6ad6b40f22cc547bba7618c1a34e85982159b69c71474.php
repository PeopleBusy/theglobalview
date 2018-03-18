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
        $__internal_bb233e8492c9270fd1a9ae1c548247ecc81689892960d0ff9db388acdc46a31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb233e8492c9270fd1a9ae1c548247ecc81689892960d0ff9db388acdc46a31e->enter($__internal_bb233e8492c9270fd1a9ae1c548247ecc81689892960d0ff9db388acdc46a31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8818c770bd682ba02a7998f1e8b1cfaa1c1084889310f2a128b401f9163697a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8818c770bd682ba02a7998f1e8b1cfaa1c1084889310f2a128b401f9163697a4->enter($__internal_8818c770bd682ba02a7998f1e8b1cfaa1c1084889310f2a128b401f9163697a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb233e8492c9270fd1a9ae1c548247ecc81689892960d0ff9db388acdc46a31e->leave($__internal_bb233e8492c9270fd1a9ae1c548247ecc81689892960d0ff9db388acdc46a31e_prof);

        
        $__internal_8818c770bd682ba02a7998f1e8b1cfaa1c1084889310f2a128b401f9163697a4->leave($__internal_8818c770bd682ba02a7998f1e8b1cfaa1c1084889310f2a128b401f9163697a4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d4d4962ecac061ef0e6aabe665802697f53b6c0872835a0b98f0b1b216134f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d4962ecac061ef0e6aabe665802697f53b6c0872835a0b98f0b1b216134f48->enter($__internal_d4d4962ecac061ef0e6aabe665802697f53b6c0872835a0b98f0b1b216134f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7ee556ac1aa084ac6fd3133430447854199f53e3ecad5b983ea1ed5f134f82d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee556ac1aa084ac6fd3133430447854199f53e3ecad5b983ea1ed5f134f82d9->enter($__internal_7ee556ac1aa084ac6fd3133430447854199f53e3ecad5b983ea1ed5f134f82d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7ee556ac1aa084ac6fd3133430447854199f53e3ecad5b983ea1ed5f134f82d9->leave($__internal_7ee556ac1aa084ac6fd3133430447854199f53e3ecad5b983ea1ed5f134f82d9_prof);

        
        $__internal_d4d4962ecac061ef0e6aabe665802697f53b6c0872835a0b98f0b1b216134f48->leave($__internal_d4d4962ecac061ef0e6aabe665802697f53b6c0872835a0b98f0b1b216134f48_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adc748c1ebe779a1b9e4ea02f6c965a299cf80ffe145720d5070a17f1fbc67cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc748c1ebe779a1b9e4ea02f6c965a299cf80ffe145720d5070a17f1fbc67cd->enter($__internal_adc748c1ebe779a1b9e4ea02f6c965a299cf80ffe145720d5070a17f1fbc67cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a52bd0a44e81766fe45c055e2c0208e9d2909201481d205f022781cf742dc357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52bd0a44e81766fe45c055e2c0208e9d2909201481d205f022781cf742dc357->enter($__internal_a52bd0a44e81766fe45c055e2c0208e9d2909201481d205f022781cf742dc357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a52bd0a44e81766fe45c055e2c0208e9d2909201481d205f022781cf742dc357->leave($__internal_a52bd0a44e81766fe45c055e2c0208e9d2909201481d205f022781cf742dc357_prof);

        
        $__internal_adc748c1ebe779a1b9e4ea02f6c965a299cf80ffe145720d5070a17f1fbc67cd->leave($__internal_adc748c1ebe779a1b9e4ea02f6c965a299cf80ffe145720d5070a17f1fbc67cd_prof);

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
