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
        $__internal_fdade354a5c39112c94738fb783a332fed7d24592c43455e310ccdef8667ac85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdade354a5c39112c94738fb783a332fed7d24592c43455e310ccdef8667ac85->enter($__internal_fdade354a5c39112c94738fb783a332fed7d24592c43455e310ccdef8667ac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_feddde2ef62d95d9556263b231a3264e63fa3380a17e405dd433c18ae3124d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feddde2ef62d95d9556263b231a3264e63fa3380a17e405dd433c18ae3124d40->enter($__internal_feddde2ef62d95d9556263b231a3264e63fa3380a17e405dd433c18ae3124d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fdade354a5c39112c94738fb783a332fed7d24592c43455e310ccdef8667ac85->leave($__internal_fdade354a5c39112c94738fb783a332fed7d24592c43455e310ccdef8667ac85_prof);

        
        $__internal_feddde2ef62d95d9556263b231a3264e63fa3380a17e405dd433c18ae3124d40->leave($__internal_feddde2ef62d95d9556263b231a3264e63fa3380a17e405dd433c18ae3124d40_prof);

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
