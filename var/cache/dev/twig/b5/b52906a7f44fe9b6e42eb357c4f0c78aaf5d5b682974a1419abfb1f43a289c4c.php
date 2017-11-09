<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_67ac38eb8851a1e005ef822c718c50ff1a2b331fe31ad61881edc4b6ce05b9a8 extends Twig_Template
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
        $__internal_a157b248a882588cf911ad25f2c3d1b1819221fdad0be1b51a54f6b86e038cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a157b248a882588cf911ad25f2c3d1b1819221fdad0be1b51a54f6b86e038cce->enter($__internal_a157b248a882588cf911ad25f2c3d1b1819221fdad0be1b51a54f6b86e038cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6f9925064372ceeed77c4069de099b2556bd2c7b95f0ce4ed9d558abedf05900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9925064372ceeed77c4069de099b2556bd2c7b95f0ce4ed9d558abedf05900->enter($__internal_6f9925064372ceeed77c4069de099b2556bd2c7b95f0ce4ed9d558abedf05900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a157b248a882588cf911ad25f2c3d1b1819221fdad0be1b51a54f6b86e038cce->leave($__internal_a157b248a882588cf911ad25f2c3d1b1819221fdad0be1b51a54f6b86e038cce_prof);

        
        $__internal_6f9925064372ceeed77c4069de099b2556bd2c7b95f0ce4ed9d558abedf05900->leave($__internal_6f9925064372ceeed77c4069de099b2556bd2c7b95f0ce4ed9d558abedf05900_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
