<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_128246a92fadfed2b53a96143f921e90255a935cc8920d11219995c5bb3135ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8947fbd0bc748d3a2faf17df2ee6c4eeabe6a216512e377397ddc6f3e27e438b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8947fbd0bc748d3a2faf17df2ee6c4eeabe6a216512e377397ddc6f3e27e438b->enter($__internal_8947fbd0bc748d3a2faf17df2ee6c4eeabe6a216512e377397ddc6f3e27e438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c7213f79caed38d5bcf56b75ce684f00932ae9078b01d7fd055cd137ce50e79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7213f79caed38d5bcf56b75ce684f00932ae9078b01d7fd055cd137ce50e79a->enter($__internal_c7213f79caed38d5bcf56b75ce684f00932ae9078b01d7fd055cd137ce50e79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8947fbd0bc748d3a2faf17df2ee6c4eeabe6a216512e377397ddc6f3e27e438b->leave($__internal_8947fbd0bc748d3a2faf17df2ee6c4eeabe6a216512e377397ddc6f3e27e438b_prof);

        
        $__internal_c7213f79caed38d5bcf56b75ce684f00932ae9078b01d7fd055cd137ce50e79a->leave($__internal_c7213f79caed38d5bcf56b75ce684f00932ae9078b01d7fd055cd137ce50e79a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c980fe6754f11a8f4a1207fe92774270b58abf899c73e3cc15cb1daa2e699e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c980fe6754f11a8f4a1207fe92774270b58abf899c73e3cc15cb1daa2e699e89->enter($__internal_c980fe6754f11a8f4a1207fe92774270b58abf899c73e3cc15cb1daa2e699e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab7d06a5fdc5a37d2cd11f5ca64e05aa3a0338071e78140177906c619158df02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7d06a5fdc5a37d2cd11f5ca64e05aa3a0338071e78140177906c619158df02->enter($__internal_ab7d06a5fdc5a37d2cd11f5ca64e05aa3a0338071e78140177906c619158df02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab7d06a5fdc5a37d2cd11f5ca64e05aa3a0338071e78140177906c619158df02->leave($__internal_ab7d06a5fdc5a37d2cd11f5ca64e05aa3a0338071e78140177906c619158df02_prof);

        
        $__internal_c980fe6754f11a8f4a1207fe92774270b58abf899c73e3cc15cb1daa2e699e89->leave($__internal_c980fe6754f11a8f4a1207fe92774270b58abf899c73e3cc15cb1daa2e699e89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e921471c0dda67981b19a5108908aede2f0bcca0487ee09a372d5bbb7bee6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e921471c0dda67981b19a5108908aede2f0bcca0487ee09a372d5bbb7bee6b6->enter($__internal_0e921471c0dda67981b19a5108908aede2f0bcca0487ee09a372d5bbb7bee6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae9f1305f03768080e49366069c1e635b2b5e676436a1b646cef51c88d61796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9f1305f03768080e49366069c1e635b2b5e676436a1b646cef51c88d61796c->enter($__internal_ae9f1305f03768080e49366069c1e635b2b5e676436a1b646cef51c88d61796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae9f1305f03768080e49366069c1e635b2b5e676436a1b646cef51c88d61796c->leave($__internal_ae9f1305f03768080e49366069c1e635b2b5e676436a1b646cef51c88d61796c_prof);

        
        $__internal_0e921471c0dda67981b19a5108908aede2f0bcca0487ee09a372d5bbb7bee6b6->leave($__internal_0e921471c0dda67981b19a5108908aede2f0bcca0487ee09a372d5bbb7bee6b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4259cfc585bcdef27e7ea52bf89c33e779efc44e4bb4a79fd3dbc54bfec77275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4259cfc585bcdef27e7ea52bf89c33e779efc44e4bb4a79fd3dbc54bfec77275->enter($__internal_4259cfc585bcdef27e7ea52bf89c33e779efc44e4bb4a79fd3dbc54bfec77275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9016ad6a5e4cbc19c43279879efdd8908a5435ec1ba8782157befc6dba659e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9016ad6a5e4cbc19c43279879efdd8908a5435ec1ba8782157befc6dba659e5d->enter($__internal_9016ad6a5e4cbc19c43279879efdd8908a5435ec1ba8782157befc6dba659e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9016ad6a5e4cbc19c43279879efdd8908a5435ec1ba8782157befc6dba659e5d->leave($__internal_9016ad6a5e4cbc19c43279879efdd8908a5435ec1ba8782157befc6dba659e5d_prof);

        
        $__internal_4259cfc585bcdef27e7ea52bf89c33e779efc44e4bb4a79fd3dbc54bfec77275->leave($__internal_4259cfc585bcdef27e7ea52bf89c33e779efc44e4bb4a79fd3dbc54bfec77275_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
