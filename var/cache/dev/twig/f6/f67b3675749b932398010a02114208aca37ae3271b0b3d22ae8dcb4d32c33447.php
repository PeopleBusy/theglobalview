<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ca9fd460e5fd5ea1ab488699020ad3723e53cff94ea3f8f95ec021b15d6a5a00 extends Twig_Template
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
        $__internal_23d639b111cf4a6434b62a3f3d6fdf2660a8350105b0c3703c83b8aec70ea7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d639b111cf4a6434b62a3f3d6fdf2660a8350105b0c3703c83b8aec70ea7fb->enter($__internal_23d639b111cf4a6434b62a3f3d6fdf2660a8350105b0c3703c83b8aec70ea7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_a74de8031dc48b37522fb2ae6868ad20a021f5be9382a1e9980faf6634b195d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74de8031dc48b37522fb2ae6868ad20a021f5be9382a1e9980faf6634b195d6->enter($__internal_a74de8031dc48b37522fb2ae6868ad20a021f5be9382a1e9980faf6634b195d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_23d639b111cf4a6434b62a3f3d6fdf2660a8350105b0c3703c83b8aec70ea7fb->leave($__internal_23d639b111cf4a6434b62a3f3d6fdf2660a8350105b0c3703c83b8aec70ea7fb_prof);

        
        $__internal_a74de8031dc48b37522fb2ae6868ad20a021f5be9382a1e9980faf6634b195d6->leave($__internal_a74de8031dc48b37522fb2ae6868ad20a021f5be9382a1e9980faf6634b195d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
