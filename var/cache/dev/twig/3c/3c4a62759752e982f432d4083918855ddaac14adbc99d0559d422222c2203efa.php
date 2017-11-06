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
        $__internal_352a544bef9fa10f22a4242be2bf37d6525ef11758bb2694d164c8d78c5e82c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352a544bef9fa10f22a4242be2bf37d6525ef11758bb2694d164c8d78c5e82c7->enter($__internal_352a544bef9fa10f22a4242be2bf37d6525ef11758bb2694d164c8d78c5e82c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_329ae8d7d321a8a1c61929e08afd636b3a3663a9c03d5f1c63d479ae7b453746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329ae8d7d321a8a1c61929e08afd636b3a3663a9c03d5f1c63d479ae7b453746->enter($__internal_329ae8d7d321a8a1c61929e08afd636b3a3663a9c03d5f1c63d479ae7b453746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352a544bef9fa10f22a4242be2bf37d6525ef11758bb2694d164c8d78c5e82c7->leave($__internal_352a544bef9fa10f22a4242be2bf37d6525ef11758bb2694d164c8d78c5e82c7_prof);

        
        $__internal_329ae8d7d321a8a1c61929e08afd636b3a3663a9c03d5f1c63d479ae7b453746->leave($__internal_329ae8d7d321a8a1c61929e08afd636b3a3663a9c03d5f1c63d479ae7b453746_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfadf24427c325ce9b76963eb1012ad8501c21525840bf8c25f59987abfbb806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfadf24427c325ce9b76963eb1012ad8501c21525840bf8c25f59987abfbb806->enter($__internal_bfadf24427c325ce9b76963eb1012ad8501c21525840bf8c25f59987abfbb806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9cdcb252efeaa23e7a09d34b84417c67811ecbdd6278455c97893330741e6b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdcb252efeaa23e7a09d34b84417c67811ecbdd6278455c97893330741e6b1a->enter($__internal_9cdcb252efeaa23e7a09d34b84417c67811ecbdd6278455c97893330741e6b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9cdcb252efeaa23e7a09d34b84417c67811ecbdd6278455c97893330741e6b1a->leave($__internal_9cdcb252efeaa23e7a09d34b84417c67811ecbdd6278455c97893330741e6b1a_prof);

        
        $__internal_bfadf24427c325ce9b76963eb1012ad8501c21525840bf8c25f59987abfbb806->leave($__internal_bfadf24427c325ce9b76963eb1012ad8501c21525840bf8c25f59987abfbb806_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c2be60f0120b8c0422a9e4f2d370fb5fdb6ee9edaa0741c16f4928bcb9f53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c2be60f0120b8c0422a9e4f2d370fb5fdb6ee9edaa0741c16f4928bcb9f53b->enter($__internal_01c2be60f0120b8c0422a9e4f2d370fb5fdb6ee9edaa0741c16f4928bcb9f53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e631b35e68be073c8f3fc95023cc9cf309ba80dd7e81c10a9b0087cde3367c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e631b35e68be073c8f3fc95023cc9cf309ba80dd7e81c10a9b0087cde3367c9f->enter($__internal_e631b35e68be073c8f3fc95023cc9cf309ba80dd7e81c10a9b0087cde3367c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e631b35e68be073c8f3fc95023cc9cf309ba80dd7e81c10a9b0087cde3367c9f->leave($__internal_e631b35e68be073c8f3fc95023cc9cf309ba80dd7e81c10a9b0087cde3367c9f_prof);

        
        $__internal_01c2be60f0120b8c0422a9e4f2d370fb5fdb6ee9edaa0741c16f4928bcb9f53b->leave($__internal_01c2be60f0120b8c0422a9e4f2d370fb5fdb6ee9edaa0741c16f4928bcb9f53b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea3d5ec9d8d3a91d4d3305ff5da7c4182c03d916b62aebd512df22a57849f575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3d5ec9d8d3a91d4d3305ff5da7c4182c03d916b62aebd512df22a57849f575->enter($__internal_ea3d5ec9d8d3a91d4d3305ff5da7c4182c03d916b62aebd512df22a57849f575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4a09c3cec9db78e6d26500ed68da6b597db3b6b9556dae8f6c5acc55b3a8bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a09c3cec9db78e6d26500ed68da6b597db3b6b9556dae8f6c5acc55b3a8bd0->enter($__internal_a4a09c3cec9db78e6d26500ed68da6b597db3b6b9556dae8f6c5acc55b3a8bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a4a09c3cec9db78e6d26500ed68da6b597db3b6b9556dae8f6c5acc55b3a8bd0->leave($__internal_a4a09c3cec9db78e6d26500ed68da6b597db3b6b9556dae8f6c5acc55b3a8bd0_prof);

        
        $__internal_ea3d5ec9d8d3a91d4d3305ff5da7c4182c03d916b62aebd512df22a57849f575->leave($__internal_ea3d5ec9d8d3a91d4d3305ff5da7c4182c03d916b62aebd512df22a57849f575_prof);

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
