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
        $__internal_041c75956695024176694abd7f573b69460898ed82c3933c642401edc991f7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041c75956695024176694abd7f573b69460898ed82c3933c642401edc991f7f8->enter($__internal_041c75956695024176694abd7f573b69460898ed82c3933c642401edc991f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e0795a2e9c2a5684b79b516d2a9040acd3ee92a6e42e1c9ed094a20bc5aa3e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0795a2e9c2a5684b79b516d2a9040acd3ee92a6e42e1c9ed094a20bc5aa3e36->enter($__internal_e0795a2e9c2a5684b79b516d2a9040acd3ee92a6e42e1c9ed094a20bc5aa3e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_041c75956695024176694abd7f573b69460898ed82c3933c642401edc991f7f8->leave($__internal_041c75956695024176694abd7f573b69460898ed82c3933c642401edc991f7f8_prof);

        
        $__internal_e0795a2e9c2a5684b79b516d2a9040acd3ee92a6e42e1c9ed094a20bc5aa3e36->leave($__internal_e0795a2e9c2a5684b79b516d2a9040acd3ee92a6e42e1c9ed094a20bc5aa3e36_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9633dc5c23da1afc0009036dc281cabc578865493b73f3416479c685ab16fe73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9633dc5c23da1afc0009036dc281cabc578865493b73f3416479c685ab16fe73->enter($__internal_9633dc5c23da1afc0009036dc281cabc578865493b73f3416479c685ab16fe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_745193bb7da2bfada78823ce53fd234f70135ede188545a4e62aaccd20c71088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745193bb7da2bfada78823ce53fd234f70135ede188545a4e62aaccd20c71088->enter($__internal_745193bb7da2bfada78823ce53fd234f70135ede188545a4e62aaccd20c71088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_745193bb7da2bfada78823ce53fd234f70135ede188545a4e62aaccd20c71088->leave($__internal_745193bb7da2bfada78823ce53fd234f70135ede188545a4e62aaccd20c71088_prof);

        
        $__internal_9633dc5c23da1afc0009036dc281cabc578865493b73f3416479c685ab16fe73->leave($__internal_9633dc5c23da1afc0009036dc281cabc578865493b73f3416479c685ab16fe73_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b206dcd45a08ce2789a05c1c5322947d929cf2e1bfce55505a1133cf2963a3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b206dcd45a08ce2789a05c1c5322947d929cf2e1bfce55505a1133cf2963a3ee->enter($__internal_b206dcd45a08ce2789a05c1c5322947d929cf2e1bfce55505a1133cf2963a3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c780db1faa498a593d0f7cd1a3f8560a2d9818819d364ffcc9ecd51ff40f104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c780db1faa498a593d0f7cd1a3f8560a2d9818819d364ffcc9ecd51ff40f104->enter($__internal_5c780db1faa498a593d0f7cd1a3f8560a2d9818819d364ffcc9ecd51ff40f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5c780db1faa498a593d0f7cd1a3f8560a2d9818819d364ffcc9ecd51ff40f104->leave($__internal_5c780db1faa498a593d0f7cd1a3f8560a2d9818819d364ffcc9ecd51ff40f104_prof);

        
        $__internal_b206dcd45a08ce2789a05c1c5322947d929cf2e1bfce55505a1133cf2963a3ee->leave($__internal_b206dcd45a08ce2789a05c1c5322947d929cf2e1bfce55505a1133cf2963a3ee_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3caa26a698adf4ff53d01219500f2fed2b5a885740fbdecf8133099791ba93c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caa26a698adf4ff53d01219500f2fed2b5a885740fbdecf8133099791ba93c0->enter($__internal_3caa26a698adf4ff53d01219500f2fed2b5a885740fbdecf8133099791ba93c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b1a43f4fc5fd0a4b2fa846c2f198e129fa8f3daa47caa309f3ae0841cb603f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1a43f4fc5fd0a4b2fa846c2f198e129fa8f3daa47caa309f3ae0841cb603f5->enter($__internal_2b1a43f4fc5fd0a4b2fa846c2f198e129fa8f3daa47caa309f3ae0841cb603f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b1a43f4fc5fd0a4b2fa846c2f198e129fa8f3daa47caa309f3ae0841cb603f5->leave($__internal_2b1a43f4fc5fd0a4b2fa846c2f198e129fa8f3daa47caa309f3ae0841cb603f5_prof);

        
        $__internal_3caa26a698adf4ff53d01219500f2fed2b5a885740fbdecf8133099791ba93c0->leave($__internal_3caa26a698adf4ff53d01219500f2fed2b5a885740fbdecf8133099791ba93c0_prof);

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
