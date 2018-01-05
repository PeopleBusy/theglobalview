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
        $__internal_347eee87c9ca1ec790025155477b6df9f63abd9682a671b0c2c593cbedafb04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347eee87c9ca1ec790025155477b6df9f63abd9682a671b0c2c593cbedafb04d->enter($__internal_347eee87c9ca1ec790025155477b6df9f63abd9682a671b0c2c593cbedafb04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d9ee552da796c88ad02eebfcd7887118e4175460596f1f74b269f7d2616e97c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ee552da796c88ad02eebfcd7887118e4175460596f1f74b269f7d2616e97c8->enter($__internal_d9ee552da796c88ad02eebfcd7887118e4175460596f1f74b269f7d2616e97c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_347eee87c9ca1ec790025155477b6df9f63abd9682a671b0c2c593cbedafb04d->leave($__internal_347eee87c9ca1ec790025155477b6df9f63abd9682a671b0c2c593cbedafb04d_prof);

        
        $__internal_d9ee552da796c88ad02eebfcd7887118e4175460596f1f74b269f7d2616e97c8->leave($__internal_d9ee552da796c88ad02eebfcd7887118e4175460596f1f74b269f7d2616e97c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c8a0da1c77c715f02880cd2f7a659233e0357cbee7af1efbb0c7e8953f4aa1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8a0da1c77c715f02880cd2f7a659233e0357cbee7af1efbb0c7e8953f4aa1b->enter($__internal_3c8a0da1c77c715f02880cd2f7a659233e0357cbee7af1efbb0c7e8953f4aa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fadf493edd552285ad4156dd60ee4c9cd8a80b0d3f9e090b296ec0089adccd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadf493edd552285ad4156dd60ee4c9cd8a80b0d3f9e090b296ec0089adccd75->enter($__internal_fadf493edd552285ad4156dd60ee4c9cd8a80b0d3f9e090b296ec0089adccd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fadf493edd552285ad4156dd60ee4c9cd8a80b0d3f9e090b296ec0089adccd75->leave($__internal_fadf493edd552285ad4156dd60ee4c9cd8a80b0d3f9e090b296ec0089adccd75_prof);

        
        $__internal_3c8a0da1c77c715f02880cd2f7a659233e0357cbee7af1efbb0c7e8953f4aa1b->leave($__internal_3c8a0da1c77c715f02880cd2f7a659233e0357cbee7af1efbb0c7e8953f4aa1b_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
