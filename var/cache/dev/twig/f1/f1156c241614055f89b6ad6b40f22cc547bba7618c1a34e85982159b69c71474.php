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
        $__internal_5faaa718477e3f7c56001907bf6d798145f7a6419806606eaa3991a70a53b2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faaa718477e3f7c56001907bf6d798145f7a6419806606eaa3991a70a53b2de->enter($__internal_5faaa718477e3f7c56001907bf6d798145f7a6419806606eaa3991a70a53b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e08cc28d04f84243bc955f8fffabc3929812e852072711f36931de31fead3c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08cc28d04f84243bc955f8fffabc3929812e852072711f36931de31fead3c83->enter($__internal_e08cc28d04f84243bc955f8fffabc3929812e852072711f36931de31fead3c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5faaa718477e3f7c56001907bf6d798145f7a6419806606eaa3991a70a53b2de->leave($__internal_5faaa718477e3f7c56001907bf6d798145f7a6419806606eaa3991a70a53b2de_prof);

        
        $__internal_e08cc28d04f84243bc955f8fffabc3929812e852072711f36931de31fead3c83->leave($__internal_e08cc28d04f84243bc955f8fffabc3929812e852072711f36931de31fead3c83_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a9a0cb89d0b78eea58bcde99e41e282e75d2648a26267b0a05f160097cac3fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a0cb89d0b78eea58bcde99e41e282e75d2648a26267b0a05f160097cac3fb2->enter($__internal_a9a0cb89d0b78eea58bcde99e41e282e75d2648a26267b0a05f160097cac3fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1485c3fcd0745902341a9be3e5153b866ba6aaab9ce1e58ef255c74db36cd686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1485c3fcd0745902341a9be3e5153b866ba6aaab9ce1e58ef255c74db36cd686->enter($__internal_1485c3fcd0745902341a9be3e5153b866ba6aaab9ce1e58ef255c74db36cd686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1485c3fcd0745902341a9be3e5153b866ba6aaab9ce1e58ef255c74db36cd686->leave($__internal_1485c3fcd0745902341a9be3e5153b866ba6aaab9ce1e58ef255c74db36cd686_prof);

        
        $__internal_a9a0cb89d0b78eea58bcde99e41e282e75d2648a26267b0a05f160097cac3fb2->leave($__internal_a9a0cb89d0b78eea58bcde99e41e282e75d2648a26267b0a05f160097cac3fb2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf82323431e401be65f18b418d5cc2c14c05d8331c8793a14455d1b5b24e17f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf82323431e401be65f18b418d5cc2c14c05d8331c8793a14455d1b5b24e17f5->enter($__internal_cf82323431e401be65f18b418d5cc2c14c05d8331c8793a14455d1b5b24e17f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30baf63408d67eb5ff8351fe45986ddd19d607c23d349771144f3f9b67620469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30baf63408d67eb5ff8351fe45986ddd19d607c23d349771144f3f9b67620469->enter($__internal_30baf63408d67eb5ff8351fe45986ddd19d607c23d349771144f3f9b67620469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_30baf63408d67eb5ff8351fe45986ddd19d607c23d349771144f3f9b67620469->leave($__internal_30baf63408d67eb5ff8351fe45986ddd19d607c23d349771144f3f9b67620469_prof);

        
        $__internal_cf82323431e401be65f18b418d5cc2c14c05d8331c8793a14455d1b5b24e17f5->leave($__internal_cf82323431e401be65f18b418d5cc2c14c05d8331c8793a14455d1b5b24e17f5_prof);

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
