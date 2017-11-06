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
        $__internal_32417b58915c3388280a681698cecc1096ef025477e885d78cca5320c4f4cb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32417b58915c3388280a681698cecc1096ef025477e885d78cca5320c4f4cb1d->enter($__internal_32417b58915c3388280a681698cecc1096ef025477e885d78cca5320c4f4cb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2f47d6f03b4cab220f02b1edb9c9aa03d987a25a0937bac683f17104609384e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f47d6f03b4cab220f02b1edb9c9aa03d987a25a0937bac683f17104609384e9->enter($__internal_2f47d6f03b4cab220f02b1edb9c9aa03d987a25a0937bac683f17104609384e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_32417b58915c3388280a681698cecc1096ef025477e885d78cca5320c4f4cb1d->leave($__internal_32417b58915c3388280a681698cecc1096ef025477e885d78cca5320c4f4cb1d_prof);

        
        $__internal_2f47d6f03b4cab220f02b1edb9c9aa03d987a25a0937bac683f17104609384e9->leave($__internal_2f47d6f03b4cab220f02b1edb9c9aa03d987a25a0937bac683f17104609384e9_prof);

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
