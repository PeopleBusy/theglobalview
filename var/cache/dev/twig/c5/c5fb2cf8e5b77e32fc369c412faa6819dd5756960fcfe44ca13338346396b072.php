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
        $__internal_481a8305172e3c3b165a140f01f721ccb7517eea92eeac7561437242b3615153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481a8305172e3c3b165a140f01f721ccb7517eea92eeac7561437242b3615153->enter($__internal_481a8305172e3c3b165a140f01f721ccb7517eea92eeac7561437242b3615153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index.html.twig"));

        $__internal_c83708bc2331e3d2ebd3916a10f5754a4bec5ec9457addb1e2aeb73afaa21951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83708bc2331e3d2ebd3916a10f5754a4bec5ec9457addb1e2aeb73afaa21951->enter($__internal_c83708bc2331e3d2ebd3916a10f5754a4bec5ec9457addb1e2aeb73afaa21951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481a8305172e3c3b165a140f01f721ccb7517eea92eeac7561437242b3615153->leave($__internal_481a8305172e3c3b165a140f01f721ccb7517eea92eeac7561437242b3615153_prof);

        
        $__internal_c83708bc2331e3d2ebd3916a10f5754a4bec5ec9457addb1e2aeb73afaa21951->leave($__internal_c83708bc2331e3d2ebd3916a10f5754a4bec5ec9457addb1e2aeb73afaa21951_prof);

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
