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
        $__internal_37454406b92e87f94abffff43986293526c3932af1ea495a31229231cfbe08a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37454406b92e87f94abffff43986293526c3932af1ea495a31229231cfbe08a3->enter($__internal_37454406b92e87f94abffff43986293526c3932af1ea495a31229231cfbe08a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3177d5ee1f80a1bb2013559d4c9095e3cc30ddfb9f30d9bebaa69756b9c37243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3177d5ee1f80a1bb2013559d4c9095e3cc30ddfb9f30d9bebaa69756b9c37243->enter($__internal_3177d5ee1f80a1bb2013559d4c9095e3cc30ddfb9f30d9bebaa69756b9c37243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_37454406b92e87f94abffff43986293526c3932af1ea495a31229231cfbe08a3->leave($__internal_37454406b92e87f94abffff43986293526c3932af1ea495a31229231cfbe08a3_prof);

        
        $__internal_3177d5ee1f80a1bb2013559d4c9095e3cc30ddfb9f30d9bebaa69756b9c37243->leave($__internal_3177d5ee1f80a1bb2013559d4c9095e3cc30ddfb9f30d9bebaa69756b9c37243_prof);

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
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
