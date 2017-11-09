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
        $__internal_429a0602f9ff110d991be9b29d147f56b07ac00646d830d9246f1e4baeb7d32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429a0602f9ff110d991be9b29d147f56b07ac00646d830d9246f1e4baeb7d32d->enter($__internal_429a0602f9ff110d991be9b29d147f56b07ac00646d830d9246f1e4baeb7d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d01e69a35c50845d38137613543a2f183e51e6aeeb122139f86e1be8e90333bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01e69a35c50845d38137613543a2f183e51e6aeeb122139f86e1be8e90333bb->enter($__internal_d01e69a35c50845d38137613543a2f183e51e6aeeb122139f86e1be8e90333bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429a0602f9ff110d991be9b29d147f56b07ac00646d830d9246f1e4baeb7d32d->leave($__internal_429a0602f9ff110d991be9b29d147f56b07ac00646d830d9246f1e4baeb7d32d_prof);

        
        $__internal_d01e69a35c50845d38137613543a2f183e51e6aeeb122139f86e1be8e90333bb->leave($__internal_d01e69a35c50845d38137613543a2f183e51e6aeeb122139f86e1be8e90333bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b3adff15e580034c1c34b9a829079060d13d7d5535bb93dff5e6651fef64d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3adff15e580034c1c34b9a829079060d13d7d5535bb93dff5e6651fef64d79->enter($__internal_1b3adff15e580034c1c34b9a829079060d13d7d5535bb93dff5e6651fef64d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f93646a4fb4a676f6ca4c8ced5a189fdd0e189c52764b882dd833b27bdb603c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93646a4fb4a676f6ca4c8ced5a189fdd0e189c52764b882dd833b27bdb603c1->enter($__internal_f93646a4fb4a676f6ca4c8ced5a189fdd0e189c52764b882dd833b27bdb603c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f93646a4fb4a676f6ca4c8ced5a189fdd0e189c52764b882dd833b27bdb603c1->leave($__internal_f93646a4fb4a676f6ca4c8ced5a189fdd0e189c52764b882dd833b27bdb603c1_prof);

        
        $__internal_1b3adff15e580034c1c34b9a829079060d13d7d5535bb93dff5e6651fef64d79->leave($__internal_1b3adff15e580034c1c34b9a829079060d13d7d5535bb93dff5e6651fef64d79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7df159678207cd695b3c91457568e5512ba8b37da270114c345f3274cd866640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df159678207cd695b3c91457568e5512ba8b37da270114c345f3274cd866640->enter($__internal_7df159678207cd695b3c91457568e5512ba8b37da270114c345f3274cd866640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d794e43653492c38af6113d6b77c242c3ba6613e46659b0811dd417ce681d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d794e43653492c38af6113d6b77c242c3ba6613e46659b0811dd417ce681d21->enter($__internal_2d794e43653492c38af6113d6b77c242c3ba6613e46659b0811dd417ce681d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d794e43653492c38af6113d6b77c242c3ba6613e46659b0811dd417ce681d21->leave($__internal_2d794e43653492c38af6113d6b77c242c3ba6613e46659b0811dd417ce681d21_prof);

        
        $__internal_7df159678207cd695b3c91457568e5512ba8b37da270114c345f3274cd866640->leave($__internal_7df159678207cd695b3c91457568e5512ba8b37da270114c345f3274cd866640_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6388417d8d9bf2af92efd2d9ac63a3176211949c6ccc777391908a5fb826adf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6388417d8d9bf2af92efd2d9ac63a3176211949c6ccc777391908a5fb826adf8->enter($__internal_6388417d8d9bf2af92efd2d9ac63a3176211949c6ccc777391908a5fb826adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff0a1284854a13924d57964abd5a51c1a1055a9f2916cfcd9d454d1c5dc61792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0a1284854a13924d57964abd5a51c1a1055a9f2916cfcd9d454d1c5dc61792->enter($__internal_ff0a1284854a13924d57964abd5a51c1a1055a9f2916cfcd9d454d1c5dc61792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff0a1284854a13924d57964abd5a51c1a1055a9f2916cfcd9d454d1c5dc61792->leave($__internal_ff0a1284854a13924d57964abd5a51c1a1055a9f2916cfcd9d454d1c5dc61792_prof);

        
        $__internal_6388417d8d9bf2af92efd2d9ac63a3176211949c6ccc777391908a5fb826adf8->leave($__internal_6388417d8d9bf2af92efd2d9ac63a3176211949c6ccc777391908a5fb826adf8_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
