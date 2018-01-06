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
        $__internal_7caf93567e1c9b8773103d59f37e056520f00bb12160d0d39533dc7296163bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7caf93567e1c9b8773103d59f37e056520f00bb12160d0d39533dc7296163bec->enter($__internal_7caf93567e1c9b8773103d59f37e056520f00bb12160d0d39533dc7296163bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_34d488f76d3945f17e16761b033a5a0c7d6cec11128485298bb4c94a2c8eacbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d488f76d3945f17e16761b033a5a0c7d6cec11128485298bb4c94a2c8eacbc->enter($__internal_34d488f76d3945f17e16761b033a5a0c7d6cec11128485298bb4c94a2c8eacbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7caf93567e1c9b8773103d59f37e056520f00bb12160d0d39533dc7296163bec->leave($__internal_7caf93567e1c9b8773103d59f37e056520f00bb12160d0d39533dc7296163bec_prof);

        
        $__internal_34d488f76d3945f17e16761b033a5a0c7d6cec11128485298bb4c94a2c8eacbc->leave($__internal_34d488f76d3945f17e16761b033a5a0c7d6cec11128485298bb4c94a2c8eacbc_prof);

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
