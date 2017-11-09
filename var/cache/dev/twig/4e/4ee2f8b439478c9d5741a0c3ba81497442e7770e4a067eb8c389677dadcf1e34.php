<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_12fdf86cf8f18e36f0c74c3e96c1e9225ab638c0a6e35eec16d4085b0325800f extends Twig_Template
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
        $__internal_e32f8848a46d304ae58e354bfc916ab748ce0b5b10adf24fd6aede96f44d97cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32f8848a46d304ae58e354bfc916ab748ce0b5b10adf24fd6aede96f44d97cf->enter($__internal_e32f8848a46d304ae58e354bfc916ab748ce0b5b10adf24fd6aede96f44d97cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ca101ee7f53f04bdfd1629ce4abfc810dea25f7a2c59694b30cab02849b439d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca101ee7f53f04bdfd1629ce4abfc810dea25f7a2c59694b30cab02849b439d3->enter($__internal_ca101ee7f53f04bdfd1629ce4abfc810dea25f7a2c59694b30cab02849b439d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e32f8848a46d304ae58e354bfc916ab748ce0b5b10adf24fd6aede96f44d97cf->leave($__internal_e32f8848a46d304ae58e354bfc916ab748ce0b5b10adf24fd6aede96f44d97cf_prof);

        
        $__internal_ca101ee7f53f04bdfd1629ce4abfc810dea25f7a2c59694b30cab02849b439d3->leave($__internal_ca101ee7f53f04bdfd1629ce4abfc810dea25f7a2c59694b30cab02849b439d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
