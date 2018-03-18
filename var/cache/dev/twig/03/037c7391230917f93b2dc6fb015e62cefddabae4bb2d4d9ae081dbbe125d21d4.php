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
        $__internal_7cafceb5985c14f06795cec6456dbd8164d6cc5de287cd241fffded85b9c5f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cafceb5985c14f06795cec6456dbd8164d6cc5de287cd241fffded85b9c5f1d->enter($__internal_7cafceb5985c14f06795cec6456dbd8164d6cc5de287cd241fffded85b9c5f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_06c549e8f112fe9a0cf9ad130589825e01b552c8a5bbe24e5f2c545236aa683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c549e8f112fe9a0cf9ad130589825e01b552c8a5bbe24e5f2c545236aa683a->enter($__internal_06c549e8f112fe9a0cf9ad130589825e01b552c8a5bbe24e5f2c545236aa683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7cafceb5985c14f06795cec6456dbd8164d6cc5de287cd241fffded85b9c5f1d->leave($__internal_7cafceb5985c14f06795cec6456dbd8164d6cc5de287cd241fffded85b9c5f1d_prof);

        
        $__internal_06c549e8f112fe9a0cf9ad130589825e01b552c8a5bbe24e5f2c545236aa683a->leave($__internal_06c549e8f112fe9a0cf9ad130589825e01b552c8a5bbe24e5f2c545236aa683a_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
