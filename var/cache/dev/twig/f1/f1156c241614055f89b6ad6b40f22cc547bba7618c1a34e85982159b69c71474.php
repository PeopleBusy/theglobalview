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
        $__internal_5713a6025b4c2e54adb3f42e720a0bb9f53135531e9a72f697fefd5a120068b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5713a6025b4c2e54adb3f42e720a0bb9f53135531e9a72f697fefd5a120068b4->enter($__internal_5713a6025b4c2e54adb3f42e720a0bb9f53135531e9a72f697fefd5a120068b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9f63835d067bc7c7902435ba654844ac8f576b0150a7b84368180a0938c2cfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f63835d067bc7c7902435ba654844ac8f576b0150a7b84368180a0938c2cfef->enter($__internal_9f63835d067bc7c7902435ba654844ac8f576b0150a7b84368180a0938c2cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5713a6025b4c2e54adb3f42e720a0bb9f53135531e9a72f697fefd5a120068b4->leave($__internal_5713a6025b4c2e54adb3f42e720a0bb9f53135531e9a72f697fefd5a120068b4_prof);

        
        $__internal_9f63835d067bc7c7902435ba654844ac8f576b0150a7b84368180a0938c2cfef->leave($__internal_9f63835d067bc7c7902435ba654844ac8f576b0150a7b84368180a0938c2cfef_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f07e15140f4e17d4643539947e87ad0218f3513a8df070917db15495f9d44664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07e15140f4e17d4643539947e87ad0218f3513a8df070917db15495f9d44664->enter($__internal_f07e15140f4e17d4643539947e87ad0218f3513a8df070917db15495f9d44664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7562b320b0f71e6361a7619a1837207abc9511123efd9ab76ace156b101e61d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7562b320b0f71e6361a7619a1837207abc9511123efd9ab76ace156b101e61d6->enter($__internal_7562b320b0f71e6361a7619a1837207abc9511123efd9ab76ace156b101e61d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7562b320b0f71e6361a7619a1837207abc9511123efd9ab76ace156b101e61d6->leave($__internal_7562b320b0f71e6361a7619a1837207abc9511123efd9ab76ace156b101e61d6_prof);

        
        $__internal_f07e15140f4e17d4643539947e87ad0218f3513a8df070917db15495f9d44664->leave($__internal_f07e15140f4e17d4643539947e87ad0218f3513a8df070917db15495f9d44664_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bebd15337840de66c385100bb478e90541f2797c086cc245064f88f1c3d22029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebd15337840de66c385100bb478e90541f2797c086cc245064f88f1c3d22029->enter($__internal_bebd15337840de66c385100bb478e90541f2797c086cc245064f88f1c3d22029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50ef7ccbebbc86437ff72b7c638a77fdb6f7e2fcc43c3fd9f4ad418b0d1d8150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ef7ccbebbc86437ff72b7c638a77fdb6f7e2fcc43c3fd9f4ad418b0d1d8150->enter($__internal_50ef7ccbebbc86437ff72b7c638a77fdb6f7e2fcc43c3fd9f4ad418b0d1d8150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_50ef7ccbebbc86437ff72b7c638a77fdb6f7e2fcc43c3fd9f4ad418b0d1d8150->leave($__internal_50ef7ccbebbc86437ff72b7c638a77fdb6f7e2fcc43c3fd9f4ad418b0d1d8150_prof);

        
        $__internal_bebd15337840de66c385100bb478e90541f2797c086cc245064f88f1c3d22029->leave($__internal_bebd15337840de66c385100bb478e90541f2797c086cc245064f88f1c3d22029_prof);

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
