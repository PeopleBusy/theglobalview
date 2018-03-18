<?php

/* GlobalViewBundle:Default/admin:admin.html.twig */
class __TwigTemplate_8ae472a8236d5e4df3382a03194d86a88c644a542958da59fad9e763fb4fad71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "GlobalViewBundle:Default/admin:admin.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7cc569f870f0bbee0a96bf887294ac91a4cd32fd099fdfb515c5287c38ce4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cc569f870f0bbee0a96bf887294ac91a4cd32fd099fdfb515c5287c38ce4e7->enter($__internal_c7cc569f870f0bbee0a96bf887294ac91a4cd32fd099fdfb515c5287c38ce4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/admin:admin.html.twig"));

        $__internal_ce9475004ae6b3d6d8e2ca3984a2e64a6d03ea0863ceec7bbf4962aa5ab776c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9475004ae6b3d6d8e2ca3984a2e64a6d03ea0863ceec7bbf4962aa5ab776c2->enter($__internal_ce9475004ae6b3d6d8e2ca3984a2e64a6d03ea0863ceec7bbf4962aa5ab776c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7cc569f870f0bbee0a96bf887294ac91a4cd32fd099fdfb515c5287c38ce4e7->leave($__internal_c7cc569f870f0bbee0a96bf887294ac91a4cd32fd099fdfb515c5287c38ce4e7_prof);

        
        $__internal_ce9475004ae6b3d6d8e2ca3984a2e64a6d03ea0863ceec7bbf4962aa5ab776c2->leave($__internal_ce9475004ae6b3d6d8e2ca3984a2e64a6d03ea0863ceec7bbf4962aa5ab776c2_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default/admin:admin.html.twig";
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
        return new Twig_Source("{% extends \"::admin_base.html.twig\" %}", "GlobalViewBundle:Default/admin:admin.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/admin/admin.html.twig");
    }
}
