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
        $__internal_d927fc247adc1557d85e909978e56c7a8ba50507f69bc83100941a71fd615cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d927fc247adc1557d85e909978e56c7a8ba50507f69bc83100941a71fd615cf2->enter($__internal_d927fc247adc1557d85e909978e56c7a8ba50507f69bc83100941a71fd615cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_48194b6b7f78cf1868fb6afb14ad9cbb19fe6e104ee149d713b30deb01434b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48194b6b7f78cf1868fb6afb14ad9cbb19fe6e104ee149d713b30deb01434b5d->enter($__internal_48194b6b7f78cf1868fb6afb14ad9cbb19fe6e104ee149d713b30deb01434b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d927fc247adc1557d85e909978e56c7a8ba50507f69bc83100941a71fd615cf2->leave($__internal_d927fc247adc1557d85e909978e56c7a8ba50507f69bc83100941a71fd615cf2_prof);

        
        $__internal_48194b6b7f78cf1868fb6afb14ad9cbb19fe6e104ee149d713b30deb01434b5d->leave($__internal_48194b6b7f78cf1868fb6afb14ad9cbb19fe6e104ee149d713b30deb01434b5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10de8a8b3b499e46798033b0554a44de1c85b68985a94236983c97788a793640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10de8a8b3b499e46798033b0554a44de1c85b68985a94236983c97788a793640->enter($__internal_10de8a8b3b499e46798033b0554a44de1c85b68985a94236983c97788a793640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8be9bcf6b789aa8013e51891ad8b7b7121161c1e1f3857203d25b3f60cec309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8be9bcf6b789aa8013e51891ad8b7b7121161c1e1f3857203d25b3f60cec309->enter($__internal_c8be9bcf6b789aa8013e51891ad8b7b7121161c1e1f3857203d25b3f60cec309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c8be9bcf6b789aa8013e51891ad8b7b7121161c1e1f3857203d25b3f60cec309->leave($__internal_c8be9bcf6b789aa8013e51891ad8b7b7121161c1e1f3857203d25b3f60cec309_prof);

        
        $__internal_10de8a8b3b499e46798033b0554a44de1c85b68985a94236983c97788a793640->leave($__internal_10de8a8b3b499e46798033b0554a44de1c85b68985a94236983c97788a793640_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a431fad9c32f166aacd09d0c75ac7f4ee852ac472946762cf35611b831aaec40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a431fad9c32f166aacd09d0c75ac7f4ee852ac472946762cf35611b831aaec40->enter($__internal_a431fad9c32f166aacd09d0c75ac7f4ee852ac472946762cf35611b831aaec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad9a4f0be22271c0cd619a8ff017a5bf784bfb5d8d658ea1928bfcd7a1fbeaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a4f0be22271c0cd619a8ff017a5bf784bfb5d8d658ea1928bfcd7a1fbeaa4->enter($__internal_ad9a4f0be22271c0cd619a8ff017a5bf784bfb5d8d658ea1928bfcd7a1fbeaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad9a4f0be22271c0cd619a8ff017a5bf784bfb5d8d658ea1928bfcd7a1fbeaa4->leave($__internal_ad9a4f0be22271c0cd619a8ff017a5bf784bfb5d8d658ea1928bfcd7a1fbeaa4_prof);

        
        $__internal_a431fad9c32f166aacd09d0c75ac7f4ee852ac472946762cf35611b831aaec40->leave($__internal_a431fad9c32f166aacd09d0c75ac7f4ee852ac472946762cf35611b831aaec40_prof);

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
