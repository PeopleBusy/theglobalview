<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_72deb4a253731b6735b3a5d7044cee3d2ca451004d24666bfa3d50abdc7d3f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:memory.html.twig", 1);
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
        $__internal_f05c46e4b67cc10f1e4b1a813c99723e3ee8e5746dc01b10e663b497d468ad40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05c46e4b67cc10f1e4b1a813c99723e3ee8e5746dc01b10e663b497d468ad40->enter($__internal_f05c46e4b67cc10f1e4b1a813c99723e3ee8e5746dc01b10e663b497d468ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:memory.html.twig"));

        $__internal_b0abbd07c57235a1824fc8abb032bbb36c89ecb30ee36f57d48b742c1ec31e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0abbd07c57235a1824fc8abb032bbb36c89ecb30ee36f57d48b742c1ec31e82->enter($__internal_b0abbd07c57235a1824fc8abb032bbb36c89ecb30ee36f57d48b742c1ec31e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05c46e4b67cc10f1e4b1a813c99723e3ee8e5746dc01b10e663b497d468ad40->leave($__internal_f05c46e4b67cc10f1e4b1a813c99723e3ee8e5746dc01b10e663b497d468ad40_prof);

        
        $__internal_b0abbd07c57235a1824fc8abb032bbb36c89ecb30ee36f57d48b742c1ec31e82->leave($__internal_b0abbd07c57235a1824fc8abb032bbb36c89ecb30ee36f57d48b742c1ec31e82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc33e750b63c9e0236e6393f367810b6bc98a37c60e34dfa35ea6ce215c08b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc33e750b63c9e0236e6393f367810b6bc98a37c60e34dfa35ea6ce215c08b1c->enter($__internal_fc33e750b63c9e0236e6393f367810b6bc98a37c60e34dfa35ea6ce215c08b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b0fea8673cecc23372ecdc060c95de6c8a2d7ae7a5a96e53dcb5175a67c6a5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fea8673cecc23372ecdc060c95de6c8a2d7ae7a5a96e53dcb5175a67c6a5ce->enter($__internal_b0fea8673cecc23372ecdc060c95de6c8a2d7ae7a5a96e53dcb5175a67c6a5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "name" => "time", "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_b0fea8673cecc23372ecdc060c95de6c8a2d7ae7a5a96e53dcb5175a67c6a5ce->leave($__internal_b0fea8673cecc23372ecdc060c95de6c8a2d7ae7a5a96e53dcb5175a67c6a5ce_prof);

        
        $__internal_fc33e750b63c9e0236e6393f367810b6bc98a37c60e34dfa35ea6ce215c08b1c->leave($__internal_fc33e750b63c9e0236e6393f367810b6bc98a37c60e34dfa35ea6ce215c08b1c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "WebProfilerBundle:Collector:memory.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
