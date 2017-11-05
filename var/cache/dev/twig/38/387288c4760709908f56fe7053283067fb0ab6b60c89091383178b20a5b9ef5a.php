<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c894d84511399d685f62cda264cc179029f36735487bc9484d29df0d43a61e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3794d1379914f12502ad020a2fd3ab3f5586d8dd2dcda8a8700b91a42e5f6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3794d1379914f12502ad020a2fd3ab3f5586d8dd2dcda8a8700b91a42e5f6a8->enter($__internal_c3794d1379914f12502ad020a2fd3ab3f5586d8dd2dcda8a8700b91a42e5f6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_28ba2705ad3e0d9eb24829c3ed23faa38091d3ea8e259043f32df866482a952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ba2705ad3e0d9eb24829c3ed23faa38091d3ea8e259043f32df866482a952e->enter($__internal_28ba2705ad3e0d9eb24829c3ed23faa38091d3ea8e259043f32df866482a952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c3794d1379914f12502ad020a2fd3ab3f5586d8dd2dcda8a8700b91a42e5f6a8->leave($__internal_c3794d1379914f12502ad020a2fd3ab3f5586d8dd2dcda8a8700b91a42e5f6a8_prof);

        
        $__internal_28ba2705ad3e0d9eb24829c3ed23faa38091d3ea8e259043f32df866482a952e->leave($__internal_28ba2705ad3e0d9eb24829c3ed23faa38091d3ea8e259043f32df866482a952e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
