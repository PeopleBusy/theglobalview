<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e999c309926efc15881591657cd48a12515a60774e22d8d8e20b6d066bd7a138 extends Twig_Template
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
        $__internal_d2a39fed39cc02c7b9f64da913e23b6ec6d235ffb877c66c09825e7ebc0bd859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a39fed39cc02c7b9f64da913e23b6ec6d235ffb877c66c09825e7ebc0bd859->enter($__internal_d2a39fed39cc02c7b9f64da913e23b6ec6d235ffb877c66c09825e7ebc0bd859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_190f53267ffb030a58d2f3f5d93e9856e0487ed2626e649f17a6f9fa27da9526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190f53267ffb030a58d2f3f5d93e9856e0487ed2626e649f17a6f9fa27da9526->enter($__internal_190f53267ffb030a58d2f3f5d93e9856e0487ed2626e649f17a6f9fa27da9526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d2a39fed39cc02c7b9f64da913e23b6ec6d235ffb877c66c09825e7ebc0bd859->leave($__internal_d2a39fed39cc02c7b9f64da913e23b6ec6d235ffb877c66c09825e7ebc0bd859_prof);

        
        $__internal_190f53267ffb030a58d2f3f5d93e9856e0487ed2626e649f17a6f9fa27da9526->leave($__internal_190f53267ffb030a58d2f3f5d93e9856e0487ed2626e649f17a6f9fa27da9526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
