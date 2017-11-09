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
        $__internal_15465d752fdc7d1fb70a4ed8a48c9a82a940b311ca21e830dd658a2770303bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15465d752fdc7d1fb70a4ed8a48c9a82a940b311ca21e830dd658a2770303bb4->enter($__internal_15465d752fdc7d1fb70a4ed8a48c9a82a940b311ca21e830dd658a2770303bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_de398affbfaa60e9065a83849f208a74c63cd0a6b3a508f8525e6092b12f5392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de398affbfaa60e9065a83849f208a74c63cd0a6b3a508f8525e6092b12f5392->enter($__internal_de398affbfaa60e9065a83849f208a74c63cd0a6b3a508f8525e6092b12f5392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_15465d752fdc7d1fb70a4ed8a48c9a82a940b311ca21e830dd658a2770303bb4->leave($__internal_15465d752fdc7d1fb70a4ed8a48c9a82a940b311ca21e830dd658a2770303bb4_prof);

        
        $__internal_de398affbfaa60e9065a83849f208a74c63cd0a6b3a508f8525e6092b12f5392->leave($__internal_de398affbfaa60e9065a83849f208a74c63cd0a6b3a508f8525e6092b12f5392_prof);

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
