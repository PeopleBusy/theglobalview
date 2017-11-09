<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_445d360579886037163acb51777d1573b609e129b24cf7858b1fbc2af24e2785 extends Twig_Template
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
        $__internal_d2959da57284a6fe37e6b8f9f59e379659b40377d8cf84e717b6fcb19e8207b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2959da57284a6fe37e6b8f9f59e379659b40377d8cf84e717b6fcb19e8207b0->enter($__internal_d2959da57284a6fe37e6b8f9f59e379659b40377d8cf84e717b6fcb19e8207b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_03565e5ab3ba568d4cd214f32c8e407fda43de15ee28dc11f2737908363e265f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03565e5ab3ba568d4cd214f32c8e407fda43de15ee28dc11f2737908363e265f->enter($__internal_03565e5ab3ba568d4cd214f32c8e407fda43de15ee28dc11f2737908363e265f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d2959da57284a6fe37e6b8f9f59e379659b40377d8cf84e717b6fcb19e8207b0->leave($__internal_d2959da57284a6fe37e6b8f9f59e379659b40377d8cf84e717b6fcb19e8207b0_prof);

        
        $__internal_03565e5ab3ba568d4cd214f32c8e407fda43de15ee28dc11f2737908363e265f->leave($__internal_03565e5ab3ba568d4cd214f32c8e407fda43de15ee28dc11f2737908363e265f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
