<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_02dda09805efeecd2f79e1f3f93b5f45062822180e17b9b9287d4fab79e7acc8 extends Twig_Template
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
        $__internal_d045e500e51441454143b382b5ed67be02627db15245dd22e054fcfab272ef38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d045e500e51441454143b382b5ed67be02627db15245dd22e054fcfab272ef38->enter($__internal_d045e500e51441454143b382b5ed67be02627db15245dd22e054fcfab272ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_dd76aff24ab939f6c0f709cfba9c1da567b47feeb041b5b8fed977eb5c1e0d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd76aff24ab939f6c0f709cfba9c1da567b47feeb041b5b8fed977eb5c1e0d1a->enter($__internal_dd76aff24ab939f6c0f709cfba9c1da567b47feeb041b5b8fed977eb5c1e0d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_d045e500e51441454143b382b5ed67be02627db15245dd22e054fcfab272ef38->leave($__internal_d045e500e51441454143b382b5ed67be02627db15245dd22e054fcfab272ef38_prof);

        
        $__internal_dd76aff24ab939f6c0f709cfba9c1da567b47feeb041b5b8fed977eb5c1e0d1a->leave($__internal_dd76aff24ab939f6c0f709cfba9c1da567b47feeb041b5b8fed977eb5c1e0d1a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
