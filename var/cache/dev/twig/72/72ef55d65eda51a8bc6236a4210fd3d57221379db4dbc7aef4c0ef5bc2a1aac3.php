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
        $__internal_f17f506ce756037fefad3d916ac8069dc6a79a0a1d49b1fa5ca8d15533455b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17f506ce756037fefad3d916ac8069dc6a79a0a1d49b1fa5ca8d15533455b65->enter($__internal_f17f506ce756037fefad3d916ac8069dc6a79a0a1d49b1fa5ca8d15533455b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/admin:admin.html.twig"));

        $__internal_4008ea84649161942308616f6206102d91abb243a80c0eeff3a6ed0b411135ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4008ea84649161942308616f6206102d91abb243a80c0eeff3a6ed0b411135ae->enter($__internal_4008ea84649161942308616f6206102d91abb243a80c0eeff3a6ed0b411135ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f17f506ce756037fefad3d916ac8069dc6a79a0a1d49b1fa5ca8d15533455b65->leave($__internal_f17f506ce756037fefad3d916ac8069dc6a79a0a1d49b1fa5ca8d15533455b65_prof);

        
        $__internal_4008ea84649161942308616f6206102d91abb243a80c0eeff3a6ed0b411135ae->leave($__internal_4008ea84649161942308616f6206102d91abb243a80c0eeff3a6ed0b411135ae_prof);

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
