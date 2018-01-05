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
        $__internal_73b3a1eb822d27ea514f832b56f0b2adb6233ae6208e37d62336926314d81d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b3a1eb822d27ea514f832b56f0b2adb6233ae6208e37d62336926314d81d6d->enter($__internal_73b3a1eb822d27ea514f832b56f0b2adb6233ae6208e37d62336926314d81d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0e096cc6d9c651a69ce226d34a66fade61d4123257925d4913c56acf7968ad6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e096cc6d9c651a69ce226d34a66fade61d4123257925d4913c56acf7968ad6a->enter($__internal_0e096cc6d9c651a69ce226d34a66fade61d4123257925d4913c56acf7968ad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_73b3a1eb822d27ea514f832b56f0b2adb6233ae6208e37d62336926314d81d6d->leave($__internal_73b3a1eb822d27ea514f832b56f0b2adb6233ae6208e37d62336926314d81d6d_prof);

        
        $__internal_0e096cc6d9c651a69ce226d34a66fade61d4123257925d4913c56acf7968ad6a->leave($__internal_0e096cc6d9c651a69ce226d34a66fade61d4123257925d4913c56acf7968ad6a_prof);

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
