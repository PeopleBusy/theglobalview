<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e830937b158003ba1b6551d5a05ae7d4969a000906d620bc96bb35e8e2bb1f33 extends Twig_Template
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
        $__internal_20403464d427df0be7023744c7b19ba73f8a3f03cd7da0cf782b47fc7bd7c405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20403464d427df0be7023744c7b19ba73f8a3f03cd7da0cf782b47fc7bd7c405->enter($__internal_20403464d427df0be7023744c7b19ba73f8a3f03cd7da0cf782b47fc7bd7c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5685a0d6c04641f22d9962e266394120fabcc3a09e59d822e7a20a0d40326ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5685a0d6c04641f22d9962e266394120fabcc3a09e59d822e7a20a0d40326ee5->enter($__internal_5685a0d6c04641f22d9962e266394120fabcc3a09e59d822e7a20a0d40326ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_20403464d427df0be7023744c7b19ba73f8a3f03cd7da0cf782b47fc7bd7c405->leave($__internal_20403464d427df0be7023744c7b19ba73f8a3f03cd7da0cf782b47fc7bd7c405_prof);

        
        $__internal_5685a0d6c04641f22d9962e266394120fabcc3a09e59d822e7a20a0d40326ee5->leave($__internal_5685a0d6c04641f22d9962e266394120fabcc3a09e59d822e7a20a0d40326ee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
