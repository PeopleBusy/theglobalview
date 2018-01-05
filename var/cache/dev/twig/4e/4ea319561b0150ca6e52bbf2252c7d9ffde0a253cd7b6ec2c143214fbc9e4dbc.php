<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9fbf29409e1fefa7fbd5e07c5e0b35735fcbcb2bcb8375624610845c20d6c676 extends Twig_Template
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
        $__internal_c7bb57affde9d4407304890e970102f60eb25f8dc1376459f45456ef0e344adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bb57affde9d4407304890e970102f60eb25f8dc1376459f45456ef0e344adf->enter($__internal_c7bb57affde9d4407304890e970102f60eb25f8dc1376459f45456ef0e344adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0c752e69473d60740448fdf9cffbac73f59abd0678214596ee1648b79f670d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c752e69473d60740448fdf9cffbac73f59abd0678214596ee1648b79f670d9a->enter($__internal_0c752e69473d60740448fdf9cffbac73f59abd0678214596ee1648b79f670d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c7bb57affde9d4407304890e970102f60eb25f8dc1376459f45456ef0e344adf->leave($__internal_c7bb57affde9d4407304890e970102f60eb25f8dc1376459f45456ef0e344adf_prof);

        
        $__internal_0c752e69473d60740448fdf9cffbac73f59abd0678214596ee1648b79f670d9a->leave($__internal_0c752e69473d60740448fdf9cffbac73f59abd0678214596ee1648b79f670d9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
