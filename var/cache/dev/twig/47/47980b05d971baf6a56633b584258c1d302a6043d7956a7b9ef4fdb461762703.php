<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_27ffb5f8efa162ee995fdfbae07ead27f2838893eb930a152e93f7d8c5dbfd70 extends Twig_Template
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
        $__internal_d89aef03ad14bf69a4fff474ab8013ea12feb8039f793a308d927c183b18b92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89aef03ad14bf69a4fff474ab8013ea12feb8039f793a308d927c183b18b92d->enter($__internal_d89aef03ad14bf69a4fff474ab8013ea12feb8039f793a308d927c183b18b92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));

        $__internal_8a5877e429c713d00f527e077255e94185528d9bdbf1a0b6ba3df4a3e1e432ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5877e429c713d00f527e077255e94185528d9bdbf1a0b6ba3df4a3e1e432ad->enter($__internal_8a5877e429c713d00f527e077255e94185528d9bdbf1a0b6ba3df4a3e1e432ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            echo twig_include($this->env, $context, "@Twig/Exception/traces.xml.twig", array("exception" => $context["e"]), false);
            echo "
    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_d89aef03ad14bf69a4fff474ab8013ea12feb8039f793a308d927c183b18b92d->leave($__internal_d89aef03ad14bf69a4fff474ab8013ea12feb8039f793a308d927c183b18b92d_prof);

        
        $__internal_8a5877e429c713d00f527e077255e94185528d9bdbf1a0b6ba3df4a3e1e432ad->leave($__internal_8a5877e429c713d00f527e077255e94185528d9bdbf1a0b6ba3df4a3e1e432ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 6,  41 => 5,  37 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{{ include('@Twig/Exception/traces.xml.twig', { exception: e }, with_context = false) }}
    </exception>
{% endfor %}
</error>
", "TwigBundle:Exception:exception.xml.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.xml.twig");
    }
}
