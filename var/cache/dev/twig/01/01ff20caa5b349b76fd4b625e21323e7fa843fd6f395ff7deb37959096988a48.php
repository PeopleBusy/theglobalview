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
        $__internal_cf9c83579fb94ae977b40b26065296f66523a71100644aa2290f5cff53185c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9c83579fb94ae977b40b26065296f66523a71100644aa2290f5cff53185c02->enter($__internal_cf9c83579fb94ae977b40b26065296f66523a71100644aa2290f5cff53185c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_38ce3fa89596bb7ad1a615f9d30b08884500d9a5df6db50eb860dd779c96a6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ce3fa89596bb7ad1a615f9d30b08884500d9a5df6db50eb860dd779c96a6d1->enter($__internal_38ce3fa89596bb7ad1a615f9d30b08884500d9a5df6db50eb860dd779c96a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cf9c83579fb94ae977b40b26065296f66523a71100644aa2290f5cff53185c02->leave($__internal_cf9c83579fb94ae977b40b26065296f66523a71100644aa2290f5cff53185c02_prof);

        
        $__internal_38ce3fa89596bb7ad1a615f9d30b08884500d9a5df6db50eb860dd779c96a6d1->leave($__internal_38ce3fa89596bb7ad1a615f9d30b08884500d9a5df6db50eb860dd779c96a6d1_prof);

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
