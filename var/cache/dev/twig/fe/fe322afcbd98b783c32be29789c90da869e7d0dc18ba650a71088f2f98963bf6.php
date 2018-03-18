<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_99b83d8a2d28556ca23c4e14eb99d51befd4f26d60900008afd3afeae201468d extends Twig_Template
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
        $__internal_863323539d9e2d6cd9caa9da38207cb1ff0295a0efe04cbc729b74beb60eaccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863323539d9e2d6cd9caa9da38207cb1ff0295a0efe04cbc729b74beb60eaccd->enter($__internal_863323539d9e2d6cd9caa9da38207cb1ff0295a0efe04cbc729b74beb60eaccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_70deaea69254f13d9a6da34c4e1b7ec2069f2c7409b89f764a4c09ec36102e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70deaea69254f13d9a6da34c4e1b7ec2069f2c7409b89f764a4c09ec36102e4d->enter($__internal_70deaea69254f13d9a6da34c4e1b7ec2069f2c7409b89f764a4c09ec36102e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_863323539d9e2d6cd9caa9da38207cb1ff0295a0efe04cbc729b74beb60eaccd->leave($__internal_863323539d9e2d6cd9caa9da38207cb1ff0295a0efe04cbc729b74beb60eaccd_prof);

        
        $__internal_70deaea69254f13d9a6da34c4e1b7ec2069f2c7409b89f764a4c09ec36102e4d->leave($__internal_70deaea69254f13d9a6da34c4e1b7ec2069f2c7409b89f764a4c09ec36102e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
