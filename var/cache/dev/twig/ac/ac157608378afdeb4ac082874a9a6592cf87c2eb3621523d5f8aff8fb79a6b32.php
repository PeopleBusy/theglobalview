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
        $__internal_95e043e8c29692d665cd64bb9b00ff250921097e24aa851dd76579964114f0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e043e8c29692d665cd64bb9b00ff250921097e24aa851dd76579964114f0cb->enter($__internal_95e043e8c29692d665cd64bb9b00ff250921097e24aa851dd76579964114f0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_62ceab0c6540a3259a3132fe6a260c51db052da2cc07733c1c60fd386c70af9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ceab0c6540a3259a3132fe6a260c51db052da2cc07733c1c60fd386c70af9b->enter($__internal_62ceab0c6540a3259a3132fe6a260c51db052da2cc07733c1c60fd386c70af9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e043e8c29692d665cd64bb9b00ff250921097e24aa851dd76579964114f0cb->leave($__internal_95e043e8c29692d665cd64bb9b00ff250921097e24aa851dd76579964114f0cb_prof);

        
        $__internal_62ceab0c6540a3259a3132fe6a260c51db052da2cc07733c1c60fd386c70af9b->leave($__internal_62ceab0c6540a3259a3132fe6a260c51db052da2cc07733c1c60fd386c70af9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_feef042ce6ef77a372070f0369b445d9fa84cf0fecdf3ed0ad4178f461264919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feef042ce6ef77a372070f0369b445d9fa84cf0fecdf3ed0ad4178f461264919->enter($__internal_feef042ce6ef77a372070f0369b445d9fa84cf0fecdf3ed0ad4178f461264919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60026a9b0ab79c1f9fd3ee6b72e974f25c5aa0fb26607356a61e49b4d5db02ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60026a9b0ab79c1f9fd3ee6b72e974f25c5aa0fb26607356a61e49b4d5db02ad->enter($__internal_60026a9b0ab79c1f9fd3ee6b72e974f25c5aa0fb26607356a61e49b4d5db02ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_60026a9b0ab79c1f9fd3ee6b72e974f25c5aa0fb26607356a61e49b4d5db02ad->leave($__internal_60026a9b0ab79c1f9fd3ee6b72e974f25c5aa0fb26607356a61e49b4d5db02ad_prof);

        
        $__internal_feef042ce6ef77a372070f0369b445d9fa84cf0fecdf3ed0ad4178f461264919->leave($__internal_feef042ce6ef77a372070f0369b445d9fa84cf0fecdf3ed0ad4178f461264919_prof);

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
