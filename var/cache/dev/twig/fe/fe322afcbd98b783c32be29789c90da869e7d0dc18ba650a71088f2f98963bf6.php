<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_99b83d8a2d28556ca23c4e14eb99d51befd4f26d60900008afd3afeae201468d extends Twig_Template
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
        $__internal_1a4ac510180ee83bbff0d2c2e057d450eb738bfc07dd3433de5009368d161837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ac510180ee83bbff0d2c2e057d450eb738bfc07dd3433de5009368d161837->enter($__internal_1a4ac510180ee83bbff0d2c2e057d450eb738bfc07dd3433de5009368d161837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9e6a60a919d1fa154440f02d955c0e4053085d9767e0f9d854ce26c69ccb6ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6a60a919d1fa154440f02d955c0e4053085d9767e0f9d854ce26c69ccb6ec7->enter($__internal_9e6a60a919d1fa154440f02d955c0e4053085d9767e0f9d854ce26c69ccb6ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1a4ac510180ee83bbff0d2c2e057d450eb738bfc07dd3433de5009368d161837->leave($__internal_1a4ac510180ee83bbff0d2c2e057d450eb738bfc07dd3433de5009368d161837_prof);

        
        $__internal_9e6a60a919d1fa154440f02d955c0e4053085d9767e0f9d854ce26c69ccb6ec7->leave($__internal_9e6a60a919d1fa154440f02d955c0e4053085d9767e0f9d854ce26c69ccb6ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
