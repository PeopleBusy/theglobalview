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
        $__internal_0ec6559c98b25d6a1a6bfc1908ce40ea65543769a7cf6f0f61e70d9e81c8dfb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec6559c98b25d6a1a6bfc1908ce40ea65543769a7cf6f0f61e70d9e81c8dfb4->enter($__internal_0ec6559c98b25d6a1a6bfc1908ce40ea65543769a7cf6f0f61e70d9e81c8dfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6222e7a320af95734cc12ea987333c9414cef54b6139464d757450bdbe14a55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6222e7a320af95734cc12ea987333c9414cef54b6139464d757450bdbe14a55c->enter($__internal_6222e7a320af95734cc12ea987333c9414cef54b6139464d757450bdbe14a55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0ec6559c98b25d6a1a6bfc1908ce40ea65543769a7cf6f0f61e70d9e81c8dfb4->leave($__internal_0ec6559c98b25d6a1a6bfc1908ce40ea65543769a7cf6f0f61e70d9e81c8dfb4_prof);

        
        $__internal_6222e7a320af95734cc12ea987333c9414cef54b6139464d757450bdbe14a55c->leave($__internal_6222e7a320af95734cc12ea987333c9414cef54b6139464d757450bdbe14a55c_prof);

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
