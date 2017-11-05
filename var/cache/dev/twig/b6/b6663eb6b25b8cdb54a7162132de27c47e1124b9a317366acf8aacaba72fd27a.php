<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b51e2951f2bf15a572850e232782a87ed92c6fa3021f3775ae432dd032479bfa extends Twig_Template
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
        $__internal_147fb9477c409d619e61deeab062940ed7cc2a0f06328f2effb92e031f08aa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147fb9477c409d619e61deeab062940ed7cc2a0f06328f2effb92e031f08aa09->enter($__internal_147fb9477c409d619e61deeab062940ed7cc2a0f06328f2effb92e031f08aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a46993b86f7687dd28dd0e029fba9441e0f85a1aa9f2845731f347e209bb0a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46993b86f7687dd28dd0e029fba9441e0f85a1aa9f2845731f347e209bb0a7e->enter($__internal_a46993b86f7687dd28dd0e029fba9441e0f85a1aa9f2845731f347e209bb0a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_147fb9477c409d619e61deeab062940ed7cc2a0f06328f2effb92e031f08aa09->leave($__internal_147fb9477c409d619e61deeab062940ed7cc2a0f06328f2effb92e031f08aa09_prof);

        
        $__internal_a46993b86f7687dd28dd0e029fba9441e0f85a1aa9f2845731f347e209bb0a7e->leave($__internal_a46993b86f7687dd28dd0e029fba9441e0f85a1aa9f2845731f347e209bb0a7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
