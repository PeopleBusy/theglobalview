<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ba3ad10205dbd09cb3430d17bce6b00dac1fa02b1ad6b75cfc7d44ed195cd257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a98133fe0e01562ef6d35fcafadaec1b30a2f46f1b965d91d691be71a204a0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98133fe0e01562ef6d35fcafadaec1b30a2f46f1b965d91d691be71a204a0f3->enter($__internal_a98133fe0e01562ef6d35fcafadaec1b30a2f46f1b965d91d691be71a204a0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a8179c439ebbc5bdbc65bce6322b3205783aa212c9ff0bc50b2548d6bbdd71c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8179c439ebbc5bdbc65bce6322b3205783aa212c9ff0bc50b2548d6bbdd71c0->enter($__internal_a8179c439ebbc5bdbc65bce6322b3205783aa212c9ff0bc50b2548d6bbdd71c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98133fe0e01562ef6d35fcafadaec1b30a2f46f1b965d91d691be71a204a0f3->leave($__internal_a98133fe0e01562ef6d35fcafadaec1b30a2f46f1b965d91d691be71a204a0f3_prof);

        
        $__internal_a8179c439ebbc5bdbc65bce6322b3205783aa212c9ff0bc50b2548d6bbdd71c0->leave($__internal_a8179c439ebbc5bdbc65bce6322b3205783aa212c9ff0bc50b2548d6bbdd71c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74764a51e29aefa6ca89c0e3a935525a03c6f760cf157cce09b6c295217482c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74764a51e29aefa6ca89c0e3a935525a03c6f760cf157cce09b6c295217482c4->enter($__internal_74764a51e29aefa6ca89c0e3a935525a03c6f760cf157cce09b6c295217482c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c8442f0e285e36a61fe28185450b5eff23696a570b3cb47f1d2a8599b88fe04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8442f0e285e36a61fe28185450b5eff23696a570b3cb47f1d2a8599b88fe04->enter($__internal_6c8442f0e285e36a61fe28185450b5eff23696a570b3cb47f1d2a8599b88fe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6c8442f0e285e36a61fe28185450b5eff23696a570b3cb47f1d2a8599b88fe04->leave($__internal_6c8442f0e285e36a61fe28185450b5eff23696a570b3cb47f1d2a8599b88fe04_prof);

        
        $__internal_74764a51e29aefa6ca89c0e3a935525a03c6f760cf157cce09b6c295217482c4->leave($__internal_74764a51e29aefa6ca89c0e3a935525a03c6f760cf157cce09b6c295217482c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf3d2382e523391595ce8fc0a64c00d60081f3b52d7ad31d6ae7afc1656d5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf3d2382e523391595ce8fc0a64c00d60081f3b52d7ad31d6ae7afc1656d5bc->enter($__internal_caf3d2382e523391595ce8fc0a64c00d60081f3b52d7ad31d6ae7afc1656d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f70513917129eb7268a5b5b8926ba849a23b05144041cc59b1cf29919891926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f70513917129eb7268a5b5b8926ba849a23b05144041cc59b1cf29919891926->enter($__internal_7f70513917129eb7268a5b5b8926ba849a23b05144041cc59b1cf29919891926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7f70513917129eb7268a5b5b8926ba849a23b05144041cc59b1cf29919891926->leave($__internal_7f70513917129eb7268a5b5b8926ba849a23b05144041cc59b1cf29919891926_prof);

        
        $__internal_caf3d2382e523391595ce8fc0a64c00d60081f3b52d7ad31d6ae7afc1656d5bc->leave($__internal_caf3d2382e523391595ce8fc0a64c00d60081f3b52d7ad31d6ae7afc1656d5bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
