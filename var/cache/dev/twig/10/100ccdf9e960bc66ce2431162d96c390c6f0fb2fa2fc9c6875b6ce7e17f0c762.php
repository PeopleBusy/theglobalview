<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_de9fcd01c44cb0d7df9d03ccc03c4c709a9872636e4f3f878eaee1a5f9a17b14 extends Twig_Template
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
        $__internal_c2198c7aabe3e2c0e9007187eb339a38fd8fbec664dd097243e33afbfab5bfc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2198c7aabe3e2c0e9007187eb339a38fd8fbec664dd097243e33afbfab5bfc3->enter($__internal_c2198c7aabe3e2c0e9007187eb339a38fd8fbec664dd097243e33afbfab5bfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1c804d2310e3749791702df6cddb5604bf5a2922d42d59021307b574fad9ebc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c804d2310e3749791702df6cddb5604bf5a2922d42d59021307b574fad9ebc7->enter($__internal_1c804d2310e3749791702df6cddb5604bf5a2922d42d59021307b574fad9ebc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c2198c7aabe3e2c0e9007187eb339a38fd8fbec664dd097243e33afbfab5bfc3->leave($__internal_c2198c7aabe3e2c0e9007187eb339a38fd8fbec664dd097243e33afbfab5bfc3_prof);

        
        $__internal_1c804d2310e3749791702df6cddb5604bf5a2922d42d59021307b574fad9ebc7->leave($__internal_1c804d2310e3749791702df6cddb5604bf5a2922d42d59021307b574fad9ebc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
