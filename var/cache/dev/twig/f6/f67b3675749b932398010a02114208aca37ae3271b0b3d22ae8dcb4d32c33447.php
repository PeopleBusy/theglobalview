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
        $__internal_45bb261b821e39d7921654d85d2d96b777e315a03663f9a2fec06a1cf1171cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bb261b821e39d7921654d85d2d96b777e315a03663f9a2fec06a1cf1171cfa->enter($__internal_45bb261b821e39d7921654d85d2d96b777e315a03663f9a2fec06a1cf1171cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ac6ba444e5c2d1cbb146e03b6702f92f335ef37672a033e58f4718402c7b2174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6ba444e5c2d1cbb146e03b6702f92f335ef37672a033e58f4718402c7b2174->enter($__internal_ac6ba444e5c2d1cbb146e03b6702f92f335ef37672a033e58f4718402c7b2174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_45bb261b821e39d7921654d85d2d96b777e315a03663f9a2fec06a1cf1171cfa->leave($__internal_45bb261b821e39d7921654d85d2d96b777e315a03663f9a2fec06a1cf1171cfa_prof);

        
        $__internal_ac6ba444e5c2d1cbb146e03b6702f92f335ef37672a033e58f4718402c7b2174->leave($__internal_ac6ba444e5c2d1cbb146e03b6702f92f335ef37672a033e58f4718402c7b2174_prof);

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
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
