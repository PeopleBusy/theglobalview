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
        $__internal_9524a88558a7989b2de2ad600122dde48896cb0fbd44805161f80ce3fb65d9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9524a88558a7989b2de2ad600122dde48896cb0fbd44805161f80ce3fb65d9cb->enter($__internal_9524a88558a7989b2de2ad600122dde48896cb0fbd44805161f80ce3fb65d9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8a08f75971f387e30c75250c32a5a2997d655e75842e9fe712cc914d8cd81681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a08f75971f387e30c75250c32a5a2997d655e75842e9fe712cc914d8cd81681->enter($__internal_8a08f75971f387e30c75250c32a5a2997d655e75842e9fe712cc914d8cd81681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9524a88558a7989b2de2ad600122dde48896cb0fbd44805161f80ce3fb65d9cb->leave($__internal_9524a88558a7989b2de2ad600122dde48896cb0fbd44805161f80ce3fb65d9cb_prof);

        
        $__internal_8a08f75971f387e30c75250c32a5a2997d655e75842e9fe712cc914d8cd81681->leave($__internal_8a08f75971f387e30c75250c32a5a2997d655e75842e9fe712cc914d8cd81681_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
