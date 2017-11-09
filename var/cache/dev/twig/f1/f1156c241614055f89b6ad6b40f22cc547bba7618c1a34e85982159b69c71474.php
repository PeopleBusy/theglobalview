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
        $__internal_ef61d917f5c22bb2cf29559317e37af6bf8241c0b7d2525e9a8f6cb3345c2db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef61d917f5c22bb2cf29559317e37af6bf8241c0b7d2525e9a8f6cb3345c2db8->enter($__internal_ef61d917f5c22bb2cf29559317e37af6bf8241c0b7d2525e9a8f6cb3345c2db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5baf137c77c9674567a23e91734b6340627c6c4fab3d8a6f81bde057ba994f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baf137c77c9674567a23e91734b6340627c6c4fab3d8a6f81bde057ba994f34->enter($__internal_5baf137c77c9674567a23e91734b6340627c6c4fab3d8a6f81bde057ba994f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef61d917f5c22bb2cf29559317e37af6bf8241c0b7d2525e9a8f6cb3345c2db8->leave($__internal_ef61d917f5c22bb2cf29559317e37af6bf8241c0b7d2525e9a8f6cb3345c2db8_prof);

        
        $__internal_5baf137c77c9674567a23e91734b6340627c6c4fab3d8a6f81bde057ba994f34->leave($__internal_5baf137c77c9674567a23e91734b6340627c6c4fab3d8a6f81bde057ba994f34_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8693f767e9d9dea3ba06606f4308cbcd9c470141ea2210aa0cb903d332c1e9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8693f767e9d9dea3ba06606f4308cbcd9c470141ea2210aa0cb903d332c1e9c6->enter($__internal_8693f767e9d9dea3ba06606f4308cbcd9c470141ea2210aa0cb903d332c1e9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d6808e1240381156cd95ad35631245e32918930156a817609d9dfd8942528b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6808e1240381156cd95ad35631245e32918930156a817609d9dfd8942528b60->enter($__internal_d6808e1240381156cd95ad35631245e32918930156a817609d9dfd8942528b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d6808e1240381156cd95ad35631245e32918930156a817609d9dfd8942528b60->leave($__internal_d6808e1240381156cd95ad35631245e32918930156a817609d9dfd8942528b60_prof);

        
        $__internal_8693f767e9d9dea3ba06606f4308cbcd9c470141ea2210aa0cb903d332c1e9c6->leave($__internal_8693f767e9d9dea3ba06606f4308cbcd9c470141ea2210aa0cb903d332c1e9c6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43389fdb62d35d94ed44c8be0853b84eb1416f14ba7c1e4e43b0d91021cc30f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43389fdb62d35d94ed44c8be0853b84eb1416f14ba7c1e4e43b0d91021cc30f0->enter($__internal_43389fdb62d35d94ed44c8be0853b84eb1416f14ba7c1e4e43b0d91021cc30f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4a038c35bf3969d762b7ff8f8622eca3c40e6aa0b1781aee911529845feb10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a038c35bf3969d762b7ff8f8622eca3c40e6aa0b1781aee911529845feb10b->enter($__internal_d4a038c35bf3969d762b7ff8f8622eca3c40e6aa0b1781aee911529845feb10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d4a038c35bf3969d762b7ff8f8622eca3c40e6aa0b1781aee911529845feb10b->leave($__internal_d4a038c35bf3969d762b7ff8f8622eca3c40e6aa0b1781aee911529845feb10b_prof);

        
        $__internal_43389fdb62d35d94ed44c8be0853b84eb1416f14ba7c1e4e43b0d91021cc30f0->leave($__internal_43389fdb62d35d94ed44c8be0853b84eb1416f14ba7c1e4e43b0d91021cc30f0_prof);

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
