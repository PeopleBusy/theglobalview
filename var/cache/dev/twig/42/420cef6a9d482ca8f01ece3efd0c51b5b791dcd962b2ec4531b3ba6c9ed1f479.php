<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_44d5da34d2386384644922cf9bbacddb693e7aff74f9b1ae483bf11410bc13ec extends Twig_Template
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
        $__internal_5c1a0e2d6007cbf4b963fb58e39dbd28e6778172d109d0bbdc0968bf29d4499d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1a0e2d6007cbf4b963fb58e39dbd28e6778172d109d0bbdc0968bf29d4499d->enter($__internal_5c1a0e2d6007cbf4b963fb58e39dbd28e6778172d109d0bbdc0968bf29d4499d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_26ae590ca3a2cef2b8145e8a4bfa42d7fbef7f5210a4f8bf997e0d545f5fd5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ae590ca3a2cef2b8145e8a4bfa42d7fbef7f5210a4f8bf997e0d545f5fd5ff->enter($__internal_26ae590ca3a2cef2b8145e8a4bfa42d7fbef7f5210a4f8bf997e0d545f5fd5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5c1a0e2d6007cbf4b963fb58e39dbd28e6778172d109d0bbdc0968bf29d4499d->leave($__internal_5c1a0e2d6007cbf4b963fb58e39dbd28e6778172d109d0bbdc0968bf29d4499d_prof);

        
        $__internal_26ae590ca3a2cef2b8145e8a4bfa42d7fbef7f5210a4f8bf997e0d545f5fd5ff->leave($__internal_26ae590ca3a2cef2b8145e8a4bfa42d7fbef7f5210a4f8bf997e0d545f5fd5ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
