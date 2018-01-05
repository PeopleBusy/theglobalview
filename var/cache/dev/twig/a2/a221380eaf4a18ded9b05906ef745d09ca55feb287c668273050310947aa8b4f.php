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
        $__internal_7f0371629f6c436af739f200b35fb150d6faf76ec17f92118924a175d2faa95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0371629f6c436af739f200b35fb150d6faf76ec17f92118924a175d2faa95f->enter($__internal_7f0371629f6c436af739f200b35fb150d6faf76ec17f92118924a175d2faa95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e5808dea0f46682b6d12a9726b6d384ae9242244a5a045bbc7b00098474ed9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5808dea0f46682b6d12a9726b6d384ae9242244a5a045bbc7b00098474ed9c7->enter($__internal_e5808dea0f46682b6d12a9726b6d384ae9242244a5a045bbc7b00098474ed9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0371629f6c436af739f200b35fb150d6faf76ec17f92118924a175d2faa95f->leave($__internal_7f0371629f6c436af739f200b35fb150d6faf76ec17f92118924a175d2faa95f_prof);

        
        $__internal_e5808dea0f46682b6d12a9726b6d384ae9242244a5a045bbc7b00098474ed9c7->leave($__internal_e5808dea0f46682b6d12a9726b6d384ae9242244a5a045bbc7b00098474ed9c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c4257cb794ac2cd988ae221e1569607f8d5a6ecf712436dc52097ae61f667bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4257cb794ac2cd988ae221e1569607f8d5a6ecf712436dc52097ae61f667bb->enter($__internal_4c4257cb794ac2cd988ae221e1569607f8d5a6ecf712436dc52097ae61f667bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b3973f260e03a525875c05e96f0307edb7ecf1720b1505a759461b06f1c08a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3973f260e03a525875c05e96f0307edb7ecf1720b1505a759461b06f1c08a7->enter($__internal_2b3973f260e03a525875c05e96f0307edb7ecf1720b1505a759461b06f1c08a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b3973f260e03a525875c05e96f0307edb7ecf1720b1505a759461b06f1c08a7->leave($__internal_2b3973f260e03a525875c05e96f0307edb7ecf1720b1505a759461b06f1c08a7_prof);

        
        $__internal_4c4257cb794ac2cd988ae221e1569607f8d5a6ecf712436dc52097ae61f667bb->leave($__internal_4c4257cb794ac2cd988ae221e1569607f8d5a6ecf712436dc52097ae61f667bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef94ed06d70fa1ada4f0e069e93719b697402a3e246632140b4d90c623e45da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef94ed06d70fa1ada4f0e069e93719b697402a3e246632140b4d90c623e45da0->enter($__internal_ef94ed06d70fa1ada4f0e069e93719b697402a3e246632140b4d90c623e45da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c968405ff602d8cedf9c203c37254f7d6c45ef522471ebc267f47a2b2801d76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c968405ff602d8cedf9c203c37254f7d6c45ef522471ebc267f47a2b2801d76a->enter($__internal_c968405ff602d8cedf9c203c37254f7d6c45ef522471ebc267f47a2b2801d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c968405ff602d8cedf9c203c37254f7d6c45ef522471ebc267f47a2b2801d76a->leave($__internal_c968405ff602d8cedf9c203c37254f7d6c45ef522471ebc267f47a2b2801d76a_prof);

        
        $__internal_ef94ed06d70fa1ada4f0e069e93719b697402a3e246632140b4d90c623e45da0->leave($__internal_ef94ed06d70fa1ada4f0e069e93719b697402a3e246632140b4d90c623e45da0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5a5dfaa54923e3612261012607f23b848c74be7c20731b097cb8eed92b0dd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a5dfaa54923e3612261012607f23b848c74be7c20731b097cb8eed92b0dd7a->enter($__internal_a5a5dfaa54923e3612261012607f23b848c74be7c20731b097cb8eed92b0dd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e8760fffa593ac00b29713edb8089318d106ab3ccb77b79407b6ccc9cd27d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8760fffa593ac00b29713edb8089318d106ab3ccb77b79407b6ccc9cd27d1a->enter($__internal_6e8760fffa593ac00b29713edb8089318d106ab3ccb77b79407b6ccc9cd27d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6e8760fffa593ac00b29713edb8089318d106ab3ccb77b79407b6ccc9cd27d1a->leave($__internal_6e8760fffa593ac00b29713edb8089318d106ab3ccb77b79407b6ccc9cd27d1a_prof);

        
        $__internal_a5a5dfaa54923e3612261012607f23b848c74be7c20731b097cb8eed92b0dd7a->leave($__internal_a5a5dfaa54923e3612261012607f23b848c74be7c20731b097cb8eed92b0dd7a_prof);

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
