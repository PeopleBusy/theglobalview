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
        $__internal_2d2bbf722a70d53c3ef777ad2ba1d8077099aa96be197e2d26498896b2faca10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2bbf722a70d53c3ef777ad2ba1d8077099aa96be197e2d26498896b2faca10->enter($__internal_2d2bbf722a70d53c3ef777ad2ba1d8077099aa96be197e2d26498896b2faca10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_dd91b1be40e5e30ab57965eb1d6af153d0d699bb05f9e9d5c1573e8b128d573d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd91b1be40e5e30ab57965eb1d6af153d0d699bb05f9e9d5c1573e8b128d573d->enter($__internal_dd91b1be40e5e30ab57965eb1d6af153d0d699bb05f9e9d5c1573e8b128d573d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2d2bbf722a70d53c3ef777ad2ba1d8077099aa96be197e2d26498896b2faca10->leave($__internal_2d2bbf722a70d53c3ef777ad2ba1d8077099aa96be197e2d26498896b2faca10_prof);

        
        $__internal_dd91b1be40e5e30ab57965eb1d6af153d0d699bb05f9e9d5c1573e8b128d573d->leave($__internal_dd91b1be40e5e30ab57965eb1d6af153d0d699bb05f9e9d5c1573e8b128d573d_prof);

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
