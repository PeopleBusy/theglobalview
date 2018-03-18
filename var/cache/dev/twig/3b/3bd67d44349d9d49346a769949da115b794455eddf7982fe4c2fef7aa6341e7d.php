<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4b111d021ed83cca877b45db787a66bcbbe3e5d57b032e913aaedce511fbf82 extends Twig_Template
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
        $__internal_90fcdc81e489ec9726a16f704ce2f33b2ebda6924fb2685b08fa7275b2020927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fcdc81e489ec9726a16f704ce2f33b2ebda6924fb2685b08fa7275b2020927->enter($__internal_90fcdc81e489ec9726a16f704ce2f33b2ebda6924fb2685b08fa7275b2020927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0c2f4e275784a2a4052bce7e3ca3157bb1670db822a932f30fde85b4c8887133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2f4e275784a2a4052bce7e3ca3157bb1670db822a932f30fde85b4c8887133->enter($__internal_0c2f4e275784a2a4052bce7e3ca3157bb1670db822a932f30fde85b4c8887133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_90fcdc81e489ec9726a16f704ce2f33b2ebda6924fb2685b08fa7275b2020927->leave($__internal_90fcdc81e489ec9726a16f704ce2f33b2ebda6924fb2685b08fa7275b2020927_prof);

        
        $__internal_0c2f4e275784a2a4052bce7e3ca3157bb1670db822a932f30fde85b4c8887133->leave($__internal_0c2f4e275784a2a4052bce7e3ca3157bb1670db822a932f30fde85b4c8887133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
