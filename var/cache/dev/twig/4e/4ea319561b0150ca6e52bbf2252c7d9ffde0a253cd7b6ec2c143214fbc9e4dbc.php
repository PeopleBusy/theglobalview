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
        $__internal_9d2218bcb4117a2fa0f6dc0527e2d545e5148cb9c6801f742024cab75044bafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2218bcb4117a2fa0f6dc0527e2d545e5148cb9c6801f742024cab75044bafd->enter($__internal_9d2218bcb4117a2fa0f6dc0527e2d545e5148cb9c6801f742024cab75044bafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_59948db6d86d643737f9b7720b6bfd16e14a5dd7e2a4ff4c5ec583e50f1a69b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59948db6d86d643737f9b7720b6bfd16e14a5dd7e2a4ff4c5ec583e50f1a69b3->enter($__internal_59948db6d86d643737f9b7720b6bfd16e14a5dd7e2a4ff4c5ec583e50f1a69b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9d2218bcb4117a2fa0f6dc0527e2d545e5148cb9c6801f742024cab75044bafd->leave($__internal_9d2218bcb4117a2fa0f6dc0527e2d545e5148cb9c6801f742024cab75044bafd_prof);

        
        $__internal_59948db6d86d643737f9b7720b6bfd16e14a5dd7e2a4ff4c5ec583e50f1a69b3->leave($__internal_59948db6d86d643737f9b7720b6bfd16e14a5dd7e2a4ff4c5ec583e50f1a69b3_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
