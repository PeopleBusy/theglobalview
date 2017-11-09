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
        $__internal_a8814e773336d6610d222092a04d2ca5a3cf89bef29efc8ce9c6ae5733931248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8814e773336d6610d222092a04d2ca5a3cf89bef29efc8ce9c6ae5733931248->enter($__internal_a8814e773336d6610d222092a04d2ca5a3cf89bef29efc8ce9c6ae5733931248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9e6faaa251fa2f0d4c65fb8e2f375b2f988c29fc600b678d5ccb2ecdd72f852d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6faaa251fa2f0d4c65fb8e2f375b2f988c29fc600b678d5ccb2ecdd72f852d->enter($__internal_9e6faaa251fa2f0d4c65fb8e2f375b2f988c29fc600b678d5ccb2ecdd72f852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_a8814e773336d6610d222092a04d2ca5a3cf89bef29efc8ce9c6ae5733931248->leave($__internal_a8814e773336d6610d222092a04d2ca5a3cf89bef29efc8ce9c6ae5733931248_prof);

        
        $__internal_9e6faaa251fa2f0d4c65fb8e2f375b2f988c29fc600b678d5ccb2ecdd72f852d->leave($__internal_9e6faaa251fa2f0d4c65fb8e2f375b2f988c29fc600b678d5ccb2ecdd72f852d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e5fa6427a30b438b85d05a17d6e7630429e2db838b4b06f13076de434a0395a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5fa6427a30b438b85d05a17d6e7630429e2db838b4b06f13076de434a0395a->enter($__internal_0e5fa6427a30b438b85d05a17d6e7630429e2db838b4b06f13076de434a0395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8d9cf0f3c61b1f3b9b55863b5b4c257a005e6e3844d8e82dd73e4c90d9d3d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d9cf0f3c61b1f3b9b55863b5b4c257a005e6e3844d8e82dd73e4c90d9d3d44->enter($__internal_f8d9cf0f3c61b1f3b9b55863b5b4c257a005e6e3844d8e82dd73e4c90d9d3d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f8d9cf0f3c61b1f3b9b55863b5b4c257a005e6e3844d8e82dd73e4c90d9d3d44->leave($__internal_f8d9cf0f3c61b1f3b9b55863b5b4c257a005e6e3844d8e82dd73e4c90d9d3d44_prof);

        
        $__internal_0e5fa6427a30b438b85d05a17d6e7630429e2db838b4b06f13076de434a0395a->leave($__internal_0e5fa6427a30b438b85d05a17d6e7630429e2db838b4b06f13076de434a0395a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_477233b6e4183655a3e72e047f5bbcd18bd8dd727688821efe088a78a91801fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477233b6e4183655a3e72e047f5bbcd18bd8dd727688821efe088a78a91801fb->enter($__internal_477233b6e4183655a3e72e047f5bbcd18bd8dd727688821efe088a78a91801fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_091ea3b860c5984bfa8c22b096bb36915d353af149215d5955954e8e52a3e36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091ea3b860c5984bfa8c22b096bb36915d353af149215d5955954e8e52a3e36f->enter($__internal_091ea3b860c5984bfa8c22b096bb36915d353af149215d5955954e8e52a3e36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_091ea3b860c5984bfa8c22b096bb36915d353af149215d5955954e8e52a3e36f->leave($__internal_091ea3b860c5984bfa8c22b096bb36915d353af149215d5955954e8e52a3e36f_prof);

        
        $__internal_477233b6e4183655a3e72e047f5bbcd18bd8dd727688821efe088a78a91801fb->leave($__internal_477233b6e4183655a3e72e047f5bbcd18bd8dd727688821efe088a78a91801fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f8d7ccec8aeffa80c63cb9ca97b2b0cd44d8b5c204d9923cb0949e5cbfb47f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8d7ccec8aeffa80c63cb9ca97b2b0cd44d8b5c204d9923cb0949e5cbfb47f7->enter($__internal_9f8d7ccec8aeffa80c63cb9ca97b2b0cd44d8b5c204d9923cb0949e5cbfb47f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a89208b89604fa625acc8695972251827dbfbf312e1bae05a8e5e4e2f33640e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89208b89604fa625acc8695972251827dbfbf312e1bae05a8e5e4e2f33640e8->enter($__internal_a89208b89604fa625acc8695972251827dbfbf312e1bae05a8e5e4e2f33640e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a89208b89604fa625acc8695972251827dbfbf312e1bae05a8e5e4e2f33640e8->leave($__internal_a89208b89604fa625acc8695972251827dbfbf312e1bae05a8e5e4e2f33640e8_prof);

        
        $__internal_9f8d7ccec8aeffa80c63cb9ca97b2b0cd44d8b5c204d9923cb0949e5cbfb47f7->leave($__internal_9f8d7ccec8aeffa80c63cb9ca97b2b0cd44d8b5c204d9923cb0949e5cbfb47f7_prof);

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
