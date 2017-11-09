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
        $__internal_d258b068d2ea61f5c766a6776a0efb3778f352c5b38acbc98d21203905af2784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d258b068d2ea61f5c766a6776a0efb3778f352c5b38acbc98d21203905af2784->enter($__internal_d258b068d2ea61f5c766a6776a0efb3778f352c5b38acbc98d21203905af2784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f485d849d5c2a953dd2cbf4017a73ca36f354ed37532544914902ca9afa5dcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f485d849d5c2a953dd2cbf4017a73ca36f354ed37532544914902ca9afa5dcd5->enter($__internal_f485d849d5c2a953dd2cbf4017a73ca36f354ed37532544914902ca9afa5dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d258b068d2ea61f5c766a6776a0efb3778f352c5b38acbc98d21203905af2784->leave($__internal_d258b068d2ea61f5c766a6776a0efb3778f352c5b38acbc98d21203905af2784_prof);

        
        $__internal_f485d849d5c2a953dd2cbf4017a73ca36f354ed37532544914902ca9afa5dcd5->leave($__internal_f485d849d5c2a953dd2cbf4017a73ca36f354ed37532544914902ca9afa5dcd5_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
