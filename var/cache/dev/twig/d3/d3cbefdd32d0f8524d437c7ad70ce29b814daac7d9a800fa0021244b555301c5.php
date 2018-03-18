<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d6de93f66fdfd95efb38287a8cbba2c2b6989eadd3d67d49a4dd343830be05e4 extends Twig_Template
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
        $__internal_db0a1b06b8f896f6f8f9858a289b999b638feb25ffaa577db64a8cace70e1c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0a1b06b8f896f6f8f9858a289b999b638feb25ffaa577db64a8cace70e1c30->enter($__internal_db0a1b06b8f896f6f8f9858a289b999b638feb25ffaa577db64a8cace70e1c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f09d04a13f779cd34951f55d186104770b339da45127572058e3f109bcb19799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09d04a13f779cd34951f55d186104770b339da45127572058e3f109bcb19799->enter($__internal_f09d04a13f779cd34951f55d186104770b339da45127572058e3f109bcb19799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_db0a1b06b8f896f6f8f9858a289b999b638feb25ffaa577db64a8cace70e1c30->leave($__internal_db0a1b06b8f896f6f8f9858a289b999b638feb25ffaa577db64a8cace70e1c30_prof);

        
        $__internal_f09d04a13f779cd34951f55d186104770b339da45127572058e3f109bcb19799->leave($__internal_f09d04a13f779cd34951f55d186104770b339da45127572058e3f109bcb19799_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
