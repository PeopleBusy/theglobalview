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
        $__internal_8ff9075d012cb368713490da11ad37ec87ac8f6a12d11de71346f65f4c89b8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff9075d012cb368713490da11ad37ec87ac8f6a12d11de71346f65f4c89b8e4->enter($__internal_8ff9075d012cb368713490da11ad37ec87ac8f6a12d11de71346f65f4c89b8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_63b4f1289feee0e6b1e47a92c49b257819dad0f84d31da2b8210fef6291e096b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b4f1289feee0e6b1e47a92c49b257819dad0f84d31da2b8210fef6291e096b->enter($__internal_63b4f1289feee0e6b1e47a92c49b257819dad0f84d31da2b8210fef6291e096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8ff9075d012cb368713490da11ad37ec87ac8f6a12d11de71346f65f4c89b8e4->leave($__internal_8ff9075d012cb368713490da11ad37ec87ac8f6a12d11de71346f65f4c89b8e4_prof);

        
        $__internal_63b4f1289feee0e6b1e47a92c49b257819dad0f84d31da2b8210fef6291e096b->leave($__internal_63b4f1289feee0e6b1e47a92c49b257819dad0f84d31da2b8210fef6291e096b_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
