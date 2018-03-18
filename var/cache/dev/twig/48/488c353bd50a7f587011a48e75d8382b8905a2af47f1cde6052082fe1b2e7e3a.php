<?php

/* @Twig/layout.html.twig */
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
        $__internal_2833a22fb912b140bc1f635dea92a435a51dd2701fc61cb143d0ac679ec5944b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2833a22fb912b140bc1f635dea92a435a51dd2701fc61cb143d0ac679ec5944b->enter($__internal_2833a22fb912b140bc1f635dea92a435a51dd2701fc61cb143d0ac679ec5944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2a88002372660fc33a7b74914eaf8cc8b8b613698318c8e37df8045deb51533c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a88002372660fc33a7b74914eaf8cc8b8b613698318c8e37df8045deb51533c->enter($__internal_2a88002372660fc33a7b74914eaf8cc8b8b613698318c8e37df8045deb51533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2833a22fb912b140bc1f635dea92a435a51dd2701fc61cb143d0ac679ec5944b->leave($__internal_2833a22fb912b140bc1f635dea92a435a51dd2701fc61cb143d0ac679ec5944b_prof);

        
        $__internal_2a88002372660fc33a7b74914eaf8cc8b8b613698318c8e37df8045deb51533c->leave($__internal_2a88002372660fc33a7b74914eaf8cc8b8b613698318c8e37df8045deb51533c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00632deb1ff1feeee950b99ef3ccb791651327648536aade7c72c7b12c39b54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00632deb1ff1feeee950b99ef3ccb791651327648536aade7c72c7b12c39b54a->enter($__internal_00632deb1ff1feeee950b99ef3ccb791651327648536aade7c72c7b12c39b54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2554276973c7f3a0fa57f01cb1d463f590c63942439f7243640aa93fd42f485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2554276973c7f3a0fa57f01cb1d463f590c63942439f7243640aa93fd42f485->enter($__internal_c2554276973c7f3a0fa57f01cb1d463f590c63942439f7243640aa93fd42f485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c2554276973c7f3a0fa57f01cb1d463f590c63942439f7243640aa93fd42f485->leave($__internal_c2554276973c7f3a0fa57f01cb1d463f590c63942439f7243640aa93fd42f485_prof);

        
        $__internal_00632deb1ff1feeee950b99ef3ccb791651327648536aade7c72c7b12c39b54a->leave($__internal_00632deb1ff1feeee950b99ef3ccb791651327648536aade7c72c7b12c39b54a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f320e5ffabdfc4282fad9b266996f2cab9353e7d30323531cd30636d1925c357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f320e5ffabdfc4282fad9b266996f2cab9353e7d30323531cd30636d1925c357->enter($__internal_f320e5ffabdfc4282fad9b266996f2cab9353e7d30323531cd30636d1925c357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e7dfb1c92603f3c636b81f95e65a9776d59a0187c67693d00b9e23cbe0c77d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7dfb1c92603f3c636b81f95e65a9776d59a0187c67693d00b9e23cbe0c77d8->enter($__internal_8e7dfb1c92603f3c636b81f95e65a9776d59a0187c67693d00b9e23cbe0c77d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8e7dfb1c92603f3c636b81f95e65a9776d59a0187c67693d00b9e23cbe0c77d8->leave($__internal_8e7dfb1c92603f3c636b81f95e65a9776d59a0187c67693d00b9e23cbe0c77d8_prof);

        
        $__internal_f320e5ffabdfc4282fad9b266996f2cab9353e7d30323531cd30636d1925c357->leave($__internal_f320e5ffabdfc4282fad9b266996f2cab9353e7d30323531cd30636d1925c357_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1923dc9ac890b53d39b762e6be3f3f6121c114e9a50bec79e9cda9c2e8d681ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1923dc9ac890b53d39b762e6be3f3f6121c114e9a50bec79e9cda9c2e8d681ba->enter($__internal_1923dc9ac890b53d39b762e6be3f3f6121c114e9a50bec79e9cda9c2e8d681ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_090aa579598db2be077e00644e26293cd0562f9f1eb9b0ff6af09a64b81b6b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090aa579598db2be077e00644e26293cd0562f9f1eb9b0ff6af09a64b81b6b33->enter($__internal_090aa579598db2be077e00644e26293cd0562f9f1eb9b0ff6af09a64b81b6b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_090aa579598db2be077e00644e26293cd0562f9f1eb9b0ff6af09a64b81b6b33->leave($__internal_090aa579598db2be077e00644e26293cd0562f9f1eb9b0ff6af09a64b81b6b33_prof);

        
        $__internal_1923dc9ac890b53d39b762e6be3f3f6121c114e9a50bec79e9cda9c2e8d681ba->leave($__internal_1923dc9ac890b53d39b762e6be3f3f6121c114e9a50bec79e9cda9c2e8d681ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
