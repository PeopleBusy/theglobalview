<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0fb3b8de6c4f6f53861ca270ace1febd39f7e8f64261c4ee737044bb190a83fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e953ad896afb85c0aeb2a9e6ad84c41e1cbdde5ef9954adda1de664a42528a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e953ad896afb85c0aeb2a9e6ad84c41e1cbdde5ef9954adda1de664a42528a6->enter($__internal_6e953ad896afb85c0aeb2a9e6ad84c41e1cbdde5ef9954adda1de664a42528a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_bba2215d7eed83635913b413aa5ed4f4efb87e6bb893436c494426e4344b48aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba2215d7eed83635913b413aa5ed4f4efb87e6bb893436c494426e4344b48aa->enter($__internal_bba2215d7eed83635913b413aa5ed4f4efb87e6bb893436c494426e4344b48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e953ad896afb85c0aeb2a9e6ad84c41e1cbdde5ef9954adda1de664a42528a6->leave($__internal_6e953ad896afb85c0aeb2a9e6ad84c41e1cbdde5ef9954adda1de664a42528a6_prof);

        
        $__internal_bba2215d7eed83635913b413aa5ed4f4efb87e6bb893436c494426e4344b48aa->leave($__internal_bba2215d7eed83635913b413aa5ed4f4efb87e6bb893436c494426e4344b48aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a75dbf233ee50756ebf502e64e63a66e1efa612e04a9d0414133a811bbc803d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75dbf233ee50756ebf502e64e63a66e1efa612e04a9d0414133a811bbc803d8->enter($__internal_a75dbf233ee50756ebf502e64e63a66e1efa612e04a9d0414133a811bbc803d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a161a807721574f6ed37186786a9be0483e98f07510685ced301bc677d12724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a161a807721574f6ed37186786a9be0483e98f07510685ced301bc677d12724->enter($__internal_9a161a807721574f6ed37186786a9be0483e98f07510685ced301bc677d12724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9a161a807721574f6ed37186786a9be0483e98f07510685ced301bc677d12724->leave($__internal_9a161a807721574f6ed37186786a9be0483e98f07510685ced301bc677d12724_prof);

        
        $__internal_a75dbf233ee50756ebf502e64e63a66e1efa612e04a9d0414133a811bbc803d8->leave($__internal_a75dbf233ee50756ebf502e64e63a66e1efa612e04a9d0414133a811bbc803d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_043cf6dd340730baec5725ec0ee13b0c56c45a4bed7dfa6964a6d33f7cffaef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043cf6dd340730baec5725ec0ee13b0c56c45a4bed7dfa6964a6d33f7cffaef0->enter($__internal_043cf6dd340730baec5725ec0ee13b0c56c45a4bed7dfa6964a6d33f7cffaef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68b4eb05565f01661aa8f1acf790430ff97faf8ff977e3a8a9839a1cc1a82fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b4eb05565f01661aa8f1acf790430ff97faf8ff977e3a8a9839a1cc1a82fd5->enter($__internal_68b4eb05565f01661aa8f1acf790430ff97faf8ff977e3a8a9839a1cc1a82fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_68b4eb05565f01661aa8f1acf790430ff97faf8ff977e3a8a9839a1cc1a82fd5->leave($__internal_68b4eb05565f01661aa8f1acf790430ff97faf8ff977e3a8a9839a1cc1a82fd5_prof);

        
        $__internal_043cf6dd340730baec5725ec0ee13b0c56c45a4bed7dfa6964a6d33f7cffaef0->leave($__internal_043cf6dd340730baec5725ec0ee13b0c56c45a4bed7dfa6964a6d33f7cffaef0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06c80b83c3359e72e3709870a5fe197ba77aec7f982a52f4d6c42f79322aa3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c80b83c3359e72e3709870a5fe197ba77aec7f982a52f4d6c42f79322aa3be->enter($__internal_06c80b83c3359e72e3709870a5fe197ba77aec7f982a52f4d6c42f79322aa3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bcf80b68c8ffeb72a8a63d60eed543ae94b2f08bcbc4e88ae8cfd069e907bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcf80b68c8ffeb72a8a63d60eed543ae94b2f08bcbc4e88ae8cfd069e907bc4->enter($__internal_2bcf80b68c8ffeb72a8a63d60eed543ae94b2f08bcbc4e88ae8cfd069e907bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2bcf80b68c8ffeb72a8a63d60eed543ae94b2f08bcbc4e88ae8cfd069e907bc4->leave($__internal_2bcf80b68c8ffeb72a8a63d60eed543ae94b2f08bcbc4e88ae8cfd069e907bc4_prof);

        
        $__internal_06c80b83c3359e72e3709870a5fe197ba77aec7f982a52f4d6c42f79322aa3be->leave($__internal_06c80b83c3359e72e3709870a5fe197ba77aec7f982a52f4d6c42f79322aa3be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
