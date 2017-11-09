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
        $__internal_3c16004c017169386d552b05dc70c4166ddf3e020f1ae3c71b901989293eea9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c16004c017169386d552b05dc70c4166ddf3e020f1ae3c71b901989293eea9a->enter($__internal_3c16004c017169386d552b05dc70c4166ddf3e020f1ae3c71b901989293eea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2c969de27077bc6903c12bd74e98c81fbbb159c1af7f939bbaf74a707249b465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c969de27077bc6903c12bd74e98c81fbbb159c1af7f939bbaf74a707249b465->enter($__internal_2c969de27077bc6903c12bd74e98c81fbbb159c1af7f939bbaf74a707249b465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c16004c017169386d552b05dc70c4166ddf3e020f1ae3c71b901989293eea9a->leave($__internal_3c16004c017169386d552b05dc70c4166ddf3e020f1ae3c71b901989293eea9a_prof);

        
        $__internal_2c969de27077bc6903c12bd74e98c81fbbb159c1af7f939bbaf74a707249b465->leave($__internal_2c969de27077bc6903c12bd74e98c81fbbb159c1af7f939bbaf74a707249b465_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_044e4d4701c2ca439a455ffc9455d7b5c068649d02ae9d5653b6c438ecfd81d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044e4d4701c2ca439a455ffc9455d7b5c068649d02ae9d5653b6c438ecfd81d3->enter($__internal_044e4d4701c2ca439a455ffc9455d7b5c068649d02ae9d5653b6c438ecfd81d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4409b73d9dabdfd241832bdfab2614cc798b0a96f88e429dcd6abd2ebd4eb0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4409b73d9dabdfd241832bdfab2614cc798b0a96f88e429dcd6abd2ebd4eb0e4->enter($__internal_4409b73d9dabdfd241832bdfab2614cc798b0a96f88e429dcd6abd2ebd4eb0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4409b73d9dabdfd241832bdfab2614cc798b0a96f88e429dcd6abd2ebd4eb0e4->leave($__internal_4409b73d9dabdfd241832bdfab2614cc798b0a96f88e429dcd6abd2ebd4eb0e4_prof);

        
        $__internal_044e4d4701c2ca439a455ffc9455d7b5c068649d02ae9d5653b6c438ecfd81d3->leave($__internal_044e4d4701c2ca439a455ffc9455d7b5c068649d02ae9d5653b6c438ecfd81d3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e79103b7d351e1dd4b0d7959d79bd5a127f67914a138674bf5b1dbeb8c54a20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79103b7d351e1dd4b0d7959d79bd5a127f67914a138674bf5b1dbeb8c54a20d->enter($__internal_e79103b7d351e1dd4b0d7959d79bd5a127f67914a138674bf5b1dbeb8c54a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d74c2fee601f2d1a1d9669ab57f29e8f63a86af7a5177d0647045f2f8fd6e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d74c2fee601f2d1a1d9669ab57f29e8f63a86af7a5177d0647045f2f8fd6e8c->enter($__internal_8d74c2fee601f2d1a1d9669ab57f29e8f63a86af7a5177d0647045f2f8fd6e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8d74c2fee601f2d1a1d9669ab57f29e8f63a86af7a5177d0647045f2f8fd6e8c->leave($__internal_8d74c2fee601f2d1a1d9669ab57f29e8f63a86af7a5177d0647045f2f8fd6e8c_prof);

        
        $__internal_e79103b7d351e1dd4b0d7959d79bd5a127f67914a138674bf5b1dbeb8c54a20d->leave($__internal_e79103b7d351e1dd4b0d7959d79bd5a127f67914a138674bf5b1dbeb8c54a20d_prof);

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
