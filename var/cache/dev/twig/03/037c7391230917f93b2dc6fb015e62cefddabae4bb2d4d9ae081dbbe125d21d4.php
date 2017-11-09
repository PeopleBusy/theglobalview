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
        $__internal_8084f88bef9c7dbbcad15a830878305d83789b0f5fc75e814734af7f7925450a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8084f88bef9c7dbbcad15a830878305d83789b0f5fc75e814734af7f7925450a->enter($__internal_8084f88bef9c7dbbcad15a830878305d83789b0f5fc75e814734af7f7925450a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8a49da523843d0626256c207a809fc7c52587d8085c81c227dd280823be0e415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a49da523843d0626256c207a809fc7c52587d8085c81c227dd280823be0e415->enter($__internal_8a49da523843d0626256c207a809fc7c52587d8085c81c227dd280823be0e415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8084f88bef9c7dbbcad15a830878305d83789b0f5fc75e814734af7f7925450a->leave($__internal_8084f88bef9c7dbbcad15a830878305d83789b0f5fc75e814734af7f7925450a_prof);

        
        $__internal_8a49da523843d0626256c207a809fc7c52587d8085c81c227dd280823be0e415->leave($__internal_8a49da523843d0626256c207a809fc7c52587d8085c81c227dd280823be0e415_prof);

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
