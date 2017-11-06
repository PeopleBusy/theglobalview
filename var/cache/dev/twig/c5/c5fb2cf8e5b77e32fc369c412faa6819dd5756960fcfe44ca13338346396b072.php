<?php

/* GlobalViewBundle:Default:index.html.twig */
class __TwigTemplate_29e8168f0925d5f0d5a2662bfcb69741afefbf29cffe4c4fd7b473b925e02a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GlobalViewBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc3ae40af2c119303906532ee6521437310ebcc926f79f95c77d62abbd36800c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3ae40af2c119303906532ee6521437310ebcc926f79f95c77d62abbd36800c->enter($__internal_bc3ae40af2c119303906532ee6521437310ebcc926f79f95c77d62abbd36800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index.html.twig"));

        $__internal_cf4420df865066b815d240fdfe7d44a4ea65ba30251bf0e02e4f4086684adf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4420df865066b815d240fdfe7d44a4ea65ba30251bf0e02e4f4086684adf53->enter($__internal_cf4420df865066b815d240fdfe7d44a4ea65ba30251bf0e02e4f4086684adf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc3ae40af2c119303906532ee6521437310ebcc926f79f95c77d62abbd36800c->leave($__internal_bc3ae40af2c119303906532ee6521437310ebcc926f79f95c77d62abbd36800c_prof);

        
        $__internal_cf4420df865066b815d240fdfe7d44a4ea65ba30251bf0e02e4f4086684adf53->leave($__internal_cf4420df865066b815d240fdfe7d44a4ea65ba30251bf0e02e4f4086684adf53_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
", "GlobalViewBundle:Default:index.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/src/GlobalViewBundle/Resources/views/Default/index.html.twig");
    }
}
