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
        $__internal_ff4ac4b6da39a64f979ec7ae228919efd9db97cf201f002a89a611b43b1adad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4ac4b6da39a64f979ec7ae228919efd9db97cf201f002a89a611b43b1adad0->enter($__internal_ff4ac4b6da39a64f979ec7ae228919efd9db97cf201f002a89a611b43b1adad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index.html.twig"));

        $__internal_c5e0bd2c2e68fe8efc93a04c07809e2e6790881134026dde0cf4d26694277568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e0bd2c2e68fe8efc93a04c07809e2e6790881134026dde0cf4d26694277568->enter($__internal_c5e0bd2c2e68fe8efc93a04c07809e2e6790881134026dde0cf4d26694277568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4ac4b6da39a64f979ec7ae228919efd9db97cf201f002a89a611b43b1adad0->leave($__internal_ff4ac4b6da39a64f979ec7ae228919efd9db97cf201f002a89a611b43b1adad0_prof);

        
        $__internal_c5e0bd2c2e68fe8efc93a04c07809e2e6790881134026dde0cf4d26694277568->leave($__internal_c5e0bd2c2e68fe8efc93a04c07809e2e6790881134026dde0cf4d26694277568_prof);

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
