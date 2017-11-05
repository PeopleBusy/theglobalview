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
        $__internal_516a948d2ce0e079ddb316fca3a83034938c1ead113e8d06adc0c8cabf45793e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516a948d2ce0e079ddb316fca3a83034938c1ead113e8d06adc0c8cabf45793e->enter($__internal_516a948d2ce0e079ddb316fca3a83034938c1ead113e8d06adc0c8cabf45793e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b48a11238deeee369408fa5f9aecf0684207b8aae3712b244e6b6bca1aff0312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48a11238deeee369408fa5f9aecf0684207b8aae3712b244e6b6bca1aff0312->enter($__internal_b48a11238deeee369408fa5f9aecf0684207b8aae3712b244e6b6bca1aff0312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_516a948d2ce0e079ddb316fca3a83034938c1ead113e8d06adc0c8cabf45793e->leave($__internal_516a948d2ce0e079ddb316fca3a83034938c1ead113e8d06adc0c8cabf45793e_prof);

        
        $__internal_b48a11238deeee369408fa5f9aecf0684207b8aae3712b244e6b6bca1aff0312->leave($__internal_b48a11238deeee369408fa5f9aecf0684207b8aae3712b244e6b6bca1aff0312_prof);

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
