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
        $__internal_897efb7fc2aa639995e2c2e138bb815c96d27bfc389b6f6d8497cff33f6978a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897efb7fc2aa639995e2c2e138bb815c96d27bfc389b6f6d8497cff33f6978a2->enter($__internal_897efb7fc2aa639995e2c2e138bb815c96d27bfc389b6f6d8497cff33f6978a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e659137d3310147d832d44997bfccb8b46e7027667bc3dad4ad6e99f433112eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e659137d3310147d832d44997bfccb8b46e7027667bc3dad4ad6e99f433112eb->enter($__internal_e659137d3310147d832d44997bfccb8b46e7027667bc3dad4ad6e99f433112eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897efb7fc2aa639995e2c2e138bb815c96d27bfc389b6f6d8497cff33f6978a2->leave($__internal_897efb7fc2aa639995e2c2e138bb815c96d27bfc389b6f6d8497cff33f6978a2_prof);

        
        $__internal_e659137d3310147d832d44997bfccb8b46e7027667bc3dad4ad6e99f433112eb->leave($__internal_e659137d3310147d832d44997bfccb8b46e7027667bc3dad4ad6e99f433112eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a1db0f4b2a3ba00c38e599f1ff85d700394924a0274da914d615ea447bf5633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1db0f4b2a3ba00c38e599f1ff85d700394924a0274da914d615ea447bf5633->enter($__internal_8a1db0f4b2a3ba00c38e599f1ff85d700394924a0274da914d615ea447bf5633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4610533bf72e8b4fa0d30b8ae8e1509694e68fe2c099e023f3133402a5fd81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4610533bf72e8b4fa0d30b8ae8e1509694e68fe2c099e023f3133402a5fd81a8->enter($__internal_4610533bf72e8b4fa0d30b8ae8e1509694e68fe2c099e023f3133402a5fd81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4610533bf72e8b4fa0d30b8ae8e1509694e68fe2c099e023f3133402a5fd81a8->leave($__internal_4610533bf72e8b4fa0d30b8ae8e1509694e68fe2c099e023f3133402a5fd81a8_prof);

        
        $__internal_8a1db0f4b2a3ba00c38e599f1ff85d700394924a0274da914d615ea447bf5633->leave($__internal_8a1db0f4b2a3ba00c38e599f1ff85d700394924a0274da914d615ea447bf5633_prof);

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
