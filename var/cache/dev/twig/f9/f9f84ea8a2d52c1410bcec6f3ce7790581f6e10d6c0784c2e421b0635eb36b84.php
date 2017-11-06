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
        $__internal_c727f3fb784f9b4af87b87b4b16172d727b0d410cf4b430632d95cba343a13fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c727f3fb784f9b4af87b87b4b16172d727b0d410cf4b430632d95cba343a13fa->enter($__internal_c727f3fb784f9b4af87b87b4b16172d727b0d410cf4b430632d95cba343a13fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_29419a702fc6b7b0327a3b1d40beaa3230c8e0f43a5b55eaf4e1abb68cf30aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29419a702fc6b7b0327a3b1d40beaa3230c8e0f43a5b55eaf4e1abb68cf30aac->enter($__internal_29419a702fc6b7b0327a3b1d40beaa3230c8e0f43a5b55eaf4e1abb68cf30aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c727f3fb784f9b4af87b87b4b16172d727b0d410cf4b430632d95cba343a13fa->leave($__internal_c727f3fb784f9b4af87b87b4b16172d727b0d410cf4b430632d95cba343a13fa_prof);

        
        $__internal_29419a702fc6b7b0327a3b1d40beaa3230c8e0f43a5b55eaf4e1abb68cf30aac->leave($__internal_29419a702fc6b7b0327a3b1d40beaa3230c8e0f43a5b55eaf4e1abb68cf30aac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b075a49908abe7331770095a79a4e83fbac49d1544331ae93d849f758580f33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b075a49908abe7331770095a79a4e83fbac49d1544331ae93d849f758580f33d->enter($__internal_b075a49908abe7331770095a79a4e83fbac49d1544331ae93d849f758580f33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1063544d9c8cef08ee9adbed518dc427348cb17891ba70d0f6ebaca92c876213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1063544d9c8cef08ee9adbed518dc427348cb17891ba70d0f6ebaca92c876213->enter($__internal_1063544d9c8cef08ee9adbed518dc427348cb17891ba70d0f6ebaca92c876213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1063544d9c8cef08ee9adbed518dc427348cb17891ba70d0f6ebaca92c876213->leave($__internal_1063544d9c8cef08ee9adbed518dc427348cb17891ba70d0f6ebaca92c876213_prof);

        
        $__internal_b075a49908abe7331770095a79a4e83fbac49d1544331ae93d849f758580f33d->leave($__internal_b075a49908abe7331770095a79a4e83fbac49d1544331ae93d849f758580f33d_prof);

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
