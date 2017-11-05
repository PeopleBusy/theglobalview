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
        $__internal_843d988c881fc158b2b5f8eb7a2fd6d4769dc0d96665195ae4aace2ac1e12f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843d988c881fc158b2b5f8eb7a2fd6d4769dc0d96665195ae4aace2ac1e12f4f->enter($__internal_843d988c881fc158b2b5f8eb7a2fd6d4769dc0d96665195ae4aace2ac1e12f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_f64200b27e800996be4975ed83d056ba08c3cce979b685045a415b18bf7eb3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64200b27e800996be4975ed83d056ba08c3cce979b685045a415b18bf7eb3ff->enter($__internal_f64200b27e800996be4975ed83d056ba08c3cce979b685045a415b18bf7eb3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_843d988c881fc158b2b5f8eb7a2fd6d4769dc0d96665195ae4aace2ac1e12f4f->leave($__internal_843d988c881fc158b2b5f8eb7a2fd6d4769dc0d96665195ae4aace2ac1e12f4f_prof);

        
        $__internal_f64200b27e800996be4975ed83d056ba08c3cce979b685045a415b18bf7eb3ff->leave($__internal_f64200b27e800996be4975ed83d056ba08c3cce979b685045a415b18bf7eb3ff_prof);

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
