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
        $__internal_a8fc8a2f6d93bef50e5ea5e55fb40c68645bcdfdc4fbebbf901ccabfe59048e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fc8a2f6d93bef50e5ea5e55fb40c68645bcdfdc4fbebbf901ccabfe59048e5->enter($__internal_a8fc8a2f6d93bef50e5ea5e55fb40c68645bcdfdc4fbebbf901ccabfe59048e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a89a8746c4c70087f84535fb369d30637f51e7ee98579d964412d665199e4cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89a8746c4c70087f84535fb369d30637f51e7ee98579d964412d665199e4cdf->enter($__internal_a89a8746c4c70087f84535fb369d30637f51e7ee98579d964412d665199e4cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fc8a2f6d93bef50e5ea5e55fb40c68645bcdfdc4fbebbf901ccabfe59048e5->leave($__internal_a8fc8a2f6d93bef50e5ea5e55fb40c68645bcdfdc4fbebbf901ccabfe59048e5_prof);

        
        $__internal_a89a8746c4c70087f84535fb369d30637f51e7ee98579d964412d665199e4cdf->leave($__internal_a89a8746c4c70087f84535fb369d30637f51e7ee98579d964412d665199e4cdf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c789675c91f4593835830b44542b27d06bb1d9b6c090ad32cd76ae74295b887d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c789675c91f4593835830b44542b27d06bb1d9b6c090ad32cd76ae74295b887d->enter($__internal_c789675c91f4593835830b44542b27d06bb1d9b6c090ad32cd76ae74295b887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fa10cb4dd58863bd247986455d09c75f6223e3b5dcd88b6d0749ab56cd42166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa10cb4dd58863bd247986455d09c75f6223e3b5dcd88b6d0749ab56cd42166->enter($__internal_2fa10cb4dd58863bd247986455d09c75f6223e3b5dcd88b6d0749ab56cd42166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2fa10cb4dd58863bd247986455d09c75f6223e3b5dcd88b6d0749ab56cd42166->leave($__internal_2fa10cb4dd58863bd247986455d09c75f6223e3b5dcd88b6d0749ab56cd42166_prof);

        
        $__internal_c789675c91f4593835830b44542b27d06bb1d9b6c090ad32cd76ae74295b887d->leave($__internal_c789675c91f4593835830b44542b27d06bb1d9b6c090ad32cd76ae74295b887d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c6117df6393135d1c0f595882295d824c7e2303a74fea3c376bec5c3207b38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6117df6393135d1c0f595882295d824c7e2303a74fea3c376bec5c3207b38f->enter($__internal_3c6117df6393135d1c0f595882295d824c7e2303a74fea3c376bec5c3207b38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_564c1445877ed2898d7545bd316561e20fcd6fba099c5a959da986c7966145d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564c1445877ed2898d7545bd316561e20fcd6fba099c5a959da986c7966145d2->enter($__internal_564c1445877ed2898d7545bd316561e20fcd6fba099c5a959da986c7966145d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_564c1445877ed2898d7545bd316561e20fcd6fba099c5a959da986c7966145d2->leave($__internal_564c1445877ed2898d7545bd316561e20fcd6fba099c5a959da986c7966145d2_prof);

        
        $__internal_3c6117df6393135d1c0f595882295d824c7e2303a74fea3c376bec5c3207b38f->leave($__internal_3c6117df6393135d1c0f595882295d824c7e2303a74fea3c376bec5c3207b38f_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
