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
        $__internal_1c82e2a3ed984a7942758edadc3890cdf9b4090ab847e384721f50899b93f471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c82e2a3ed984a7942758edadc3890cdf9b4090ab847e384721f50899b93f471->enter($__internal_1c82e2a3ed984a7942758edadc3890cdf9b4090ab847e384721f50899b93f471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/admin:admin.html.twig"));

        $__internal_1cbea9a01058a00e9b20a1e40229ab86f82286df552923b2817d8d76d4e1b392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbea9a01058a00e9b20a1e40229ab86f82286df552923b2817d8d76d4e1b392->enter($__internal_1cbea9a01058a00e9b20a1e40229ab86f82286df552923b2817d8d76d4e1b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c82e2a3ed984a7942758edadc3890cdf9b4090ab847e384721f50899b93f471->leave($__internal_1c82e2a3ed984a7942758edadc3890cdf9b4090ab847e384721f50899b93f471_prof);

        
        $__internal_1cbea9a01058a00e9b20a1e40229ab86f82286df552923b2817d8d76d4e1b392->leave($__internal_1cbea9a01058a00e9b20a1e40229ab86f82286df552923b2817d8d76d4e1b392_prof);

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
        return new Twig_Source("{% extends \"::admin_base.html.twig\" %}", "GlobalViewBundle:Default/admin:admin.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/src/GlobalViewBundle/Resources/views/Default/admin/admin.html.twig");
    }
}