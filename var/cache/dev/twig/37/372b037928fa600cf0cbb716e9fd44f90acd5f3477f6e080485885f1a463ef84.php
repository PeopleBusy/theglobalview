<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_675f58a7383cbe414d634a8c2bdebae087461bad2850512ad915280a214d809c extends Twig_Template
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
        $__internal_2d697e771aa357b2ec353786b62b4609db5c38a3d1e0c2cb49f7a92dcf58dba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d697e771aa357b2ec353786b62b4609db5c38a3d1e0c2cb49f7a92dcf58dba4->enter($__internal_2d697e771aa357b2ec353786b62b4609db5c38a3d1e0c2cb49f7a92dcf58dba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_01af3c811196fe48e2ed97f84531b78fdde3f4f4385823b915f9857ceaadd5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01af3c811196fe48e2ed97f84531b78fdde3f4f4385823b915f9857ceaadd5dd->enter($__internal_01af3c811196fe48e2ed97f84531b78fdde3f4f4385823b915f9857ceaadd5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2d697e771aa357b2ec353786b62b4609db5c38a3d1e0c2cb49f7a92dcf58dba4->leave($__internal_2d697e771aa357b2ec353786b62b4609db5c38a3d1e0c2cb49f7a92dcf58dba4_prof);

        
        $__internal_01af3c811196fe48e2ed97f84531b78fdde3f4f4385823b915f9857ceaadd5dd->leave($__internal_01af3c811196fe48e2ed97f84531b78fdde3f4f4385823b915f9857ceaadd5dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
