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
        $__internal_52500661860e0e1374c9c7ae9190a00ae53c3af3fcac77089a346cb3d4d28382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52500661860e0e1374c9c7ae9190a00ae53c3af3fcac77089a346cb3d4d28382->enter($__internal_52500661860e0e1374c9c7ae9190a00ae53c3af3fcac77089a346cb3d4d28382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9c83441614011aaacba181f82f81ed89683cc769c83ac0adc9393ba3007d13fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c83441614011aaacba181f82f81ed89683cc769c83ac0adc9393ba3007d13fe->enter($__internal_9c83441614011aaacba181f82f81ed89683cc769c83ac0adc9393ba3007d13fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52500661860e0e1374c9c7ae9190a00ae53c3af3fcac77089a346cb3d4d28382->leave($__internal_52500661860e0e1374c9c7ae9190a00ae53c3af3fcac77089a346cb3d4d28382_prof);

        
        $__internal_9c83441614011aaacba181f82f81ed89683cc769c83ac0adc9393ba3007d13fe->leave($__internal_9c83441614011aaacba181f82f81ed89683cc769c83ac0adc9393ba3007d13fe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f53297179deec763bb7a05b977f156feaeb52a753b840902a0b3eeeab6d7b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f53297179deec763bb7a05b977f156feaeb52a753b840902a0b3eeeab6d7b70->enter($__internal_0f53297179deec763bb7a05b977f156feaeb52a753b840902a0b3eeeab6d7b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acc8689dc4c7f4eef4e3e36874efa60a0d94aab3e2a80976a786cd2769ae5ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc8689dc4c7f4eef4e3e36874efa60a0d94aab3e2a80976a786cd2769ae5ca1->enter($__internal_acc8689dc4c7f4eef4e3e36874efa60a0d94aab3e2a80976a786cd2769ae5ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_acc8689dc4c7f4eef4e3e36874efa60a0d94aab3e2a80976a786cd2769ae5ca1->leave($__internal_acc8689dc4c7f4eef4e3e36874efa60a0d94aab3e2a80976a786cd2769ae5ca1_prof);

        
        $__internal_0f53297179deec763bb7a05b977f156feaeb52a753b840902a0b3eeeab6d7b70->leave($__internal_0f53297179deec763bb7a05b977f156feaeb52a753b840902a0b3eeeab6d7b70_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
