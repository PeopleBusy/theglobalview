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
        $__internal_4d2f032e1bf4d2d74661c0b5c627ae7f74037f1538c3168b37638a04e2b06f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2f032e1bf4d2d74661c0b5c627ae7f74037f1538c3168b37638a04e2b06f69->enter($__internal_4d2f032e1bf4d2d74661c0b5c627ae7f74037f1538c3168b37638a04e2b06f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d694a592d8457cf7bc5132a1312794d6419ba4d019e3f54f0c9a904cf633dcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d694a592d8457cf7bc5132a1312794d6419ba4d019e3f54f0c9a904cf633dcca->enter($__internal_d694a592d8457cf7bc5132a1312794d6419ba4d019e3f54f0c9a904cf633dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d2f032e1bf4d2d74661c0b5c627ae7f74037f1538c3168b37638a04e2b06f69->leave($__internal_4d2f032e1bf4d2d74661c0b5c627ae7f74037f1538c3168b37638a04e2b06f69_prof);

        
        $__internal_d694a592d8457cf7bc5132a1312794d6419ba4d019e3f54f0c9a904cf633dcca->leave($__internal_d694a592d8457cf7bc5132a1312794d6419ba4d019e3f54f0c9a904cf633dcca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_142e3e469bd87bcee7631cf9128fca740f3e7b6f946dccfca59e62dde220b34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142e3e469bd87bcee7631cf9128fca740f3e7b6f946dccfca59e62dde220b34f->enter($__internal_142e3e469bd87bcee7631cf9128fca740f3e7b6f946dccfca59e62dde220b34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dfd4be0399ea3a80672a4964d2e2af103b085cb00d95ebdbf99457ae7366efb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd4be0399ea3a80672a4964d2e2af103b085cb00d95ebdbf99457ae7366efb7->enter($__internal_dfd4be0399ea3a80672a4964d2e2af103b085cb00d95ebdbf99457ae7366efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dfd4be0399ea3a80672a4964d2e2af103b085cb00d95ebdbf99457ae7366efb7->leave($__internal_dfd4be0399ea3a80672a4964d2e2af103b085cb00d95ebdbf99457ae7366efb7_prof);

        
        $__internal_142e3e469bd87bcee7631cf9128fca740f3e7b6f946dccfca59e62dde220b34f->leave($__internal_142e3e469bd87bcee7631cf9128fca740f3e7b6f946dccfca59e62dde220b34f_prof);

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
