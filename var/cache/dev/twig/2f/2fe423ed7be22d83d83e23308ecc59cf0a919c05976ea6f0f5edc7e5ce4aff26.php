<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4d1d11a302f4ecacd550294730771c2d84d5eee4cb9a8fc475bd4832043d4b96 extends Twig_Template
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
        $__internal_1a94b3c400156d7341c5ebb1873728f086aa92f6cd112538275975832daf2001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a94b3c400156d7341c5ebb1873728f086aa92f6cd112538275975832daf2001->enter($__internal_1a94b3c400156d7341c5ebb1873728f086aa92f6cd112538275975832daf2001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_74e14c0ba9e703dbcd94c5d8d55c8a0192025f826411d03f04a52541fc208ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e14c0ba9e703dbcd94c5d8d55c8a0192025f826411d03f04a52541fc208ff5->enter($__internal_74e14c0ba9e703dbcd94c5d8d55c8a0192025f826411d03f04a52541fc208ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1a94b3c400156d7341c5ebb1873728f086aa92f6cd112538275975832daf2001->leave($__internal_1a94b3c400156d7341c5ebb1873728f086aa92f6cd112538275975832daf2001_prof);

        
        $__internal_74e14c0ba9e703dbcd94c5d8d55c8a0192025f826411d03f04a52541fc208ff5->leave($__internal_74e14c0ba9e703dbcd94c5d8d55c8a0192025f826411d03f04a52541fc208ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
