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
        $__internal_4d13b59d3e2cf3a8979715e5ab6e846317d842f1ba29da141b40d5ef674f62de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d13b59d3e2cf3a8979715e5ab6e846317d842f1ba29da141b40d5ef674f62de->enter($__internal_4d13b59d3e2cf3a8979715e5ab6e846317d842f1ba29da141b40d5ef674f62de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6a4e4c7a57d4550076f137f14b292455d905cbce5ec233137d734b64d2a25369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4e4c7a57d4550076f137f14b292455d905cbce5ec233137d734b64d2a25369->enter($__internal_6a4e4c7a57d4550076f137f14b292455d905cbce5ec233137d734b64d2a25369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d13b59d3e2cf3a8979715e5ab6e846317d842f1ba29da141b40d5ef674f62de->leave($__internal_4d13b59d3e2cf3a8979715e5ab6e846317d842f1ba29da141b40d5ef674f62de_prof);

        
        $__internal_6a4e4c7a57d4550076f137f14b292455d905cbce5ec233137d734b64d2a25369->leave($__internal_6a4e4c7a57d4550076f137f14b292455d905cbce5ec233137d734b64d2a25369_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_addba52826acc24453746fd592eb8a5a717428413029d45267966841b29b31e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addba52826acc24453746fd592eb8a5a717428413029d45267966841b29b31e1->enter($__internal_addba52826acc24453746fd592eb8a5a717428413029d45267966841b29b31e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_acf8c2cd401e6967fd23353e5c8fe81fe94ecacd3367ad8c03d220b7bd1edc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf8c2cd401e6967fd23353e5c8fe81fe94ecacd3367ad8c03d220b7bd1edc05->enter($__internal_acf8c2cd401e6967fd23353e5c8fe81fe94ecacd3367ad8c03d220b7bd1edc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_acf8c2cd401e6967fd23353e5c8fe81fe94ecacd3367ad8c03d220b7bd1edc05->leave($__internal_acf8c2cd401e6967fd23353e5c8fe81fe94ecacd3367ad8c03d220b7bd1edc05_prof);

        
        $__internal_addba52826acc24453746fd592eb8a5a717428413029d45267966841b29b31e1->leave($__internal_addba52826acc24453746fd592eb8a5a717428413029d45267966841b29b31e1_prof);

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
