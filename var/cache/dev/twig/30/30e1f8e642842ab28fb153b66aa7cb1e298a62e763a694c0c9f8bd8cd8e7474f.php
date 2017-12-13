<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fa2731a227fbf456566f71174664bd9f7575d24274f5e1ff0ed0263a2e0f883a extends Twig_Template
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
        $__internal_837b8c271805ebd88434733b5dc3d5c42a28b7f2dc9b19fec05d7267d6c72049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837b8c271805ebd88434733b5dc3d5c42a28b7f2dc9b19fec05d7267d6c72049->enter($__internal_837b8c271805ebd88434733b5dc3d5c42a28b7f2dc9b19fec05d7267d6c72049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4c8910b76ea2cdd024d85e1fac84671d9e543e632e2df3d7b5b987049abfd6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8910b76ea2cdd024d85e1fac84671d9e543e632e2df3d7b5b987049abfd6d8->enter($__internal_4c8910b76ea2cdd024d85e1fac84671d9e543e632e2df3d7b5b987049abfd6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_837b8c271805ebd88434733b5dc3d5c42a28b7f2dc9b19fec05d7267d6c72049->leave($__internal_837b8c271805ebd88434733b5dc3d5c42a28b7f2dc9b19fec05d7267d6c72049_prof);

        
        $__internal_4c8910b76ea2cdd024d85e1fac84671d9e543e632e2df3d7b5b987049abfd6d8->leave($__internal_4c8910b76ea2cdd024d85e1fac84671d9e543e632e2df3d7b5b987049abfd6d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
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

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
