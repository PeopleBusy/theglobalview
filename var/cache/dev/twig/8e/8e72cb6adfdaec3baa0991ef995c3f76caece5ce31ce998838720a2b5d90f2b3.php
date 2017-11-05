<?php

/* ::base.html.twig */
class __TwigTemplate_524c5946a7bb62aff8735d5aaf52aa46000a95963f1c29339118cca9a450647f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93a8d46f7f11cc155fac0fc99fdeb952aba742df20d58433d4a1557a44d574c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a8d46f7f11cc155fac0fc99fdeb952aba742df20d58433d4a1557a44d574c2->enter($__internal_93a8d46f7f11cc155fac0fc99fdeb952aba742df20d58433d4a1557a44d574c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e6bec5443fc1a85e7551adc4b72b73dc5ab9817c1711f7731bd11fb74f3aef84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bec5443fc1a85e7551adc4b72b73dc5ab9817c1711f7731bd11fb74f3aef84->enter($__internal_e6bec5443fc1a85e7551adc4b72b73dc5ab9817c1711f7731bd11fb74f3aef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_93a8d46f7f11cc155fac0fc99fdeb952aba742df20d58433d4a1557a44d574c2->leave($__internal_93a8d46f7f11cc155fac0fc99fdeb952aba742df20d58433d4a1557a44d574c2_prof);

        
        $__internal_e6bec5443fc1a85e7551adc4b72b73dc5ab9817c1711f7731bd11fb74f3aef84->leave($__internal_e6bec5443fc1a85e7551adc4b72b73dc5ab9817c1711f7731bd11fb74f3aef84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_110e5e613e32e4049bc040200935382f1f6e939a0ae1903f36d5c0aa531a135d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110e5e613e32e4049bc040200935382f1f6e939a0ae1903f36d5c0aa531a135d->enter($__internal_110e5e613e32e4049bc040200935382f1f6e939a0ae1903f36d5c0aa531a135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfbeffe845bdf67dc19516432a742ba97be5b2eed7d5066b6bf94a5070eef494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbeffe845bdf67dc19516432a742ba97be5b2eed7d5066b6bf94a5070eef494->enter($__internal_bfbeffe845bdf67dc19516432a742ba97be5b2eed7d5066b6bf94a5070eef494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bfbeffe845bdf67dc19516432a742ba97be5b2eed7d5066b6bf94a5070eef494->leave($__internal_bfbeffe845bdf67dc19516432a742ba97be5b2eed7d5066b6bf94a5070eef494_prof);

        
        $__internal_110e5e613e32e4049bc040200935382f1f6e939a0ae1903f36d5c0aa531a135d->leave($__internal_110e5e613e32e4049bc040200935382f1f6e939a0ae1903f36d5c0aa531a135d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e9ae40b8c999cb45a54a903cf3ec45db5d19f8c8842371e21d3ef91b05df330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9ae40b8c999cb45a54a903cf3ec45db5d19f8c8842371e21d3ef91b05df330->enter($__internal_7e9ae40b8c999cb45a54a903cf3ec45db5d19f8c8842371e21d3ef91b05df330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eb0aea9210520ad89031fcd3b1e971603dfe0b846625cb65ddeb9f4a53015102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0aea9210520ad89031fcd3b1e971603dfe0b846625cb65ddeb9f4a53015102->enter($__internal_eb0aea9210520ad89031fcd3b1e971603dfe0b846625cb65ddeb9f4a53015102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eb0aea9210520ad89031fcd3b1e971603dfe0b846625cb65ddeb9f4a53015102->leave($__internal_eb0aea9210520ad89031fcd3b1e971603dfe0b846625cb65ddeb9f4a53015102_prof);

        
        $__internal_7e9ae40b8c999cb45a54a903cf3ec45db5d19f8c8842371e21d3ef91b05df330->leave($__internal_7e9ae40b8c999cb45a54a903cf3ec45db5d19f8c8842371e21d3ef91b05df330_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33575dd549b7cbd06008056eba0e294addcbc245f855117de8a9132750f6a40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33575dd549b7cbd06008056eba0e294addcbc245f855117de8a9132750f6a40b->enter($__internal_33575dd549b7cbd06008056eba0e294addcbc245f855117de8a9132750f6a40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db0ba76b96f53fa52786324478352f028934938e7a7dc96d716d84c286889801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0ba76b96f53fa52786324478352f028934938e7a7dc96d716d84c286889801->enter($__internal_db0ba76b96f53fa52786324478352f028934938e7a7dc96d716d84c286889801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db0ba76b96f53fa52786324478352f028934938e7a7dc96d716d84c286889801->leave($__internal_db0ba76b96f53fa52786324478352f028934938e7a7dc96d716d84c286889801_prof);

        
        $__internal_33575dd549b7cbd06008056eba0e294addcbc245f855117de8a9132750f6a40b->leave($__internal_33575dd549b7cbd06008056eba0e294addcbc245f855117de8a9132750f6a40b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d7ea373318701bc574f4ea9c0bbb4b1b563e9954f72722d47a2d5821ba7c7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7ea373318701bc574f4ea9c0bbb4b1b563e9954f72722d47a2d5821ba7c7c3->enter($__internal_1d7ea373318701bc574f4ea9c0bbb4b1b563e9954f72722d47a2d5821ba7c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7e34ad35e713c99f0912e135af3f58b53abd4da1828d4bc72fa4f04592f4f5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e34ad35e713c99f0912e135af3f58b53abd4da1828d4bc72fa4f04592f4f5dd->enter($__internal_7e34ad35e713c99f0912e135af3f58b53abd4da1828d4bc72fa4f04592f4f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e34ad35e713c99f0912e135af3f58b53abd4da1828d4bc72fa4f04592f4f5dd->leave($__internal_7e34ad35e713c99f0912e135af3f58b53abd4da1828d4bc72fa4f04592f4f5dd_prof);

        
        $__internal_1d7ea373318701bc574f4ea9c0bbb4b1b563e9954f72722d47a2d5821ba7c7c3->leave($__internal_1d7ea373318701bc574f4ea9c0bbb4b1b563e9954f72722d47a2d5821ba7c7c3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/app/Resources/views/base.html.twig");
    }
}
