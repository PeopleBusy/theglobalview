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
        $__internal_c01d6829f02602706f61e721b962986f8d5d22bf1a86876c9af13772b9e57d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01d6829f02602706f61e721b962986f8d5d22bf1a86876c9af13772b9e57d80->enter($__internal_c01d6829f02602706f61e721b962986f8d5d22bf1a86876c9af13772b9e57d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_2cb1199d045e79f6cbca62a52775e27451be264519983780f4a1c0ac6bead893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb1199d045e79f6cbca62a52775e27451be264519983780f4a1c0ac6bead893->enter($__internal_2cb1199d045e79f6cbca62a52775e27451be264519983780f4a1c0ac6bead893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_c01d6829f02602706f61e721b962986f8d5d22bf1a86876c9af13772b9e57d80->leave($__internal_c01d6829f02602706f61e721b962986f8d5d22bf1a86876c9af13772b9e57d80_prof);

        
        $__internal_2cb1199d045e79f6cbca62a52775e27451be264519983780f4a1c0ac6bead893->leave($__internal_2cb1199d045e79f6cbca62a52775e27451be264519983780f4a1c0ac6bead893_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0950e431b072f6abdf006bae203c90d3eac0f5e478f687972d48605de30cb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0950e431b072f6abdf006bae203c90d3eac0f5e478f687972d48605de30cb37->enter($__internal_f0950e431b072f6abdf006bae203c90d3eac0f5e478f687972d48605de30cb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aac4b0fe6142187d089ff642dc11007c25aac1cb63abb4a57f41da38a2fadd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac4b0fe6142187d089ff642dc11007c25aac1cb63abb4a57f41da38a2fadd3c->enter($__internal_aac4b0fe6142187d089ff642dc11007c25aac1cb63abb4a57f41da38a2fadd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aac4b0fe6142187d089ff642dc11007c25aac1cb63abb4a57f41da38a2fadd3c->leave($__internal_aac4b0fe6142187d089ff642dc11007c25aac1cb63abb4a57f41da38a2fadd3c_prof);

        
        $__internal_f0950e431b072f6abdf006bae203c90d3eac0f5e478f687972d48605de30cb37->leave($__internal_f0950e431b072f6abdf006bae203c90d3eac0f5e478f687972d48605de30cb37_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f4dd819d55be0d32b2d7876692171ad74ea0f7a9541e70a395679142f653dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4dd819d55be0d32b2d7876692171ad74ea0f7a9541e70a395679142f653dfe->enter($__internal_5f4dd819d55be0d32b2d7876692171ad74ea0f7a9541e70a395679142f653dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2745a9300688704a9689d8895069497af3d03a86b45f8a162fabbe63cc59df85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2745a9300688704a9689d8895069497af3d03a86b45f8a162fabbe63cc59df85->enter($__internal_2745a9300688704a9689d8895069497af3d03a86b45f8a162fabbe63cc59df85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2745a9300688704a9689d8895069497af3d03a86b45f8a162fabbe63cc59df85->leave($__internal_2745a9300688704a9689d8895069497af3d03a86b45f8a162fabbe63cc59df85_prof);

        
        $__internal_5f4dd819d55be0d32b2d7876692171ad74ea0f7a9541e70a395679142f653dfe->leave($__internal_5f4dd819d55be0d32b2d7876692171ad74ea0f7a9541e70a395679142f653dfe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a5c030e3d960632a0a94d4c6e9c2e324747e1f2f009f851f725b866efd2446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a5c030e3d960632a0a94d4c6e9c2e324747e1f2f009f851f725b866efd2446->enter($__internal_d6a5c030e3d960632a0a94d4c6e9c2e324747e1f2f009f851f725b866efd2446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b3d9a28955db5aec7c3583b89f5006870aa6f2036fbd8c2de31d64ba6962839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3d9a28955db5aec7c3583b89f5006870aa6f2036fbd8c2de31d64ba6962839->enter($__internal_5b3d9a28955db5aec7c3583b89f5006870aa6f2036fbd8c2de31d64ba6962839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b3d9a28955db5aec7c3583b89f5006870aa6f2036fbd8c2de31d64ba6962839->leave($__internal_5b3d9a28955db5aec7c3583b89f5006870aa6f2036fbd8c2de31d64ba6962839_prof);

        
        $__internal_d6a5c030e3d960632a0a94d4c6e9c2e324747e1f2f009f851f725b866efd2446->leave($__internal_d6a5c030e3d960632a0a94d4c6e9c2e324747e1f2f009f851f725b866efd2446_prof);

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
