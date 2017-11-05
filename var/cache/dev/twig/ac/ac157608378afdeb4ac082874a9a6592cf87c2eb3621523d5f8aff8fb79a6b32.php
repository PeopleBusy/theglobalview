<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_56f867e2921ea0e11d02ceff7ebcff770dfa9c338ef81e2a42fdc4bbb6f35179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d711c568333971c5c3b54c7dd4f8a716695725b73aed09163c58117613483064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d711c568333971c5c3b54c7dd4f8a716695725b73aed09163c58117613483064->enter($__internal_d711c568333971c5c3b54c7dd4f8a716695725b73aed09163c58117613483064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ede7001a3f527d0cc35c8aa48c526af253be2d5a27d8b06f9cd0051211367bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede7001a3f527d0cc35c8aa48c526af253be2d5a27d8b06f9cd0051211367bf1->enter($__internal_ede7001a3f527d0cc35c8aa48c526af253be2d5a27d8b06f9cd0051211367bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d711c568333971c5c3b54c7dd4f8a716695725b73aed09163c58117613483064->leave($__internal_d711c568333971c5c3b54c7dd4f8a716695725b73aed09163c58117613483064_prof);

        
        $__internal_ede7001a3f527d0cc35c8aa48c526af253be2d5a27d8b06f9cd0051211367bf1->leave($__internal_ede7001a3f527d0cc35c8aa48c526af253be2d5a27d8b06f9cd0051211367bf1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a19e2f366e26b4f97fd4911583e66a8f0093e9b8a5a563632237b24d791ef92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a19e2f366e26b4f97fd4911583e66a8f0093e9b8a5a563632237b24d791ef92->enter($__internal_2a19e2f366e26b4f97fd4911583e66a8f0093e9b8a5a563632237b24d791ef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c48ee6e4859d8c1a16125c6a0eb4ea1b72cdcad2cc78fc11d2b9ade0c028881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c48ee6e4859d8c1a16125c6a0eb4ea1b72cdcad2cc78fc11d2b9ade0c028881->enter($__internal_3c48ee6e4859d8c1a16125c6a0eb4ea1b72cdcad2cc78fc11d2b9ade0c028881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3c48ee6e4859d8c1a16125c6a0eb4ea1b72cdcad2cc78fc11d2b9ade0c028881->leave($__internal_3c48ee6e4859d8c1a16125c6a0eb4ea1b72cdcad2cc78fc11d2b9ade0c028881_prof);

        
        $__internal_2a19e2f366e26b4f97fd4911583e66a8f0093e9b8a5a563632237b24d791ef92->leave($__internal_2a19e2f366e26b4f97fd4911583e66a8f0093e9b8a5a563632237b24d791ef92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
