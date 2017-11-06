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
        $__internal_9323a9e7dd9f7f29dcc4f79b0b52672003ff4653530a55cf15e3028d1d904f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9323a9e7dd9f7f29dcc4f79b0b52672003ff4653530a55cf15e3028d1d904f51->enter($__internal_9323a9e7dd9f7f29dcc4f79b0b52672003ff4653530a55cf15e3028d1d904f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_5d5040d761cc76fb1263f1ee1c19a1c7e86fb37d2c5354688207a64719081022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5040d761cc76fb1263f1ee1c19a1c7e86fb37d2c5354688207a64719081022->enter($__internal_5d5040d761cc76fb1263f1ee1c19a1c7e86fb37d2c5354688207a64719081022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_9323a9e7dd9f7f29dcc4f79b0b52672003ff4653530a55cf15e3028d1d904f51->leave($__internal_9323a9e7dd9f7f29dcc4f79b0b52672003ff4653530a55cf15e3028d1d904f51_prof);

        
        $__internal_5d5040d761cc76fb1263f1ee1c19a1c7e86fb37d2c5354688207a64719081022->leave($__internal_5d5040d761cc76fb1263f1ee1c19a1c7e86fb37d2c5354688207a64719081022_prof);

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
