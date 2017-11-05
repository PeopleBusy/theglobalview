<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9c47c638459f87212ddf3ff18079b16026b9cad96ad31f61cafda4b089d50dea extends Twig_Template
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
        $__internal_10ca08c41ba1073c7f73ce5e758ea810a4698cdb0b337ab36ff6ee024f0ac813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ca08c41ba1073c7f73ce5e758ea810a4698cdb0b337ab36ff6ee024f0ac813->enter($__internal_10ca08c41ba1073c7f73ce5e758ea810a4698cdb0b337ab36ff6ee024f0ac813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_baa41f0a4ddc96f1147ccf85ceddf59d66765884940d97bf44bfbad07a9e473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa41f0a4ddc96f1147ccf85ceddf59d66765884940d97bf44bfbad07a9e473a->enter($__internal_baa41f0a4ddc96f1147ccf85ceddf59d66765884940d97bf44bfbad07a9e473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_10ca08c41ba1073c7f73ce5e758ea810a4698cdb0b337ab36ff6ee024f0ac813->leave($__internal_10ca08c41ba1073c7f73ce5e758ea810a4698cdb0b337ab36ff6ee024f0ac813_prof);

        
        $__internal_baa41f0a4ddc96f1147ccf85ceddf59d66765884940d97bf44bfbad07a9e473a->leave($__internal_baa41f0a4ddc96f1147ccf85ceddf59d66765884940d97bf44bfbad07a9e473a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
