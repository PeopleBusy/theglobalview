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
        $__internal_347bb634149a2336b2654095b5f350e4699507d66927d2bd160a48f71926500f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347bb634149a2336b2654095b5f350e4699507d66927d2bd160a48f71926500f->enter($__internal_347bb634149a2336b2654095b5f350e4699507d66927d2bd160a48f71926500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ef4a4861e1074628689ba45a3620359629027da023e2466d0ac7c51501b25759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4a4861e1074628689ba45a3620359629027da023e2466d0ac7c51501b25759->enter($__internal_ef4a4861e1074628689ba45a3620359629027da023e2466d0ac7c51501b25759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_347bb634149a2336b2654095b5f350e4699507d66927d2bd160a48f71926500f->leave($__internal_347bb634149a2336b2654095b5f350e4699507d66927d2bd160a48f71926500f_prof);

        
        $__internal_ef4a4861e1074628689ba45a3620359629027da023e2466d0ac7c51501b25759->leave($__internal_ef4a4861e1074628689ba45a3620359629027da023e2466d0ac7c51501b25759_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
