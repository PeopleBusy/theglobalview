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
        $__internal_570fa49d8ea8a5d1a05500520f82f3b0147af61b224b8abece8e5c82d1ca588d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570fa49d8ea8a5d1a05500520f82f3b0147af61b224b8abece8e5c82d1ca588d->enter($__internal_570fa49d8ea8a5d1a05500520f82f3b0147af61b224b8abece8e5c82d1ca588d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4b00be1158ebf7a06fb2a3cdcba133ab70a432e8d2bf2330ff0aab9702b80ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b00be1158ebf7a06fb2a3cdcba133ab70a432e8d2bf2330ff0aab9702b80ca5->enter($__internal_4b00be1158ebf7a06fb2a3cdcba133ab70a432e8d2bf2330ff0aab9702b80ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_570fa49d8ea8a5d1a05500520f82f3b0147af61b224b8abece8e5c82d1ca588d->leave($__internal_570fa49d8ea8a5d1a05500520f82f3b0147af61b224b8abece8e5c82d1ca588d_prof);

        
        $__internal_4b00be1158ebf7a06fb2a3cdcba133ab70a432e8d2bf2330ff0aab9702b80ca5->leave($__internal_4b00be1158ebf7a06fb2a3cdcba133ab70a432e8d2bf2330ff0aab9702b80ca5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09c55a88a43d610423b55366780dc978fc47f440e4bef898ae05d9ab0fb05207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c55a88a43d610423b55366780dc978fc47f440e4bef898ae05d9ab0fb05207->enter($__internal_09c55a88a43d610423b55366780dc978fc47f440e4bef898ae05d9ab0fb05207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05db27641aa8e47d5e878be5b5ec897367cfa616466da55bbda806479460b21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05db27641aa8e47d5e878be5b5ec897367cfa616466da55bbda806479460b21f->enter($__internal_05db27641aa8e47d5e878be5b5ec897367cfa616466da55bbda806479460b21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05db27641aa8e47d5e878be5b5ec897367cfa616466da55bbda806479460b21f->leave($__internal_05db27641aa8e47d5e878be5b5ec897367cfa616466da55bbda806479460b21f_prof);

        
        $__internal_09c55a88a43d610423b55366780dc978fc47f440e4bef898ae05d9ab0fb05207->leave($__internal_09c55a88a43d610423b55366780dc978fc47f440e4bef898ae05d9ab0fb05207_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66cb8845dd68bf002161197a6ff806ddccd073641d404af75632e44b33252bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66cb8845dd68bf002161197a6ff806ddccd073641d404af75632e44b33252bb5->enter($__internal_66cb8845dd68bf002161197a6ff806ddccd073641d404af75632e44b33252bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_910485f85262b98a9937edf670ea46efeaa1df56d01c44573878d0709ea8297d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910485f85262b98a9937edf670ea46efeaa1df56d01c44573878d0709ea8297d->enter($__internal_910485f85262b98a9937edf670ea46efeaa1df56d01c44573878d0709ea8297d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_910485f85262b98a9937edf670ea46efeaa1df56d01c44573878d0709ea8297d->leave($__internal_910485f85262b98a9937edf670ea46efeaa1df56d01c44573878d0709ea8297d_prof);

        
        $__internal_66cb8845dd68bf002161197a6ff806ddccd073641d404af75632e44b33252bb5->leave($__internal_66cb8845dd68bf002161197a6ff806ddccd073641d404af75632e44b33252bb5_prof);

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
