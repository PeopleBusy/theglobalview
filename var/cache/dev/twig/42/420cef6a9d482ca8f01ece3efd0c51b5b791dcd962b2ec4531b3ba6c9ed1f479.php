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
        $__internal_77aeb40c7f457bed5062e12f2db4a551f25a414ba57f06b352ecc9f01b2df4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77aeb40c7f457bed5062e12f2db4a551f25a414ba57f06b352ecc9f01b2df4e7->enter($__internal_77aeb40c7f457bed5062e12f2db4a551f25a414ba57f06b352ecc9f01b2df4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c893798b424c9c9f88d2bd0a73f5f857d2b8be5ed2bc9369423ddab88edb8752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c893798b424c9c9f88d2bd0a73f5f857d2b8be5ed2bc9369423ddab88edb8752->enter($__internal_c893798b424c9c9f88d2bd0a73f5f857d2b8be5ed2bc9369423ddab88edb8752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_77aeb40c7f457bed5062e12f2db4a551f25a414ba57f06b352ecc9f01b2df4e7->leave($__internal_77aeb40c7f457bed5062e12f2db4a551f25a414ba57f06b352ecc9f01b2df4e7_prof);

        
        $__internal_c893798b424c9c9f88d2bd0a73f5f857d2b8be5ed2bc9369423ddab88edb8752->leave($__internal_c893798b424c9c9f88d2bd0a73f5f857d2b8be5ed2bc9369423ddab88edb8752_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
