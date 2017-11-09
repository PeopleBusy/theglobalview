<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_803218d55feb33d8057ad47f0224669c450ee1f7633a7becf6d84127e64dadc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4d1aefbd6dae8f4aa3c9d6499515f0dd63f38a88933bab2485ab79be83c2cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d1aefbd6dae8f4aa3c9d6499515f0dd63f38a88933bab2485ab79be83c2cc9->enter($__internal_a4d1aefbd6dae8f4aa3c9d6499515f0dd63f38a88933bab2485ab79be83c2cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1ea822c24848acbeb7c085863f007420797c815c0b92f38fc89c6f680365febc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea822c24848acbeb7c085863f007420797c815c0b92f38fc89c6f680365febc->enter($__internal_1ea822c24848acbeb7c085863f007420797c815c0b92f38fc89c6f680365febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d1aefbd6dae8f4aa3c9d6499515f0dd63f38a88933bab2485ab79be83c2cc9->leave($__internal_a4d1aefbd6dae8f4aa3c9d6499515f0dd63f38a88933bab2485ab79be83c2cc9_prof);

        
        $__internal_1ea822c24848acbeb7c085863f007420797c815c0b92f38fc89c6f680365febc->leave($__internal_1ea822c24848acbeb7c085863f007420797c815c0b92f38fc89c6f680365febc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33d2fb6beaf47d3c4d139a6bec136a737d3bb18092bf81e16bba45cc0337cbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d2fb6beaf47d3c4d139a6bec136a737d3bb18092bf81e16bba45cc0337cbf8->enter($__internal_33d2fb6beaf47d3c4d139a6bec136a737d3bb18092bf81e16bba45cc0337cbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61bdb8d77ecc83207282c65ecce6fbc3fbcc490ddb40b69cd39ae0fca7c543be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bdb8d77ecc83207282c65ecce6fbc3fbcc490ddb40b69cd39ae0fca7c543be->enter($__internal_61bdb8d77ecc83207282c65ecce6fbc3fbcc490ddb40b69cd39ae0fca7c543be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_61bdb8d77ecc83207282c65ecce6fbc3fbcc490ddb40b69cd39ae0fca7c543be->leave($__internal_61bdb8d77ecc83207282c65ecce6fbc3fbcc490ddb40b69cd39ae0fca7c543be_prof);

        
        $__internal_33d2fb6beaf47d3c4d139a6bec136a737d3bb18092bf81e16bba45cc0337cbf8->leave($__internal_33d2fb6beaf47d3c4d139a6bec136a737d3bb18092bf81e16bba45cc0337cbf8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_469dd54621f26e6a9674d7a7cd7d5540b396f93b845136bc2ca3cd7af8479619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469dd54621f26e6a9674d7a7cd7d5540b396f93b845136bc2ca3cd7af8479619->enter($__internal_469dd54621f26e6a9674d7a7cd7d5540b396f93b845136bc2ca3cd7af8479619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_066c8d6c679fee70d599e37af88620d1c257e54f414bab186cb13cbbbf7de962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066c8d6c679fee70d599e37af88620d1c257e54f414bab186cb13cbbbf7de962->enter($__internal_066c8d6c679fee70d599e37af88620d1c257e54f414bab186cb13cbbbf7de962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_066c8d6c679fee70d599e37af88620d1c257e54f414bab186cb13cbbbf7de962->leave($__internal_066c8d6c679fee70d599e37af88620d1c257e54f414bab186cb13cbbbf7de962_prof);

        
        $__internal_469dd54621f26e6a9674d7a7cd7d5540b396f93b845136bc2ca3cd7af8479619->leave($__internal_469dd54621f26e6a9674d7a7cd7d5540b396f93b845136bc2ca3cd7af8479619_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c618605adc87e8b0b5c9a783a53e089ed797a9b7225afb9f2038c75865e1d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c618605adc87e8b0b5c9a783a53e089ed797a9b7225afb9f2038c75865e1d0d->enter($__internal_6c618605adc87e8b0b5c9a783a53e089ed797a9b7225afb9f2038c75865e1d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7a732021123f3e3a0f45133794760e60943b379bc3f6119ee35e5609e41d22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a732021123f3e3a0f45133794760e60943b379bc3f6119ee35e5609e41d22c->enter($__internal_f7a732021123f3e3a0f45133794760e60943b379bc3f6119ee35e5609e41d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f7a732021123f3e3a0f45133794760e60943b379bc3f6119ee35e5609e41d22c->leave($__internal_f7a732021123f3e3a0f45133794760e60943b379bc3f6119ee35e5609e41d22c_prof);

        
        $__internal_6c618605adc87e8b0b5c9a783a53e089ed797a9b7225afb9f2038c75865e1d0d->leave($__internal_6c618605adc87e8b0b5c9a783a53e089ed797a9b7225afb9f2038c75865e1d0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
