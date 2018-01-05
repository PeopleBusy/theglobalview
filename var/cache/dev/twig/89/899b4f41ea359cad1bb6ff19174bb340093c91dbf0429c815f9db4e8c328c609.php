<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_219769d5c522f71a8b1adf7807920c0e58637a213593cf8fb05073530a997c02 extends Twig_Template
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
        $__internal_ee5c5c9034f94e0cd504626b0fd9a64a36e99a7e7fbc873cfdf0c82740e250ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5c5c9034f94e0cd504626b0fd9a64a36e99a7e7fbc873cfdf0c82740e250ce->enter($__internal_ee5c5c9034f94e0cd504626b0fd9a64a36e99a7e7fbc873cfdf0c82740e250ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d14c68df016398bb30a8da45637fb640a7bd6d9741a2ffcb0556ef22124eedc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14c68df016398bb30a8da45637fb640a7bd6d9741a2ffcb0556ef22124eedc5->enter($__internal_d14c68df016398bb30a8da45637fb640a7bd6d9741a2ffcb0556ef22124eedc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ee5c5c9034f94e0cd504626b0fd9a64a36e99a7e7fbc873cfdf0c82740e250ce->leave($__internal_ee5c5c9034f94e0cd504626b0fd9a64a36e99a7e7fbc873cfdf0c82740e250ce_prof);

        
        $__internal_d14c68df016398bb30a8da45637fb640a7bd6d9741a2ffcb0556ef22124eedc5->leave($__internal_d14c68df016398bb30a8da45637fb640a7bd6d9741a2ffcb0556ef22124eedc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
