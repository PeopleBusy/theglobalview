<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d2991e9dcb3afb43d116b386b89d6a7cb2944d71d5ea3e764b7876dcd7ea7429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06332c0229390af8734ba50263463152861038c834588339231f160a2d648b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06332c0229390af8734ba50263463152861038c834588339231f160a2d648b80->enter($__internal_06332c0229390af8734ba50263463152861038c834588339231f160a2d648b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_21efe5dedef920c9e7a41576e49bd6b522adb5e2d708144ca655c322d9ec05c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21efe5dedef920c9e7a41576e49bd6b522adb5e2d708144ca655c322d9ec05c5->enter($__internal_21efe5dedef920c9e7a41576e49bd6b522adb5e2d708144ca655c322d9ec05c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_06332c0229390af8734ba50263463152861038c834588339231f160a2d648b80->leave($__internal_06332c0229390af8734ba50263463152861038c834588339231f160a2d648b80_prof);

        
        $__internal_21efe5dedef920c9e7a41576e49bd6b522adb5e2d708144ca655c322d9ec05c5->leave($__internal_21efe5dedef920c9e7a41576e49bd6b522adb5e2d708144ca655c322d9ec05c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32efd206cc62fdf359928876bf0f128b0b77355098cef545a4aaafb4d1dc6308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32efd206cc62fdf359928876bf0f128b0b77355098cef545a4aaafb4d1dc6308->enter($__internal_32efd206cc62fdf359928876bf0f128b0b77355098cef545a4aaafb4d1dc6308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c854ebde3720e591caa6f97184342da9e6ea6470eb98a54eb7efd668855a31d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c854ebde3720e591caa6f97184342da9e6ea6470eb98a54eb7efd668855a31d8->enter($__internal_c854ebde3720e591caa6f97184342da9e6ea6470eb98a54eb7efd668855a31d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c854ebde3720e591caa6f97184342da9e6ea6470eb98a54eb7efd668855a31d8->leave($__internal_c854ebde3720e591caa6f97184342da9e6ea6470eb98a54eb7efd668855a31d8_prof);

        
        $__internal_32efd206cc62fdf359928876bf0f128b0b77355098cef545a4aaafb4d1dc6308->leave($__internal_32efd206cc62fdf359928876bf0f128b0b77355098cef545a4aaafb4d1dc6308_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac62db395743e42abe25a16d95fbcae5a905536810de342d02bb7b5e615b10dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac62db395743e42abe25a16d95fbcae5a905536810de342d02bb7b5e615b10dd->enter($__internal_ac62db395743e42abe25a16d95fbcae5a905536810de342d02bb7b5e615b10dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1744bc411cc0b417807f2e92a092c1f58900bbf585a49e76ffa572a526cf0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1744bc411cc0b417807f2e92a092c1f58900bbf585a49e76ffa572a526cf0a9->enter($__internal_e1744bc411cc0b417807f2e92a092c1f58900bbf585a49e76ffa572a526cf0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1744bc411cc0b417807f2e92a092c1f58900bbf585a49e76ffa572a526cf0a9->leave($__internal_e1744bc411cc0b417807f2e92a092c1f58900bbf585a49e76ffa572a526cf0a9_prof);

        
        $__internal_ac62db395743e42abe25a16d95fbcae5a905536810de342d02bb7b5e615b10dd->leave($__internal_ac62db395743e42abe25a16d95fbcae5a905536810de342d02bb7b5e615b10dd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_106b2bed07f41032277e169fca775ac413a7616c6ad554c4843327f8f11df5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106b2bed07f41032277e169fca775ac413a7616c6ad554c4843327f8f11df5cc->enter($__internal_106b2bed07f41032277e169fca775ac413a7616c6ad554c4843327f8f11df5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ece2bac5a56d5e530a56bfbebd37f595a89e034ed86dfc9a9c68c2d2a14f665b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece2bac5a56d5e530a56bfbebd37f595a89e034ed86dfc9a9c68c2d2a14f665b->enter($__internal_ece2bac5a56d5e530a56bfbebd37f595a89e034ed86dfc9a9c68c2d2a14f665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ece2bac5a56d5e530a56bfbebd37f595a89e034ed86dfc9a9c68c2d2a14f665b->leave($__internal_ece2bac5a56d5e530a56bfbebd37f595a89e034ed86dfc9a9c68c2d2a14f665b_prof);

        
        $__internal_106b2bed07f41032277e169fca775ac413a7616c6ad554c4843327f8f11df5cc->leave($__internal_106b2bed07f41032277e169fca775ac413a7616c6ad554c4843327f8f11df5cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
