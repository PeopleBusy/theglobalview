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
        $__internal_17312cef1a429e2432ccea04ba1859505d3ea6df9b8f014b5cee969000d0876c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17312cef1a429e2432ccea04ba1859505d3ea6df9b8f014b5cee969000d0876c->enter($__internal_17312cef1a429e2432ccea04ba1859505d3ea6df9b8f014b5cee969000d0876c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ebee082964cb37c741e6a5caf0d92d9797b70080a0e236fe5a4bdfbe74eeab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebee082964cb37c741e6a5caf0d92d9797b70080a0e236fe5a4bdfbe74eeab42->enter($__internal_ebee082964cb37c741e6a5caf0d92d9797b70080a0e236fe5a4bdfbe74eeab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17312cef1a429e2432ccea04ba1859505d3ea6df9b8f014b5cee969000d0876c->leave($__internal_17312cef1a429e2432ccea04ba1859505d3ea6df9b8f014b5cee969000d0876c_prof);

        
        $__internal_ebee082964cb37c741e6a5caf0d92d9797b70080a0e236fe5a4bdfbe74eeab42->leave($__internal_ebee082964cb37c741e6a5caf0d92d9797b70080a0e236fe5a4bdfbe74eeab42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45059e656ce29396beb22772c48ff8de2afb6c6e4b4693f7db3ee425e661518d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45059e656ce29396beb22772c48ff8de2afb6c6e4b4693f7db3ee425e661518d->enter($__internal_45059e656ce29396beb22772c48ff8de2afb6c6e4b4693f7db3ee425e661518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_51c354a382b8a453221fcaa618c67b404d29e4d8adfb6298a7b5a04413821a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c354a382b8a453221fcaa618c67b404d29e4d8adfb6298a7b5a04413821a34->enter($__internal_51c354a382b8a453221fcaa618c67b404d29e4d8adfb6298a7b5a04413821a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_51c354a382b8a453221fcaa618c67b404d29e4d8adfb6298a7b5a04413821a34->leave($__internal_51c354a382b8a453221fcaa618c67b404d29e4d8adfb6298a7b5a04413821a34_prof);

        
        $__internal_45059e656ce29396beb22772c48ff8de2afb6c6e4b4693f7db3ee425e661518d->leave($__internal_45059e656ce29396beb22772c48ff8de2afb6c6e4b4693f7db3ee425e661518d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_169c3f72d421a5f88c6ddbce12daf8f9ee628fd38bbeb85bc1db61168ec19e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169c3f72d421a5f88c6ddbce12daf8f9ee628fd38bbeb85bc1db61168ec19e0e->enter($__internal_169c3f72d421a5f88c6ddbce12daf8f9ee628fd38bbeb85bc1db61168ec19e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c4f0cb09ee803d145123d7e30e5959480a7694774edc9c97dfd9c10cb9d19d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4f0cb09ee803d145123d7e30e5959480a7694774edc9c97dfd9c10cb9d19d5->enter($__internal_1c4f0cb09ee803d145123d7e30e5959480a7694774edc9c97dfd9c10cb9d19d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c4f0cb09ee803d145123d7e30e5959480a7694774edc9c97dfd9c10cb9d19d5->leave($__internal_1c4f0cb09ee803d145123d7e30e5959480a7694774edc9c97dfd9c10cb9d19d5_prof);

        
        $__internal_169c3f72d421a5f88c6ddbce12daf8f9ee628fd38bbeb85bc1db61168ec19e0e->leave($__internal_169c3f72d421a5f88c6ddbce12daf8f9ee628fd38bbeb85bc1db61168ec19e0e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_453aaac0c3b7aebe5e47648b59fdb9ce3e79734fd11bdd19f02e1119d7522849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453aaac0c3b7aebe5e47648b59fdb9ce3e79734fd11bdd19f02e1119d7522849->enter($__internal_453aaac0c3b7aebe5e47648b59fdb9ce3e79734fd11bdd19f02e1119d7522849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5e968839b47e52ec080287cba7a42ec368cc73a92006154ac948cbc3200617e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e968839b47e52ec080287cba7a42ec368cc73a92006154ac948cbc3200617e->enter($__internal_f5e968839b47e52ec080287cba7a42ec368cc73a92006154ac948cbc3200617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5e968839b47e52ec080287cba7a42ec368cc73a92006154ac948cbc3200617e->leave($__internal_f5e968839b47e52ec080287cba7a42ec368cc73a92006154ac948cbc3200617e_prof);

        
        $__internal_453aaac0c3b7aebe5e47648b59fdb9ce3e79734fd11bdd19f02e1119d7522849->leave($__internal_453aaac0c3b7aebe5e47648b59fdb9ce3e79734fd11bdd19f02e1119d7522849_prof);

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
