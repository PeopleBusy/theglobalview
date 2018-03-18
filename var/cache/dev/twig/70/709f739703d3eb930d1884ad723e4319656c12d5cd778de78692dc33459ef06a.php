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
        $__internal_80eb7edd4a5720b3370401ef1f18af08e2eaff3bff5248730fe6e312b4efa93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80eb7edd4a5720b3370401ef1f18af08e2eaff3bff5248730fe6e312b4efa93f->enter($__internal_80eb7edd4a5720b3370401ef1f18af08e2eaff3bff5248730fe6e312b4efa93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cdf440b5a46fc22800a6b821128e7f22c54ed170a5d1f7cf89c85d85fbce789a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf440b5a46fc22800a6b821128e7f22c54ed170a5d1f7cf89c85d85fbce789a->enter($__internal_cdf440b5a46fc22800a6b821128e7f22c54ed170a5d1f7cf89c85d85fbce789a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_80eb7edd4a5720b3370401ef1f18af08e2eaff3bff5248730fe6e312b4efa93f->leave($__internal_80eb7edd4a5720b3370401ef1f18af08e2eaff3bff5248730fe6e312b4efa93f_prof);

        
        $__internal_cdf440b5a46fc22800a6b821128e7f22c54ed170a5d1f7cf89c85d85fbce789a->leave($__internal_cdf440b5a46fc22800a6b821128e7f22c54ed170a5d1f7cf89c85d85fbce789a_prof);

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
", "TwigBundle:Exception:error.js.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
