<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a0c1f4add1c314d2eb65968091d183b16c6c2dfed7e790e2a48d341a146cf5fc extends Twig_Template
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
        $__internal_8937580f7272eefea045b2e48496d85c8d036e07b695fab4d2897cdc4fac94ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8937580f7272eefea045b2e48496d85c8d036e07b695fab4d2897cdc4fac94ee->enter($__internal_8937580f7272eefea045b2e48496d85c8d036e07b695fab4d2897cdc4fac94ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_40d1dfc790d5b9116e728e1faa75e073ef8ec53718fb8a98d1c7512748d8b0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d1dfc790d5b9116e728e1faa75e073ef8ec53718fb8a98d1c7512748d8b0a9->enter($__internal_40d1dfc790d5b9116e728e1faa75e073ef8ec53718fb8a98d1c7512748d8b0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8937580f7272eefea045b2e48496d85c8d036e07b695fab4d2897cdc4fac94ee->leave($__internal_8937580f7272eefea045b2e48496d85c8d036e07b695fab4d2897cdc4fac94ee_prof);

        
        $__internal_40d1dfc790d5b9116e728e1faa75e073ef8ec53718fb8a98d1c7512748d8b0a9->leave($__internal_40d1dfc790d5b9116e728e1faa75e073ef8ec53718fb8a98d1c7512748d8b0a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
