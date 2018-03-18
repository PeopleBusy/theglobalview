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
        $__internal_7e964c440a91a7b6713665823ff595844ded8b95ca33d8fe75f2cf17b1bebc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e964c440a91a7b6713665823ff595844ded8b95ca33d8fe75f2cf17b1bebc3b->enter($__internal_7e964c440a91a7b6713665823ff595844ded8b95ca33d8fe75f2cf17b1bebc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_86b17807cfa5821dce3b20a40b77ddf76c100febe1b4cac5b216dffa174b4778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b17807cfa5821dce3b20a40b77ddf76c100febe1b4cac5b216dffa174b4778->enter($__internal_86b17807cfa5821dce3b20a40b77ddf76c100febe1b4cac5b216dffa174b4778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e964c440a91a7b6713665823ff595844ded8b95ca33d8fe75f2cf17b1bebc3b->leave($__internal_7e964c440a91a7b6713665823ff595844ded8b95ca33d8fe75f2cf17b1bebc3b_prof);

        
        $__internal_86b17807cfa5821dce3b20a40b77ddf76c100febe1b4cac5b216dffa174b4778->leave($__internal_86b17807cfa5821dce3b20a40b77ddf76c100febe1b4cac5b216dffa174b4778_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94f39e4f4fc87b3989a785224c1222ed694c74e931939298982012fae308fa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f39e4f4fc87b3989a785224c1222ed694c74e931939298982012fae308fa75->enter($__internal_94f39e4f4fc87b3989a785224c1222ed694c74e931939298982012fae308fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc6ef895440a515e132f36a07a5bcbd4a1c4816c622bc264019ab9c9f0a988af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6ef895440a515e132f36a07a5bcbd4a1c4816c622bc264019ab9c9f0a988af->enter($__internal_dc6ef895440a515e132f36a07a5bcbd4a1c4816c622bc264019ab9c9f0a988af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc6ef895440a515e132f36a07a5bcbd4a1c4816c622bc264019ab9c9f0a988af->leave($__internal_dc6ef895440a515e132f36a07a5bcbd4a1c4816c622bc264019ab9c9f0a988af_prof);

        
        $__internal_94f39e4f4fc87b3989a785224c1222ed694c74e931939298982012fae308fa75->leave($__internal_94f39e4f4fc87b3989a785224c1222ed694c74e931939298982012fae308fa75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_733b5fc7f1d7258d45f2c700055d56d89dd9fcdc6394d3e6a6e29100e8e68134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733b5fc7f1d7258d45f2c700055d56d89dd9fcdc6394d3e6a6e29100e8e68134->enter($__internal_733b5fc7f1d7258d45f2c700055d56d89dd9fcdc6394d3e6a6e29100e8e68134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f59df007463a2ba56779315ccbd2d82f2d2d163d55343d5e7166baab4042a79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59df007463a2ba56779315ccbd2d82f2d2d163d55343d5e7166baab4042a79e->enter($__internal_f59df007463a2ba56779315ccbd2d82f2d2d163d55343d5e7166baab4042a79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f59df007463a2ba56779315ccbd2d82f2d2d163d55343d5e7166baab4042a79e->leave($__internal_f59df007463a2ba56779315ccbd2d82f2d2d163d55343d5e7166baab4042a79e_prof);

        
        $__internal_733b5fc7f1d7258d45f2c700055d56d89dd9fcdc6394d3e6a6e29100e8e68134->leave($__internal_733b5fc7f1d7258d45f2c700055d56d89dd9fcdc6394d3e6a6e29100e8e68134_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9befa3109516046deb45b57de667aa8896d3a7a600ea0c5213894cde73cd3182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9befa3109516046deb45b57de667aa8896d3a7a600ea0c5213894cde73cd3182->enter($__internal_9befa3109516046deb45b57de667aa8896d3a7a600ea0c5213894cde73cd3182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_562d85f3f0082cc07e894fe5b4664040dc7f24eaad8d1ddf468f12381553ff75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562d85f3f0082cc07e894fe5b4664040dc7f24eaad8d1ddf468f12381553ff75->enter($__internal_562d85f3f0082cc07e894fe5b4664040dc7f24eaad8d1ddf468f12381553ff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_562d85f3f0082cc07e894fe5b4664040dc7f24eaad8d1ddf468f12381553ff75->leave($__internal_562d85f3f0082cc07e894fe5b4664040dc7f24eaad8d1ddf468f12381553ff75_prof);

        
        $__internal_9befa3109516046deb45b57de667aa8896d3a7a600ea0c5213894cde73cd3182->leave($__internal_9befa3109516046deb45b57de667aa8896d3a7a600ea0c5213894cde73cd3182_prof);

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
