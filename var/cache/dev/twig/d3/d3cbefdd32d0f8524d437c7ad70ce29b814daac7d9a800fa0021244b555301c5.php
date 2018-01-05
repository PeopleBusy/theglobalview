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
        $__internal_5a6c052e9de1ec753bc0c9bfa8839b9629b5648fa18f3e4bad65db32e8b72a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6c052e9de1ec753bc0c9bfa8839b9629b5648fa18f3e4bad65db32e8b72a4d->enter($__internal_5a6c052e9de1ec753bc0c9bfa8839b9629b5648fa18f3e4bad65db32e8b72a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_140e9b3bd6f67180fd4ffedd8082e9adf9d3169516f443adff2a067ac51e58d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140e9b3bd6f67180fd4ffedd8082e9adf9d3169516f443adff2a067ac51e58d5->enter($__internal_140e9b3bd6f67180fd4ffedd8082e9adf9d3169516f443adff2a067ac51e58d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5a6c052e9de1ec753bc0c9bfa8839b9629b5648fa18f3e4bad65db32e8b72a4d->leave($__internal_5a6c052e9de1ec753bc0c9bfa8839b9629b5648fa18f3e4bad65db32e8b72a4d_prof);

        
        $__internal_140e9b3bd6f67180fd4ffedd8082e9adf9d3169516f443adff2a067ac51e58d5->leave($__internal_140e9b3bd6f67180fd4ffedd8082e9adf9d3169516f443adff2a067ac51e58d5_prof);

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
