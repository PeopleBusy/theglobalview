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
        $__internal_2c0865a4aee2695827fa40661909db2bf46c13003482c19f603796d89d46c232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0865a4aee2695827fa40661909db2bf46c13003482c19f603796d89d46c232->enter($__internal_2c0865a4aee2695827fa40661909db2bf46c13003482c19f603796d89d46c232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a0b92cd424468c77330a5a1225954abf15c2712d527c2641c05ac19a9995b02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b92cd424468c77330a5a1225954abf15c2712d527c2641c05ac19a9995b02f->enter($__internal_a0b92cd424468c77330a5a1225954abf15c2712d527c2641c05ac19a9995b02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2c0865a4aee2695827fa40661909db2bf46c13003482c19f603796d89d46c232->leave($__internal_2c0865a4aee2695827fa40661909db2bf46c13003482c19f603796d89d46c232_prof);

        
        $__internal_a0b92cd424468c77330a5a1225954abf15c2712d527c2641c05ac19a9995b02f->leave($__internal_a0b92cd424468c77330a5a1225954abf15c2712d527c2641c05ac19a9995b02f_prof);

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
