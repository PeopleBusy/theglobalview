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
        $__internal_aad502d3de5f2a171c8e6de531d91660387ec444be1922c5aa2e93b4711ebafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad502d3de5f2a171c8e6de531d91660387ec444be1922c5aa2e93b4711ebafb->enter($__internal_aad502d3de5f2a171c8e6de531d91660387ec444be1922c5aa2e93b4711ebafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_01fd61aea7d581291105fec1ff5f7e3a2ce8f6660bce86d3e2d6b7ccee00ccbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fd61aea7d581291105fec1ff5f7e3a2ce8f6660bce86d3e2d6b7ccee00ccbc->enter($__internal_01fd61aea7d581291105fec1ff5f7e3a2ce8f6660bce86d3e2d6b7ccee00ccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_aad502d3de5f2a171c8e6de531d91660387ec444be1922c5aa2e93b4711ebafb->leave($__internal_aad502d3de5f2a171c8e6de531d91660387ec444be1922c5aa2e93b4711ebafb_prof);

        
        $__internal_01fd61aea7d581291105fec1ff5f7e3a2ce8f6660bce86d3e2d6b7ccee00ccbc->leave($__internal_01fd61aea7d581291105fec1ff5f7e3a2ce8f6660bce86d3e2d6b7ccee00ccbc_prof);

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
