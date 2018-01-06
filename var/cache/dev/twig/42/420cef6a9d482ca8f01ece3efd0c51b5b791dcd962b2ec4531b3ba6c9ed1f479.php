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
        $__internal_f4e98a23800b6fd1416d7e949072e2518cd5e5fbddd33183e603aff420d4dafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e98a23800b6fd1416d7e949072e2518cd5e5fbddd33183e603aff420d4dafb->enter($__internal_f4e98a23800b6fd1416d7e949072e2518cd5e5fbddd33183e603aff420d4dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3745a2ead0c8f220f3474f8a52bf1feb1e9857ea078dcbf6e45d0aa06c88e452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3745a2ead0c8f220f3474f8a52bf1feb1e9857ea078dcbf6e45d0aa06c88e452->enter($__internal_3745a2ead0c8f220f3474f8a52bf1feb1e9857ea078dcbf6e45d0aa06c88e452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f4e98a23800b6fd1416d7e949072e2518cd5e5fbddd33183e603aff420d4dafb->leave($__internal_f4e98a23800b6fd1416d7e949072e2518cd5e5fbddd33183e603aff420d4dafb_prof);

        
        $__internal_3745a2ead0c8f220f3474f8a52bf1feb1e9857ea078dcbf6e45d0aa06c88e452->leave($__internal_3745a2ead0c8f220f3474f8a52bf1feb1e9857ea078dcbf6e45d0aa06c88e452_prof);

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
