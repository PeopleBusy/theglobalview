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
        $__internal_6e30ba8949bd61a56b30317d48ae811e395ec4879860d7a9cf3c8a0d5fcb7e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e30ba8949bd61a56b30317d48ae811e395ec4879860d7a9cf3c8a0d5fcb7e09->enter($__internal_6e30ba8949bd61a56b30317d48ae811e395ec4879860d7a9cf3c8a0d5fcb7e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ff8effaf98e1597bab66c1786e0a020e73794f886b1a5f25a5942f0bcafd6d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8effaf98e1597bab66c1786e0a020e73794f886b1a5f25a5942f0bcafd6d36->enter($__internal_ff8effaf98e1597bab66c1786e0a020e73794f886b1a5f25a5942f0bcafd6d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6e30ba8949bd61a56b30317d48ae811e395ec4879860d7a9cf3c8a0d5fcb7e09->leave($__internal_6e30ba8949bd61a56b30317d48ae811e395ec4879860d7a9cf3c8a0d5fcb7e09_prof);

        
        $__internal_ff8effaf98e1597bab66c1786e0a020e73794f886b1a5f25a5942f0bcafd6d36->leave($__internal_ff8effaf98e1597bab66c1786e0a020e73794f886b1a5f25a5942f0bcafd6d36_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
