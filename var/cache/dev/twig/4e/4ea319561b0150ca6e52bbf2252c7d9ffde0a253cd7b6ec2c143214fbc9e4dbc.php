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
        $__internal_07056f4f006be062de192dd57e37d500717c8b94c1b8c23e35ba9e59e75f0d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07056f4f006be062de192dd57e37d500717c8b94c1b8c23e35ba9e59e75f0d2d->enter($__internal_07056f4f006be062de192dd57e37d500717c8b94c1b8c23e35ba9e59e75f0d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3c29b1b543c5d73a1fb9fe252ce3f14fc71ef35404aad1c97bbc02095f88c1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c29b1b543c5d73a1fb9fe252ce3f14fc71ef35404aad1c97bbc02095f88c1f8->enter($__internal_3c29b1b543c5d73a1fb9fe252ce3f14fc71ef35404aad1c97bbc02095f88c1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_07056f4f006be062de192dd57e37d500717c8b94c1b8c23e35ba9e59e75f0d2d->leave($__internal_07056f4f006be062de192dd57e37d500717c8b94c1b8c23e35ba9e59e75f0d2d_prof);

        
        $__internal_3c29b1b543c5d73a1fb9fe252ce3f14fc71ef35404aad1c97bbc02095f88c1f8->leave($__internal_3c29b1b543c5d73a1fb9fe252ce3f14fc71ef35404aad1c97bbc02095f88c1f8_prof);

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
