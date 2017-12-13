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
        $__internal_bdd447ef7a0db6f5214f9f72f17b685e891a91c2e1ff00d6466a2bed47742f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd447ef7a0db6f5214f9f72f17b685e891a91c2e1ff00d6466a2bed47742f3f->enter($__internal_bdd447ef7a0db6f5214f9f72f17b685e891a91c2e1ff00d6466a2bed47742f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c5d8584be18a51033710ce19c879e9710ca6fa6c2fa54078573b6eca414d4f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d8584be18a51033710ce19c879e9710ca6fa6c2fa54078573b6eca414d4f47->enter($__internal_c5d8584be18a51033710ce19c879e9710ca6fa6c2fa54078573b6eca414d4f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bdd447ef7a0db6f5214f9f72f17b685e891a91c2e1ff00d6466a2bed47742f3f->leave($__internal_bdd447ef7a0db6f5214f9f72f17b685e891a91c2e1ff00d6466a2bed47742f3f_prof);

        
        $__internal_c5d8584be18a51033710ce19c879e9710ca6fa6c2fa54078573b6eca414d4f47->leave($__internal_c5d8584be18a51033710ce19c879e9710ca6fa6c2fa54078573b6eca414d4f47_prof);

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
