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
        $__internal_b1c80a2fb83d7a82df5ad02359642bd819c98073ad75d5b5b27a1e935fefd5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c80a2fb83d7a82df5ad02359642bd819c98073ad75d5b5b27a1e935fefd5cb->enter($__internal_b1c80a2fb83d7a82df5ad02359642bd819c98073ad75d5b5b27a1e935fefd5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_171e357e8e253471f729e49b32a0c6439e320ac27e23ff1b0b6ca15e45ad2676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171e357e8e253471f729e49b32a0c6439e320ac27e23ff1b0b6ca15e45ad2676->enter($__internal_171e357e8e253471f729e49b32a0c6439e320ac27e23ff1b0b6ca15e45ad2676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b1c80a2fb83d7a82df5ad02359642bd819c98073ad75d5b5b27a1e935fefd5cb->leave($__internal_b1c80a2fb83d7a82df5ad02359642bd819c98073ad75d5b5b27a1e935fefd5cb_prof);

        
        $__internal_171e357e8e253471f729e49b32a0c6439e320ac27e23ff1b0b6ca15e45ad2676->leave($__internal_171e357e8e253471f729e49b32a0c6439e320ac27e23ff1b0b6ca15e45ad2676_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a11ba80718c562736af3365a45f3687ef71ca70c5f7726bc0e8d4d997e163cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11ba80718c562736af3365a45f3687ef71ca70c5f7726bc0e8d4d997e163cf3->enter($__internal_a11ba80718c562736af3365a45f3687ef71ca70c5f7726bc0e8d4d997e163cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_206a2af0ac34f96fe17ae5e085967ed1d0f3065a3d710230b7480bbaa8e4eda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a2af0ac34f96fe17ae5e085967ed1d0f3065a3d710230b7480bbaa8e4eda3->enter($__internal_206a2af0ac34f96fe17ae5e085967ed1d0f3065a3d710230b7480bbaa8e4eda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_206a2af0ac34f96fe17ae5e085967ed1d0f3065a3d710230b7480bbaa8e4eda3->leave($__internal_206a2af0ac34f96fe17ae5e085967ed1d0f3065a3d710230b7480bbaa8e4eda3_prof);

        
        $__internal_a11ba80718c562736af3365a45f3687ef71ca70c5f7726bc0e8d4d997e163cf3->leave($__internal_a11ba80718c562736af3365a45f3687ef71ca70c5f7726bc0e8d4d997e163cf3_prof);

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
