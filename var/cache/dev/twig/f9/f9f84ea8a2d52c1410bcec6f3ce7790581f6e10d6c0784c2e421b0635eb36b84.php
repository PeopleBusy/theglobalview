<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e48d0281009cc006554a853c3f78589d9abbd09e24ec9e5d1411494c5233007a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6205cf72619b151b39f9ec5bc1d46f2dab31b9f8c72c8e367f85aa6db1141ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6205cf72619b151b39f9ec5bc1d46f2dab31b9f8c72c8e367f85aa6db1141ec0->enter($__internal_6205cf72619b151b39f9ec5bc1d46f2dab31b9f8c72c8e367f85aa6db1141ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2640f97d4ee3b157d3c6ba509723dfdbf8bfd3b1cf3f6380f19ffd842fca55e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2640f97d4ee3b157d3c6ba509723dfdbf8bfd3b1cf3f6380f19ffd842fca55e8->enter($__internal_2640f97d4ee3b157d3c6ba509723dfdbf8bfd3b1cf3f6380f19ffd842fca55e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6205cf72619b151b39f9ec5bc1d46f2dab31b9f8c72c8e367f85aa6db1141ec0->leave($__internal_6205cf72619b151b39f9ec5bc1d46f2dab31b9f8c72c8e367f85aa6db1141ec0_prof);

        
        $__internal_2640f97d4ee3b157d3c6ba509723dfdbf8bfd3b1cf3f6380f19ffd842fca55e8->leave($__internal_2640f97d4ee3b157d3c6ba509723dfdbf8bfd3b1cf3f6380f19ffd842fca55e8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d27515facbbb4955de4cfc616af480df9d7f589962231ec960d5e6ad2068bb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27515facbbb4955de4cfc616af480df9d7f589962231ec960d5e6ad2068bb8f->enter($__internal_d27515facbbb4955de4cfc616af480df9d7f589962231ec960d5e6ad2068bb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_735105a13f2ceae984e25611c6db6f60383f93bdbac78c1cd15feeb26ba93462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735105a13f2ceae984e25611c6db6f60383f93bdbac78c1cd15feeb26ba93462->enter($__internal_735105a13f2ceae984e25611c6db6f60383f93bdbac78c1cd15feeb26ba93462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_735105a13f2ceae984e25611c6db6f60383f93bdbac78c1cd15feeb26ba93462->leave($__internal_735105a13f2ceae984e25611c6db6f60383f93bdbac78c1cd15feeb26ba93462_prof);

        
        $__internal_d27515facbbb4955de4cfc616af480df9d7f589962231ec960d5e6ad2068bb8f->leave($__internal_d27515facbbb4955de4cfc616af480df9d7f589962231ec960d5e6ad2068bb8f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
