<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_efca0a0dfdf7562edb3926b8578c80fe5a6955488f21a924dafba193be2765e2 extends Twig_Template
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
        $__internal_0c47b8fa759291d508d446afd8847f3d46089cb3755472a63b29dbfc5888c47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c47b8fa759291d508d446afd8847f3d46089cb3755472a63b29dbfc5888c47b->enter($__internal_0c47b8fa759291d508d446afd8847f3d46089cb3755472a63b29dbfc5888c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d13b67abe2a459073d5dca5d5bdf3cf79729180bcb2dc3e6aa01783b792c4e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13b67abe2a459073d5dca5d5bdf3cf79729180bcb2dc3e6aa01783b792c4e3b->enter($__internal_d13b67abe2a459073d5dca5d5bdf3cf79729180bcb2dc3e6aa01783b792c4e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0c47b8fa759291d508d446afd8847f3d46089cb3755472a63b29dbfc5888c47b->leave($__internal_0c47b8fa759291d508d446afd8847f3d46089cb3755472a63b29dbfc5888c47b_prof);

        
        $__internal_d13b67abe2a459073d5dca5d5bdf3cf79729180bcb2dc3e6aa01783b792c4e3b->leave($__internal_d13b67abe2a459073d5dca5d5bdf3cf79729180bcb2dc3e6aa01783b792c4e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
