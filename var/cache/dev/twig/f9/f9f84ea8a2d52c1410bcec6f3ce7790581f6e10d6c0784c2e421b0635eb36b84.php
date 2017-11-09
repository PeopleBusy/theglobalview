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
        $__internal_5be57f7485b5a5bd3c61a9fb2bae9d3da6f2115febb1825580bebd015ab88cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be57f7485b5a5bd3c61a9fb2bae9d3da6f2115febb1825580bebd015ab88cf2->enter($__internal_5be57f7485b5a5bd3c61a9fb2bae9d3da6f2115febb1825580bebd015ab88cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1173bbdb48f7ebb3152e31446182f7b8cc0cef69a913771b990f5fb6bbead3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1173bbdb48f7ebb3152e31446182f7b8cc0cef69a913771b990f5fb6bbead3bd->enter($__internal_1173bbdb48f7ebb3152e31446182f7b8cc0cef69a913771b990f5fb6bbead3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5be57f7485b5a5bd3c61a9fb2bae9d3da6f2115febb1825580bebd015ab88cf2->leave($__internal_5be57f7485b5a5bd3c61a9fb2bae9d3da6f2115febb1825580bebd015ab88cf2_prof);

        
        $__internal_1173bbdb48f7ebb3152e31446182f7b8cc0cef69a913771b990f5fb6bbead3bd->leave($__internal_1173bbdb48f7ebb3152e31446182f7b8cc0cef69a913771b990f5fb6bbead3bd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca8915d1295de7a0c15c58fd28fbf11e9d68cd20c4a873e4e1815fc43834cf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8915d1295de7a0c15c58fd28fbf11e9d68cd20c4a873e4e1815fc43834cf59->enter($__internal_ca8915d1295de7a0c15c58fd28fbf11e9d68cd20c4a873e4e1815fc43834cf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6681cfd3498775ca983c5182e22be5f8224722a25ebe1b2cf41352a8626b225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6681cfd3498775ca983c5182e22be5f8224722a25ebe1b2cf41352a8626b225->enter($__internal_f6681cfd3498775ca983c5182e22be5f8224722a25ebe1b2cf41352a8626b225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f6681cfd3498775ca983c5182e22be5f8224722a25ebe1b2cf41352a8626b225->leave($__internal_f6681cfd3498775ca983c5182e22be5f8224722a25ebe1b2cf41352a8626b225_prof);

        
        $__internal_ca8915d1295de7a0c15c58fd28fbf11e9d68cd20c4a873e4e1815fc43834cf59->leave($__internal_ca8915d1295de7a0c15c58fd28fbf11e9d68cd20c4a873e4e1815fc43834cf59_prof);

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
