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
        $__internal_9a55034e0d5572de724eee5853caa4dd18b1db89fbb8360fdff5e7448b7c9e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a55034e0d5572de724eee5853caa4dd18b1db89fbb8360fdff5e7448b7c9e58->enter($__internal_9a55034e0d5572de724eee5853caa4dd18b1db89fbb8360fdff5e7448b7c9e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4edfcf1927702e775344bbadd7ec7b20a0db312646d5319f9001a9650e896a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edfcf1927702e775344bbadd7ec7b20a0db312646d5319f9001a9650e896a86->enter($__internal_4edfcf1927702e775344bbadd7ec7b20a0db312646d5319f9001a9650e896a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9a55034e0d5572de724eee5853caa4dd18b1db89fbb8360fdff5e7448b7c9e58->leave($__internal_9a55034e0d5572de724eee5853caa4dd18b1db89fbb8360fdff5e7448b7c9e58_prof);

        
        $__internal_4edfcf1927702e775344bbadd7ec7b20a0db312646d5319f9001a9650e896a86->leave($__internal_4edfcf1927702e775344bbadd7ec7b20a0db312646d5319f9001a9650e896a86_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
