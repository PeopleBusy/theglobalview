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
        $__internal_4a2c7cdfa1633a42fc106c8f2990cb294eb1ef0e12bc1656cf9158726e3db687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2c7cdfa1633a42fc106c8f2990cb294eb1ef0e12bc1656cf9158726e3db687->enter($__internal_4a2c7cdfa1633a42fc106c8f2990cb294eb1ef0e12bc1656cf9158726e3db687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_29c94148d9246a9e662fa83ca3e46398d7740ce9c0e733570967786d75c07bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c94148d9246a9e662fa83ca3e46398d7740ce9c0e733570967786d75c07bb4->enter($__internal_29c94148d9246a9e662fa83ca3e46398d7740ce9c0e733570967786d75c07bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2c7cdfa1633a42fc106c8f2990cb294eb1ef0e12bc1656cf9158726e3db687->leave($__internal_4a2c7cdfa1633a42fc106c8f2990cb294eb1ef0e12bc1656cf9158726e3db687_prof);

        
        $__internal_29c94148d9246a9e662fa83ca3e46398d7740ce9c0e733570967786d75c07bb4->leave($__internal_29c94148d9246a9e662fa83ca3e46398d7740ce9c0e733570967786d75c07bb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58a1b86da02b346fd752e1c255af1a1724bd88099b41b7bbaef47009498ca651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a1b86da02b346fd752e1c255af1a1724bd88099b41b7bbaef47009498ca651->enter($__internal_58a1b86da02b346fd752e1c255af1a1724bd88099b41b7bbaef47009498ca651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_490f746789227b25fd83923bca03a814a84a1411097e3be729cde0d64d35adec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490f746789227b25fd83923bca03a814a84a1411097e3be729cde0d64d35adec->enter($__internal_490f746789227b25fd83923bca03a814a84a1411097e3be729cde0d64d35adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_490f746789227b25fd83923bca03a814a84a1411097e3be729cde0d64d35adec->leave($__internal_490f746789227b25fd83923bca03a814a84a1411097e3be729cde0d64d35adec_prof);

        
        $__internal_58a1b86da02b346fd752e1c255af1a1724bd88099b41b7bbaef47009498ca651->leave($__internal_58a1b86da02b346fd752e1c255af1a1724bd88099b41b7bbaef47009498ca651_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_81f732f9f1720f2db9d45b82151b48763d6be79f26c4d2a54a8356573ca9cd88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f732f9f1720f2db9d45b82151b48763d6be79f26c4d2a54a8356573ca9cd88->enter($__internal_81f732f9f1720f2db9d45b82151b48763d6be79f26c4d2a54a8356573ca9cd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d1193932d065044ccf50aaaccc44e76c54e66a11a4359234f810d0feacddc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1193932d065044ccf50aaaccc44e76c54e66a11a4359234f810d0feacddc6a->enter($__internal_9d1193932d065044ccf50aaaccc44e76c54e66a11a4359234f810d0feacddc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d1193932d065044ccf50aaaccc44e76c54e66a11a4359234f810d0feacddc6a->leave($__internal_9d1193932d065044ccf50aaaccc44e76c54e66a11a4359234f810d0feacddc6a_prof);

        
        $__internal_81f732f9f1720f2db9d45b82151b48763d6be79f26c4d2a54a8356573ca9cd88->leave($__internal_81f732f9f1720f2db9d45b82151b48763d6be79f26c4d2a54a8356573ca9cd88_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_62c09444effdcd348dc53078d30b61c099b06ea4cde5a3817dcb18978a7cf663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c09444effdcd348dc53078d30b61c099b06ea4cde5a3817dcb18978a7cf663->enter($__internal_62c09444effdcd348dc53078d30b61c099b06ea4cde5a3817dcb18978a7cf663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8baca82ecdbb769a54d098415270c1e7626a8e1f96da0aabd68d2ed05774ffa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8baca82ecdbb769a54d098415270c1e7626a8e1f96da0aabd68d2ed05774ffa0->enter($__internal_8baca82ecdbb769a54d098415270c1e7626a8e1f96da0aabd68d2ed05774ffa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8baca82ecdbb769a54d098415270c1e7626a8e1f96da0aabd68d2ed05774ffa0->leave($__internal_8baca82ecdbb769a54d098415270c1e7626a8e1f96da0aabd68d2ed05774ffa0_prof);

        
        $__internal_62c09444effdcd348dc53078d30b61c099b06ea4cde5a3817dcb18978a7cf663->leave($__internal_62c09444effdcd348dc53078d30b61c099b06ea4cde5a3817dcb18978a7cf663_prof);

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
