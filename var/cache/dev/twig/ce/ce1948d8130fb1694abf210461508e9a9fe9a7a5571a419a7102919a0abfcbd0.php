<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ba3ad10205dbd09cb3430d17bce6b00dac1fa02b1ad6b75cfc7d44ed195cd257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f077b2483730dd0d2b4b8249666cba39b2857ba20db0737f361a7e41cb5f8c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f077b2483730dd0d2b4b8249666cba39b2857ba20db0737f361a7e41cb5f8c65->enter($__internal_f077b2483730dd0d2b4b8249666cba39b2857ba20db0737f361a7e41cb5f8c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c7e907e5124954bfd31e0a1b5970b6dc0b7d313f8d635e08eee17dcb25f0dde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e907e5124954bfd31e0a1b5970b6dc0b7d313f8d635e08eee17dcb25f0dde5->enter($__internal_c7e907e5124954bfd31e0a1b5970b6dc0b7d313f8d635e08eee17dcb25f0dde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f077b2483730dd0d2b4b8249666cba39b2857ba20db0737f361a7e41cb5f8c65->leave($__internal_f077b2483730dd0d2b4b8249666cba39b2857ba20db0737f361a7e41cb5f8c65_prof);

        
        $__internal_c7e907e5124954bfd31e0a1b5970b6dc0b7d313f8d635e08eee17dcb25f0dde5->leave($__internal_c7e907e5124954bfd31e0a1b5970b6dc0b7d313f8d635e08eee17dcb25f0dde5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70255e252c4b9c41c9c1c90639e427418b7f062ebde27e6eb2792a05d2523e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70255e252c4b9c41c9c1c90639e427418b7f062ebde27e6eb2792a05d2523e82->enter($__internal_70255e252c4b9c41c9c1c90639e427418b7f062ebde27e6eb2792a05d2523e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1be41c5836e45dadb0569f2a4cc2c686b847dc0366dd83a543163486e8c82bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be41c5836e45dadb0569f2a4cc2c686b847dc0366dd83a543163486e8c82bb7->enter($__internal_1be41c5836e45dadb0569f2a4cc2c686b847dc0366dd83a543163486e8c82bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1be41c5836e45dadb0569f2a4cc2c686b847dc0366dd83a543163486e8c82bb7->leave($__internal_1be41c5836e45dadb0569f2a4cc2c686b847dc0366dd83a543163486e8c82bb7_prof);

        
        $__internal_70255e252c4b9c41c9c1c90639e427418b7f062ebde27e6eb2792a05d2523e82->leave($__internal_70255e252c4b9c41c9c1c90639e427418b7f062ebde27e6eb2792a05d2523e82_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e8e491a0456d928b4f3a8740d15f490e2dddaab9ac7e80432745208b7e212b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8e491a0456d928b4f3a8740d15f490e2dddaab9ac7e80432745208b7e212b6->enter($__internal_2e8e491a0456d928b4f3a8740d15f490e2dddaab9ac7e80432745208b7e212b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ac668a5cea2d8c5de164b7a588db1c69c99e86632d75fabe525b675b32ba68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac668a5cea2d8c5de164b7a588db1c69c99e86632d75fabe525b675b32ba68f->enter($__internal_2ac668a5cea2d8c5de164b7a588db1c69c99e86632d75fabe525b675b32ba68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2ac668a5cea2d8c5de164b7a588db1c69c99e86632d75fabe525b675b32ba68f->leave($__internal_2ac668a5cea2d8c5de164b7a588db1c69c99e86632d75fabe525b675b32ba68f_prof);

        
        $__internal_2e8e491a0456d928b4f3a8740d15f490e2dddaab9ac7e80432745208b7e212b6->leave($__internal_2e8e491a0456d928b4f3a8740d15f490e2dddaab9ac7e80432745208b7e212b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
