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
        $__internal_386e36fbe0acea18f17de4cbac1e6952fc341ac5a67d06e6b8bf1030bf280467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386e36fbe0acea18f17de4cbac1e6952fc341ac5a67d06e6b8bf1030bf280467->enter($__internal_386e36fbe0acea18f17de4cbac1e6952fc341ac5a67d06e6b8bf1030bf280467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f0e5e373a90a82bf8bc7233fecf9114e0094ddff648718e2d037357db2540d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e5e373a90a82bf8bc7233fecf9114e0094ddff648718e2d037357db2540d6e->enter($__internal_f0e5e373a90a82bf8bc7233fecf9114e0094ddff648718e2d037357db2540d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_386e36fbe0acea18f17de4cbac1e6952fc341ac5a67d06e6b8bf1030bf280467->leave($__internal_386e36fbe0acea18f17de4cbac1e6952fc341ac5a67d06e6b8bf1030bf280467_prof);

        
        $__internal_f0e5e373a90a82bf8bc7233fecf9114e0094ddff648718e2d037357db2540d6e->leave($__internal_f0e5e373a90a82bf8bc7233fecf9114e0094ddff648718e2d037357db2540d6e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_36ea66e5f3e1588a907f0a8429b69254ccdbb3c6f956d043bb4782ed4ca9bb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ea66e5f3e1588a907f0a8429b69254ccdbb3c6f956d043bb4782ed4ca9bb7e->enter($__internal_36ea66e5f3e1588a907f0a8429b69254ccdbb3c6f956d043bb4782ed4ca9bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95c68678ba5b7ab7e2abcd9aecd3284da9501f52536de8a35dbb457e25dcfef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c68678ba5b7ab7e2abcd9aecd3284da9501f52536de8a35dbb457e25dcfef0->enter($__internal_95c68678ba5b7ab7e2abcd9aecd3284da9501f52536de8a35dbb457e25dcfef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_95c68678ba5b7ab7e2abcd9aecd3284da9501f52536de8a35dbb457e25dcfef0->leave($__internal_95c68678ba5b7ab7e2abcd9aecd3284da9501f52536de8a35dbb457e25dcfef0_prof);

        
        $__internal_36ea66e5f3e1588a907f0a8429b69254ccdbb3c6f956d043bb4782ed4ca9bb7e->leave($__internal_36ea66e5f3e1588a907f0a8429b69254ccdbb3c6f956d043bb4782ed4ca9bb7e_prof);

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
