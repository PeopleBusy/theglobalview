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
        $__internal_388dfc9c52e76a69587895af9f2641b52a4527c44d2fbf93ff2cb850871c43a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388dfc9c52e76a69587895af9f2641b52a4527c44d2fbf93ff2cb850871c43a0->enter($__internal_388dfc9c52e76a69587895af9f2641b52a4527c44d2fbf93ff2cb850871c43a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_65a772366ee8319078e5b0cbf515c863f1603cf17e3071afe111933ffe515d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a772366ee8319078e5b0cbf515c863f1603cf17e3071afe111933ffe515d79->enter($__internal_65a772366ee8319078e5b0cbf515c863f1603cf17e3071afe111933ffe515d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_388dfc9c52e76a69587895af9f2641b52a4527c44d2fbf93ff2cb850871c43a0->leave($__internal_388dfc9c52e76a69587895af9f2641b52a4527c44d2fbf93ff2cb850871c43a0_prof);

        
        $__internal_65a772366ee8319078e5b0cbf515c863f1603cf17e3071afe111933ffe515d79->leave($__internal_65a772366ee8319078e5b0cbf515c863f1603cf17e3071afe111933ffe515d79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfd0ee2093f30a22e03edf7e36f5a406b7036b5a31e090a3ff18796631bb5d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd0ee2093f30a22e03edf7e36f5a406b7036b5a31e090a3ff18796631bb5d2f->enter($__internal_cfd0ee2093f30a22e03edf7e36f5a406b7036b5a31e090a3ff18796631bb5d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28b65bfd7de3d53a9e6ddce0770874b868ce33d58ba91e1a38eafe9483f6d0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b65bfd7de3d53a9e6ddce0770874b868ce33d58ba91e1a38eafe9483f6d0ed->enter($__internal_28b65bfd7de3d53a9e6ddce0770874b868ce33d58ba91e1a38eafe9483f6d0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_28b65bfd7de3d53a9e6ddce0770874b868ce33d58ba91e1a38eafe9483f6d0ed->leave($__internal_28b65bfd7de3d53a9e6ddce0770874b868ce33d58ba91e1a38eafe9483f6d0ed_prof);

        
        $__internal_cfd0ee2093f30a22e03edf7e36f5a406b7036b5a31e090a3ff18796631bb5d2f->leave($__internal_cfd0ee2093f30a22e03edf7e36f5a406b7036b5a31e090a3ff18796631bb5d2f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58faa9cf97299f0182308cbbb54293695e43f22907c67d22a6b460cec7f2b22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58faa9cf97299f0182308cbbb54293695e43f22907c67d22a6b460cec7f2b22a->enter($__internal_58faa9cf97299f0182308cbbb54293695e43f22907c67d22a6b460cec7f2b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_011f6c717b3e4f3968ece5e24b3cecd5f56fbecddffeb88db70e24108e9d093e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011f6c717b3e4f3968ece5e24b3cecd5f56fbecddffeb88db70e24108e9d093e->enter($__internal_011f6c717b3e4f3968ece5e24b3cecd5f56fbecddffeb88db70e24108e9d093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_011f6c717b3e4f3968ece5e24b3cecd5f56fbecddffeb88db70e24108e9d093e->leave($__internal_011f6c717b3e4f3968ece5e24b3cecd5f56fbecddffeb88db70e24108e9d093e_prof);

        
        $__internal_58faa9cf97299f0182308cbbb54293695e43f22907c67d22a6b460cec7f2b22a->leave($__internal_58faa9cf97299f0182308cbbb54293695e43f22907c67d22a6b460cec7f2b22a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ccdf3c74e1984af288d0bb306579228ea9bae881780b27b9046665263437113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccdf3c74e1984af288d0bb306579228ea9bae881780b27b9046665263437113->enter($__internal_4ccdf3c74e1984af288d0bb306579228ea9bae881780b27b9046665263437113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bad134bd324facf50d714371c37c0aac34f06bdfe55375f0c674279f896f57cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad134bd324facf50d714371c37c0aac34f06bdfe55375f0c674279f896f57cc->enter($__internal_bad134bd324facf50d714371c37c0aac34f06bdfe55375f0c674279f896f57cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bad134bd324facf50d714371c37c0aac34f06bdfe55375f0c674279f896f57cc->leave($__internal_bad134bd324facf50d714371c37c0aac34f06bdfe55375f0c674279f896f57cc_prof);

        
        $__internal_4ccdf3c74e1984af288d0bb306579228ea9bae881780b27b9046665263437113->leave($__internal_4ccdf3c74e1984af288d0bb306579228ea9bae881780b27b9046665263437113_prof);

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
