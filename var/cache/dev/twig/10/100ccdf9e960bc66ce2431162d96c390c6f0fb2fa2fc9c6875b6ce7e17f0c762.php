<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_de9fcd01c44cb0d7df9d03ccc03c4c709a9872636e4f3f878eaee1a5f9a17b14 extends Twig_Template
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
        $__internal_bd8f068f349589693fedd66090d675c45da3aabd585253b6cea84f60f4335c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8f068f349589693fedd66090d675c45da3aabd585253b6cea84f60f4335c3f->enter($__internal_bd8f068f349589693fedd66090d675c45da3aabd585253b6cea84f60f4335c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_658f47658da70a2e65fe763c015c010552f2b584b543d01626cd11884bf6fd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658f47658da70a2e65fe763c015c010552f2b584b543d01626cd11884bf6fd42->enter($__internal_658f47658da70a2e65fe763c015c010552f2b584b543d01626cd11884bf6fd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bd8f068f349589693fedd66090d675c45da3aabd585253b6cea84f60f4335c3f->leave($__internal_bd8f068f349589693fedd66090d675c45da3aabd585253b6cea84f60f4335c3f_prof);

        
        $__internal_658f47658da70a2e65fe763c015c010552f2b584b543d01626cd11884bf6fd42->leave($__internal_658f47658da70a2e65fe763c015c010552f2b584b543d01626cd11884bf6fd42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
