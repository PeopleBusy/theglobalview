<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_12fdf86cf8f18e36f0c74c3e96c1e9225ab638c0a6e35eec16d4085b0325800f extends Twig_Template
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
        $__internal_5e7976e081d694b47eac12a8290aed005f7d0a7be8ff43ccf8e986064af3f530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7976e081d694b47eac12a8290aed005f7d0a7be8ff43ccf8e986064af3f530->enter($__internal_5e7976e081d694b47eac12a8290aed005f7d0a7be8ff43ccf8e986064af3f530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_228035f834e9e5ce5a4e90ebf6f4195fdea64985ba0bcaf856224ac442b1becd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228035f834e9e5ce5a4e90ebf6f4195fdea64985ba0bcaf856224ac442b1becd->enter($__internal_228035f834e9e5ce5a4e90ebf6f4195fdea64985ba0bcaf856224ac442b1becd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5e7976e081d694b47eac12a8290aed005f7d0a7be8ff43ccf8e986064af3f530->leave($__internal_5e7976e081d694b47eac12a8290aed005f7d0a7be8ff43ccf8e986064af3f530_prof);

        
        $__internal_228035f834e9e5ce5a4e90ebf6f4195fdea64985ba0bcaf856224ac442b1becd->leave($__internal_228035f834e9e5ce5a4e90ebf6f4195fdea64985ba0bcaf856224ac442b1becd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
