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
        $__internal_a447675ae699842ad74f31d9e100d5a8b7262eba797f4a225dd322fd02aee8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a447675ae699842ad74f31d9e100d5a8b7262eba797f4a225dd322fd02aee8e0->enter($__internal_a447675ae699842ad74f31d9e100d5a8b7262eba797f4a225dd322fd02aee8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fdb313dc97f2b1af46599180286171620c25a3800182d2abd79160e606eead6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb313dc97f2b1af46599180286171620c25a3800182d2abd79160e606eead6d->enter($__internal_fdb313dc97f2b1af46599180286171620c25a3800182d2abd79160e606eead6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a447675ae699842ad74f31d9e100d5a8b7262eba797f4a225dd322fd02aee8e0->leave($__internal_a447675ae699842ad74f31d9e100d5a8b7262eba797f4a225dd322fd02aee8e0_prof);

        
        $__internal_fdb313dc97f2b1af46599180286171620c25a3800182d2abd79160e606eead6d->leave($__internal_fdb313dc97f2b1af46599180286171620c25a3800182d2abd79160e606eead6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2cc0c0fb36e4663d41b7f090966c4991e721a02c8a40234c1d41ecc63604f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2cc0c0fb36e4663d41b7f090966c4991e721a02c8a40234c1d41ecc63604f0f->enter($__internal_f2cc0c0fb36e4663d41b7f090966c4991e721a02c8a40234c1d41ecc63604f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_351949be86e859d0c998d42c3cb0a7882990df2438eabb8edd9789b6e0863df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351949be86e859d0c998d42c3cb0a7882990df2438eabb8edd9789b6e0863df4->enter($__internal_351949be86e859d0c998d42c3cb0a7882990df2438eabb8edd9789b6e0863df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_351949be86e859d0c998d42c3cb0a7882990df2438eabb8edd9789b6e0863df4->leave($__internal_351949be86e859d0c998d42c3cb0a7882990df2438eabb8edd9789b6e0863df4_prof);

        
        $__internal_f2cc0c0fb36e4663d41b7f090966c4991e721a02c8a40234c1d41ecc63604f0f->leave($__internal_f2cc0c0fb36e4663d41b7f090966c4991e721a02c8a40234c1d41ecc63604f0f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_96c3ba257fff1a585076788d1dd0ec75971929d3b5caa14213e2ef518fab0fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c3ba257fff1a585076788d1dd0ec75971929d3b5caa14213e2ef518fab0fa5->enter($__internal_96c3ba257fff1a585076788d1dd0ec75971929d3b5caa14213e2ef518fab0fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22778ef7a4a9002abd53c5207c7df36591793d9b3be5334f18ee4c61478c0a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22778ef7a4a9002abd53c5207c7df36591793d9b3be5334f18ee4c61478c0a4f->enter($__internal_22778ef7a4a9002abd53c5207c7df36591793d9b3be5334f18ee4c61478c0a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_22778ef7a4a9002abd53c5207c7df36591793d9b3be5334f18ee4c61478c0a4f->leave($__internal_22778ef7a4a9002abd53c5207c7df36591793d9b3be5334f18ee4c61478c0a4f_prof);

        
        $__internal_96c3ba257fff1a585076788d1dd0ec75971929d3b5caa14213e2ef518fab0fa5->leave($__internal_96c3ba257fff1a585076788d1dd0ec75971929d3b5caa14213e2ef518fab0fa5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f9fd5ce95e74d0ccb7777be8876f1a93d756fb14d9045dcdae8ac916e7bb5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9fd5ce95e74d0ccb7777be8876f1a93d756fb14d9045dcdae8ac916e7bb5e0->enter($__internal_7f9fd5ce95e74d0ccb7777be8876f1a93d756fb14d9045dcdae8ac916e7bb5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0a14b51c2f79d6de03a67fecc60cc9874cbc4d0cda0a6aeeae818cf73d717e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a14b51c2f79d6de03a67fecc60cc9874cbc4d0cda0a6aeeae818cf73d717e5->enter($__internal_e0a14b51c2f79d6de03a67fecc60cc9874cbc4d0cda0a6aeeae818cf73d717e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0a14b51c2f79d6de03a67fecc60cc9874cbc4d0cda0a6aeeae818cf73d717e5->leave($__internal_e0a14b51c2f79d6de03a67fecc60cc9874cbc4d0cda0a6aeeae818cf73d717e5_prof);

        
        $__internal_7f9fd5ce95e74d0ccb7777be8876f1a93d756fb14d9045dcdae8ac916e7bb5e0->leave($__internal_7f9fd5ce95e74d0ccb7777be8876f1a93d756fb14d9045dcdae8ac916e7bb5e0_prof);

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
