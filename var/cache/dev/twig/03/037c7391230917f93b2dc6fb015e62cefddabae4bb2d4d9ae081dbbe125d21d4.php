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
        $__internal_292587c01a7aff4ce366984f4ea069affc9050ca5be5c51c994f5b7130c30961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292587c01a7aff4ce366984f4ea069affc9050ca5be5c51c994f5b7130c30961->enter($__internal_292587c01a7aff4ce366984f4ea069affc9050ca5be5c51c994f5b7130c30961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_88733bb7e7a15bd4555d012859d0b3a111e27a6707464f80a6382b0955b7a800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88733bb7e7a15bd4555d012859d0b3a111e27a6707464f80a6382b0955b7a800->enter($__internal_88733bb7e7a15bd4555d012859d0b3a111e27a6707464f80a6382b0955b7a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_292587c01a7aff4ce366984f4ea069affc9050ca5be5c51c994f5b7130c30961->leave($__internal_292587c01a7aff4ce366984f4ea069affc9050ca5be5c51c994f5b7130c30961_prof);

        
        $__internal_88733bb7e7a15bd4555d012859d0b3a111e27a6707464f80a6382b0955b7a800->leave($__internal_88733bb7e7a15bd4555d012859d0b3a111e27a6707464f80a6382b0955b7a800_prof);

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
