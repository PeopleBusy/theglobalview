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
        $__internal_4a8540c0309de424c6e7e1fde7ff3bffecd5194e8303a3150075ad60e17579d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8540c0309de424c6e7e1fde7ff3bffecd5194e8303a3150075ad60e17579d7->enter($__internal_4a8540c0309de424c6e7e1fde7ff3bffecd5194e8303a3150075ad60e17579d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1c2ea21fbb734d1b215536b07fde33ccc9f514ea97cb7b015a310ea3894befe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2ea21fbb734d1b215536b07fde33ccc9f514ea97cb7b015a310ea3894befe0->enter($__internal_1c2ea21fbb734d1b215536b07fde33ccc9f514ea97cb7b015a310ea3894befe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4a8540c0309de424c6e7e1fde7ff3bffecd5194e8303a3150075ad60e17579d7->leave($__internal_4a8540c0309de424c6e7e1fde7ff3bffecd5194e8303a3150075ad60e17579d7_prof);

        
        $__internal_1c2ea21fbb734d1b215536b07fde33ccc9f514ea97cb7b015a310ea3894befe0->leave($__internal_1c2ea21fbb734d1b215536b07fde33ccc9f514ea97cb7b015a310ea3894befe0_prof);

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
