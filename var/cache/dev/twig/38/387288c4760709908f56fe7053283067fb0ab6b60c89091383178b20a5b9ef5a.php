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
        $__internal_b3be179deb085601a609add294601656ce78243ff0797a88774d45af45edea4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3be179deb085601a609add294601656ce78243ff0797a88774d45af45edea4c->enter($__internal_b3be179deb085601a609add294601656ce78243ff0797a88774d45af45edea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_59e5e363d20c486721e4fa5cab63e72b61b68fce5d6f14bf60ca0a5b2c1f698f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e5e363d20c486721e4fa5cab63e72b61b68fce5d6f14bf60ca0a5b2c1f698f->enter($__internal_59e5e363d20c486721e4fa5cab63e72b61b68fce5d6f14bf60ca0a5b2c1f698f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b3be179deb085601a609add294601656ce78243ff0797a88774d45af45edea4c->leave($__internal_b3be179deb085601a609add294601656ce78243ff0797a88774d45af45edea4c_prof);

        
        $__internal_59e5e363d20c486721e4fa5cab63e72b61b68fce5d6f14bf60ca0a5b2c1f698f->leave($__internal_59e5e363d20c486721e4fa5cab63e72b61b68fce5d6f14bf60ca0a5b2c1f698f_prof);

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
