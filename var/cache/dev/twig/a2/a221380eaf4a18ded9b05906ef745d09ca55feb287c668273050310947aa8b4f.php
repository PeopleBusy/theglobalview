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
        $__internal_92748d8f14e8721fd615d5b58b8ac11f7a1fa400aa4ce917c0b3ebe6f051d0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92748d8f14e8721fd615d5b58b8ac11f7a1fa400aa4ce917c0b3ebe6f051d0c8->enter($__internal_92748d8f14e8721fd615d5b58b8ac11f7a1fa400aa4ce917c0b3ebe6f051d0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_75e16c87a12df1de115efe1beae293301b7bb8e17d7f3e282c8148214b394c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e16c87a12df1de115efe1beae293301b7bb8e17d7f3e282c8148214b394c21->enter($__internal_75e16c87a12df1de115efe1beae293301b7bb8e17d7f3e282c8148214b394c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92748d8f14e8721fd615d5b58b8ac11f7a1fa400aa4ce917c0b3ebe6f051d0c8->leave($__internal_92748d8f14e8721fd615d5b58b8ac11f7a1fa400aa4ce917c0b3ebe6f051d0c8_prof);

        
        $__internal_75e16c87a12df1de115efe1beae293301b7bb8e17d7f3e282c8148214b394c21->leave($__internal_75e16c87a12df1de115efe1beae293301b7bb8e17d7f3e282c8148214b394c21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f52306b930a95d7112fdb1b0b57ac1fd38b55917d36966eac7c90b58acdd99ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52306b930a95d7112fdb1b0b57ac1fd38b55917d36966eac7c90b58acdd99ca->enter($__internal_f52306b930a95d7112fdb1b0b57ac1fd38b55917d36966eac7c90b58acdd99ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d4dc64d77a276c7d9d6d58e70b0ce0804d33641aadae76394e1fd59ee776ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4dc64d77a276c7d9d6d58e70b0ce0804d33641aadae76394e1fd59ee776ee9->enter($__internal_5d4dc64d77a276c7d9d6d58e70b0ce0804d33641aadae76394e1fd59ee776ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d4dc64d77a276c7d9d6d58e70b0ce0804d33641aadae76394e1fd59ee776ee9->leave($__internal_5d4dc64d77a276c7d9d6d58e70b0ce0804d33641aadae76394e1fd59ee776ee9_prof);

        
        $__internal_f52306b930a95d7112fdb1b0b57ac1fd38b55917d36966eac7c90b58acdd99ca->leave($__internal_f52306b930a95d7112fdb1b0b57ac1fd38b55917d36966eac7c90b58acdd99ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_415596927704a7b66309fccd60eef7fee9667a627a6e6bb707753da11f914a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415596927704a7b66309fccd60eef7fee9667a627a6e6bb707753da11f914a46->enter($__internal_415596927704a7b66309fccd60eef7fee9667a627a6e6bb707753da11f914a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be89494e89b493dd780eef8927b3b088266683a16f0fbc09f0456562158036c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be89494e89b493dd780eef8927b3b088266683a16f0fbc09f0456562158036c2->enter($__internal_be89494e89b493dd780eef8927b3b088266683a16f0fbc09f0456562158036c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be89494e89b493dd780eef8927b3b088266683a16f0fbc09f0456562158036c2->leave($__internal_be89494e89b493dd780eef8927b3b088266683a16f0fbc09f0456562158036c2_prof);

        
        $__internal_415596927704a7b66309fccd60eef7fee9667a627a6e6bb707753da11f914a46->leave($__internal_415596927704a7b66309fccd60eef7fee9667a627a6e6bb707753da11f914a46_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a3811a1ccb307d2df11ddc11363c24c5e42ff114679f11850abdf858b11971d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3811a1ccb307d2df11ddc11363c24c5e42ff114679f11850abdf858b11971d->enter($__internal_6a3811a1ccb307d2df11ddc11363c24c5e42ff114679f11850abdf858b11971d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7839b09be4ebd56ed54547b38bbe394dbd8267f3849ff92eca5668ed051815b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7839b09be4ebd56ed54547b38bbe394dbd8267f3849ff92eca5668ed051815b->enter($__internal_f7839b09be4ebd56ed54547b38bbe394dbd8267f3849ff92eca5668ed051815b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7839b09be4ebd56ed54547b38bbe394dbd8267f3849ff92eca5668ed051815b->leave($__internal_f7839b09be4ebd56ed54547b38bbe394dbd8267f3849ff92eca5668ed051815b_prof);

        
        $__internal_6a3811a1ccb307d2df11ddc11363c24c5e42ff114679f11850abdf858b11971d->leave($__internal_6a3811a1ccb307d2df11ddc11363c24c5e42ff114679f11850abdf858b11971d_prof);

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
