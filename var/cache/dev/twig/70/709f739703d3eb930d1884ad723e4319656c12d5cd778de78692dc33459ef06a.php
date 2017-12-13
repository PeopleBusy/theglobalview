<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_27fe7a5793e08a9b7e6f385b7ea14b7e6c783b6284bc8b9318ffa953caa352e2 extends Twig_Template
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
        $__internal_e2f579a06e3f12fd8360c278afa4ffb9d705cc04ac9d36e9a834850e5b20f4ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f579a06e3f12fd8360c278afa4ffb9d705cc04ac9d36e9a834850e5b20f4ae->enter($__internal_e2f579a06e3f12fd8360c278afa4ffb9d705cc04ac9d36e9a834850e5b20f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b240d1c506efedd3ed9af7b7086d7aaba0b286af0df0a12bd5c9ba30203069ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b240d1c506efedd3ed9af7b7086d7aaba0b286af0df0a12bd5c9ba30203069ce->enter($__internal_b240d1c506efedd3ed9af7b7086d7aaba0b286af0df0a12bd5c9ba30203069ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e2f579a06e3f12fd8360c278afa4ffb9d705cc04ac9d36e9a834850e5b20f4ae->leave($__internal_e2f579a06e3f12fd8360c278afa4ffb9d705cc04ac9d36e9a834850e5b20f4ae_prof);

        
        $__internal_b240d1c506efedd3ed9af7b7086d7aaba0b286af0df0a12bd5c9ba30203069ce->leave($__internal_b240d1c506efedd3ed9af7b7086d7aaba0b286af0df0a12bd5c9ba30203069ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
