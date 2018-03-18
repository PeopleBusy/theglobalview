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
        $__internal_09472d3c098398e0b3e23fdfd468179d0d90119e1208c163c1b7a54ffd20a27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09472d3c098398e0b3e23fdfd468179d0d90119e1208c163c1b7a54ffd20a27d->enter($__internal_09472d3c098398e0b3e23fdfd468179d0d90119e1208c163c1b7a54ffd20a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c23eb9c448acc9e110759cf674194af236c7915490de89a81f2b479f7066d942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23eb9c448acc9e110759cf674194af236c7915490de89a81f2b479f7066d942->enter($__internal_c23eb9c448acc9e110759cf674194af236c7915490de89a81f2b479f7066d942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09472d3c098398e0b3e23fdfd468179d0d90119e1208c163c1b7a54ffd20a27d->leave($__internal_09472d3c098398e0b3e23fdfd468179d0d90119e1208c163c1b7a54ffd20a27d_prof);

        
        $__internal_c23eb9c448acc9e110759cf674194af236c7915490de89a81f2b479f7066d942->leave($__internal_c23eb9c448acc9e110759cf674194af236c7915490de89a81f2b479f7066d942_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0ab003d4e6bf205c2880e1af8a1d703ecdd94eb160f0647686b99617daf3fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ab003d4e6bf205c2880e1af8a1d703ecdd94eb160f0647686b99617daf3fd1->enter($__internal_d0ab003d4e6bf205c2880e1af8a1d703ecdd94eb160f0647686b99617daf3fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85f23e0c758a922514581136e296f9f11a80256caa63bf3f975e4c8b6d705dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f23e0c758a922514581136e296f9f11a80256caa63bf3f975e4c8b6d705dfc->enter($__internal_85f23e0c758a922514581136e296f9f11a80256caa63bf3f975e4c8b6d705dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_85f23e0c758a922514581136e296f9f11a80256caa63bf3f975e4c8b6d705dfc->leave($__internal_85f23e0c758a922514581136e296f9f11a80256caa63bf3f975e4c8b6d705dfc_prof);

        
        $__internal_d0ab003d4e6bf205c2880e1af8a1d703ecdd94eb160f0647686b99617daf3fd1->leave($__internal_d0ab003d4e6bf205c2880e1af8a1d703ecdd94eb160f0647686b99617daf3fd1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_816c07aa3d9048914727f3f92b5507cf9b15d238a39c6f00a9a8c77d0078111e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816c07aa3d9048914727f3f92b5507cf9b15d238a39c6f00a9a8c77d0078111e->enter($__internal_816c07aa3d9048914727f3f92b5507cf9b15d238a39c6f00a9a8c77d0078111e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1219c177ec3a1d40c6e3c5e1a97a3af7ba676c38460c676132b153fae594d7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1219c177ec3a1d40c6e3c5e1a97a3af7ba676c38460c676132b153fae594d7ca->enter($__internal_1219c177ec3a1d40c6e3c5e1a97a3af7ba676c38460c676132b153fae594d7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1219c177ec3a1d40c6e3c5e1a97a3af7ba676c38460c676132b153fae594d7ca->leave($__internal_1219c177ec3a1d40c6e3c5e1a97a3af7ba676c38460c676132b153fae594d7ca_prof);

        
        $__internal_816c07aa3d9048914727f3f92b5507cf9b15d238a39c6f00a9a8c77d0078111e->leave($__internal_816c07aa3d9048914727f3f92b5507cf9b15d238a39c6f00a9a8c77d0078111e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67a454e1e0cb1f63140d15e15d91dfe76d4595d50318d3b5bad18004e44854d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67a454e1e0cb1f63140d15e15d91dfe76d4595d50318d3b5bad18004e44854d->enter($__internal_c67a454e1e0cb1f63140d15e15d91dfe76d4595d50318d3b5bad18004e44854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ca9c8aa214319c4816ae3ff0468f0db41253d118d5aff2a0db7b24e38f1c8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca9c8aa214319c4816ae3ff0468f0db41253d118d5aff2a0db7b24e38f1c8c0->enter($__internal_1ca9c8aa214319c4816ae3ff0468f0db41253d118d5aff2a0db7b24e38f1c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1ca9c8aa214319c4816ae3ff0468f0db41253d118d5aff2a0db7b24e38f1c8c0->leave($__internal_1ca9c8aa214319c4816ae3ff0468f0db41253d118d5aff2a0db7b24e38f1c8c0_prof);

        
        $__internal_c67a454e1e0cb1f63140d15e15d91dfe76d4595d50318d3b5bad18004e44854d->leave($__internal_c67a454e1e0cb1f63140d15e15d91dfe76d4595d50318d3b5bad18004e44854d_prof);

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
