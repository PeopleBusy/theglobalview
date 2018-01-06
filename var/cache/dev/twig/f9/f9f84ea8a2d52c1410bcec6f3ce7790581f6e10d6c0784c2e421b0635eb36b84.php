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
        $__internal_0d9d33872149fc33872721a655b5bc08af369f692fe491d8857450fdd84349b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9d33872149fc33872721a655b5bc08af369f692fe491d8857450fdd84349b7->enter($__internal_0d9d33872149fc33872721a655b5bc08af369f692fe491d8857450fdd84349b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_063595d514ceefb4cf1392569bf21be6ec5bec54de14336d49a643cafd403c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063595d514ceefb4cf1392569bf21be6ec5bec54de14336d49a643cafd403c83->enter($__internal_063595d514ceefb4cf1392569bf21be6ec5bec54de14336d49a643cafd403c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0d9d33872149fc33872721a655b5bc08af369f692fe491d8857450fdd84349b7->leave($__internal_0d9d33872149fc33872721a655b5bc08af369f692fe491d8857450fdd84349b7_prof);

        
        $__internal_063595d514ceefb4cf1392569bf21be6ec5bec54de14336d49a643cafd403c83->leave($__internal_063595d514ceefb4cf1392569bf21be6ec5bec54de14336d49a643cafd403c83_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba55d2aee7c62d09595904c05a57e5b6ec27945a320098e1b255596a5a7dd4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba55d2aee7c62d09595904c05a57e5b6ec27945a320098e1b255596a5a7dd4db->enter($__internal_ba55d2aee7c62d09595904c05a57e5b6ec27945a320098e1b255596a5a7dd4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1747d5c837a9f46f7c8ef875073b789b65c981091442351003a18e8b6a3df55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1747d5c837a9f46f7c8ef875073b789b65c981091442351003a18e8b6a3df55f->enter($__internal_1747d5c837a9f46f7c8ef875073b789b65c981091442351003a18e8b6a3df55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1747d5c837a9f46f7c8ef875073b789b65c981091442351003a18e8b6a3df55f->leave($__internal_1747d5c837a9f46f7c8ef875073b789b65c981091442351003a18e8b6a3df55f_prof);

        
        $__internal_ba55d2aee7c62d09595904c05a57e5b6ec27945a320098e1b255596a5a7dd4db->leave($__internal_ba55d2aee7c62d09595904c05a57e5b6ec27945a320098e1b255596a5a7dd4db_prof);

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
