<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_49e834f17a9f561b5d0995da5593380674e0ccf63c1857d67d49e8795c95b8b4 extends Twig_Template
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
        $__internal_683a28b7b3b6d3108467cb32ed95f662d6dc655c392f6dfd2eb0a67266dce127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683a28b7b3b6d3108467cb32ed95f662d6dc655c392f6dfd2eb0a67266dce127->enter($__internal_683a28b7b3b6d3108467cb32ed95f662d6dc655c392f6dfd2eb0a67266dce127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_cced479b28256b64f06cb8e004c8bf5173945b1aa2f8c55a928ce6e30762d245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cced479b28256b64f06cb8e004c8bf5173945b1aa2f8c55a928ce6e30762d245->enter($__internal_cced479b28256b64f06cb8e004c8bf5173945b1aa2f8c55a928ce6e30762d245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_683a28b7b3b6d3108467cb32ed95f662d6dc655c392f6dfd2eb0a67266dce127->leave($__internal_683a28b7b3b6d3108467cb32ed95f662d6dc655c392f6dfd2eb0a67266dce127_prof);

        
        $__internal_cced479b28256b64f06cb8e004c8bf5173945b1aa2f8c55a928ce6e30762d245->leave($__internal_cced479b28256b64f06cb8e004c8bf5173945b1aa2f8c55a928ce6e30762d245_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
