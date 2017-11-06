<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_68f23f8cdf0c6fd2c4f770126a0cb229a89959ef007c70f8ed4d687d9cb81ba1 extends Twig_Template
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
        $__internal_14885564ff3f0033fe27464f2affeb0ce5e17069e7ed656889d8b21e07307b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14885564ff3f0033fe27464f2affeb0ce5e17069e7ed656889d8b21e07307b31->enter($__internal_14885564ff3f0033fe27464f2affeb0ce5e17069e7ed656889d8b21e07307b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_89b929a34f62a354757d8c2627f4a7b1870434397563150b7fcf6d6b7c77ca64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b929a34f62a354757d8c2627f4a7b1870434397563150b7fcf6d6b7c77ca64->enter($__internal_89b929a34f62a354757d8c2627f4a7b1870434397563150b7fcf6d6b7c77ca64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_14885564ff3f0033fe27464f2affeb0ce5e17069e7ed656889d8b21e07307b31->leave($__internal_14885564ff3f0033fe27464f2affeb0ce5e17069e7ed656889d8b21e07307b31_prof);

        
        $__internal_89b929a34f62a354757d8c2627f4a7b1870434397563150b7fcf6d6b7c77ca64->leave($__internal_89b929a34f62a354757d8c2627f4a7b1870434397563150b7fcf6d6b7c77ca64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
