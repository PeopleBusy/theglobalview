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
        $__internal_c4abe6ad3185ff24d60fc474e4e3230476cd80580cf13cb6b69f47574707acfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4abe6ad3185ff24d60fc474e4e3230476cd80580cf13cb6b69f47574707acfe->enter($__internal_c4abe6ad3185ff24d60fc474e4e3230476cd80580cf13cb6b69f47574707acfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7fbf03ff2e74e8c12a5e88c46c1839f20b8b4189b86f9bced06d2883c12cdba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbf03ff2e74e8c12a5e88c46c1839f20b8b4189b86f9bced06d2883c12cdba6->enter($__internal_7fbf03ff2e74e8c12a5e88c46c1839f20b8b4189b86f9bced06d2883c12cdba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4abe6ad3185ff24d60fc474e4e3230476cd80580cf13cb6b69f47574707acfe->leave($__internal_c4abe6ad3185ff24d60fc474e4e3230476cd80580cf13cb6b69f47574707acfe_prof);

        
        $__internal_7fbf03ff2e74e8c12a5e88c46c1839f20b8b4189b86f9bced06d2883c12cdba6->leave($__internal_7fbf03ff2e74e8c12a5e88c46c1839f20b8b4189b86f9bced06d2883c12cdba6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca524a3fd6577961810580bad480f704ff93999293264791e05b60b417674e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca524a3fd6577961810580bad480f704ff93999293264791e05b60b417674e09->enter($__internal_ca524a3fd6577961810580bad480f704ff93999293264791e05b60b417674e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08e07edb0d1d37f5e3c53ee573f5b3a1c86af60c60c37bc4073161447a1247f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e07edb0d1d37f5e3c53ee573f5b3a1c86af60c60c37bc4073161447a1247f1->enter($__internal_08e07edb0d1d37f5e3c53ee573f5b3a1c86af60c60c37bc4073161447a1247f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_08e07edb0d1d37f5e3c53ee573f5b3a1c86af60c60c37bc4073161447a1247f1->leave($__internal_08e07edb0d1d37f5e3c53ee573f5b3a1c86af60c60c37bc4073161447a1247f1_prof);

        
        $__internal_ca524a3fd6577961810580bad480f704ff93999293264791e05b60b417674e09->leave($__internal_ca524a3fd6577961810580bad480f704ff93999293264791e05b60b417674e09_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a92c8e8e91d0a95cfc93f2b7f82579dd80b29207c3f143f8c526278d2627a9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92c8e8e91d0a95cfc93f2b7f82579dd80b29207c3f143f8c526278d2627a9e9->enter($__internal_a92c8e8e91d0a95cfc93f2b7f82579dd80b29207c3f143f8c526278d2627a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b09f3c427360e0f5ad4ef095f29c249c4cb057283aee8ae22f98bb0287437c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f3c427360e0f5ad4ef095f29c249c4cb057283aee8ae22f98bb0287437c9d->enter($__internal_b09f3c427360e0f5ad4ef095f29c249c4cb057283aee8ae22f98bb0287437c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b09f3c427360e0f5ad4ef095f29c249c4cb057283aee8ae22f98bb0287437c9d->leave($__internal_b09f3c427360e0f5ad4ef095f29c249c4cb057283aee8ae22f98bb0287437c9d_prof);

        
        $__internal_a92c8e8e91d0a95cfc93f2b7f82579dd80b29207c3f143f8c526278d2627a9e9->leave($__internal_a92c8e8e91d0a95cfc93f2b7f82579dd80b29207c3f143f8c526278d2627a9e9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_03a4eb43d28dc69dcf086b145f5c8ad55214d301330d301b760d6ec3b01f5979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a4eb43d28dc69dcf086b145f5c8ad55214d301330d301b760d6ec3b01f5979->enter($__internal_03a4eb43d28dc69dcf086b145f5c8ad55214d301330d301b760d6ec3b01f5979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18bea88565237ec58077915bc3639ee200622537a437c63c228bc687ef4bd461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bea88565237ec58077915bc3639ee200622537a437c63c228bc687ef4bd461->enter($__internal_18bea88565237ec58077915bc3639ee200622537a437c63c228bc687ef4bd461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_18bea88565237ec58077915bc3639ee200622537a437c63c228bc687ef4bd461->leave($__internal_18bea88565237ec58077915bc3639ee200622537a437c63c228bc687ef4bd461_prof);

        
        $__internal_03a4eb43d28dc69dcf086b145f5c8ad55214d301330d301b760d6ec3b01f5979->leave($__internal_03a4eb43d28dc69dcf086b145f5c8ad55214d301330d301b760d6ec3b01f5979_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
