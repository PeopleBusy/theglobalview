<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b51e2951f2bf15a572850e232782a87ed92c6fa3021f3775ae432dd032479bfa extends Twig_Template
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
        $__internal_da4934e65883c9ab70c94436d87f582fc40c44bebc09e273ecee5e377721edcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4934e65883c9ab70c94436d87f582fc40c44bebc09e273ecee5e377721edcd->enter($__internal_da4934e65883c9ab70c94436d87f582fc40c44bebc09e273ecee5e377721edcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3bf6d34dc3360b4e6c59e3c45791c7e237881f0ed05f541e49a3cb8e7eeb722a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf6d34dc3360b4e6c59e3c45791c7e237881f0ed05f541e49a3cb8e7eeb722a->enter($__internal_3bf6d34dc3360b4e6c59e3c45791c7e237881f0ed05f541e49a3cb8e7eeb722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_da4934e65883c9ab70c94436d87f582fc40c44bebc09e273ecee5e377721edcd->leave($__internal_da4934e65883c9ab70c94436d87f582fc40c44bebc09e273ecee5e377721edcd_prof);

        
        $__internal_3bf6d34dc3360b4e6c59e3c45791c7e237881f0ed05f541e49a3cb8e7eeb722a->leave($__internal_3bf6d34dc3360b4e6c59e3c45791c7e237881f0ed05f541e49a3cb8e7eeb722a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
