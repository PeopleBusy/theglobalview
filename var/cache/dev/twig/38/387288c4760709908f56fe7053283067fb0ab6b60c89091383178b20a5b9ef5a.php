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
        $__internal_8c9da24706c36910c3553df13ca3b4081dbc4c1af2ca0141b88d7ec9cba39046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9da24706c36910c3553df13ca3b4081dbc4c1af2ca0141b88d7ec9cba39046->enter($__internal_8c9da24706c36910c3553df13ca3b4081dbc4c1af2ca0141b88d7ec9cba39046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_83ec84f89c97ae61c385eccb09a98320fb25bc301029d6d4f356c3c8eea07521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ec84f89c97ae61c385eccb09a98320fb25bc301029d6d4f356c3c8eea07521->enter($__internal_83ec84f89c97ae61c385eccb09a98320fb25bc301029d6d4f356c3c8eea07521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8c9da24706c36910c3553df13ca3b4081dbc4c1af2ca0141b88d7ec9cba39046->leave($__internal_8c9da24706c36910c3553df13ca3b4081dbc4c1af2ca0141b88d7ec9cba39046_prof);

        
        $__internal_83ec84f89c97ae61c385eccb09a98320fb25bc301029d6d4f356c3c8eea07521->leave($__internal_83ec84f89c97ae61c385eccb09a98320fb25bc301029d6d4f356c3c8eea07521_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
