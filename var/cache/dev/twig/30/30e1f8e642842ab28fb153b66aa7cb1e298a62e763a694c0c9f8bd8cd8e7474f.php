<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fa2731a227fbf456566f71174664bd9f7575d24274f5e1ff0ed0263a2e0f883a extends Twig_Template
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
        $__internal_6681bb7b4d110aee55c958b50fc08c95b73dc38aa7ffbc704ab24ff0a97d5fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6681bb7b4d110aee55c958b50fc08c95b73dc38aa7ffbc704ab24ff0a97d5fbd->enter($__internal_6681bb7b4d110aee55c958b50fc08c95b73dc38aa7ffbc704ab24ff0a97d5fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ad2e27ec7b87d380dc37afc844b70e7e11dd8b2413894a3e95b82ce2721e0940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2e27ec7b87d380dc37afc844b70e7e11dd8b2413894a3e95b82ce2721e0940->enter($__internal_ad2e27ec7b87d380dc37afc844b70e7e11dd8b2413894a3e95b82ce2721e0940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6681bb7b4d110aee55c958b50fc08c95b73dc38aa7ffbc704ab24ff0a97d5fbd->leave($__internal_6681bb7b4d110aee55c958b50fc08c95b73dc38aa7ffbc704ab24ff0a97d5fbd_prof);

        
        $__internal_ad2e27ec7b87d380dc37afc844b70e7e11dd8b2413894a3e95b82ce2721e0940->leave($__internal_ad2e27ec7b87d380dc37afc844b70e7e11dd8b2413894a3e95b82ce2721e0940_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
