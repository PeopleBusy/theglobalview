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
        $__internal_3cae79014c73ba818ffb293927c51603779fe3ef5e3284be315d25f6265e5566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cae79014c73ba818ffb293927c51603779fe3ef5e3284be315d25f6265e5566->enter($__internal_3cae79014c73ba818ffb293927c51603779fe3ef5e3284be315d25f6265e5566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_22b3527033fa663dd319ec44578899258bf40ebc5c56187bf8f48e7268f87532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b3527033fa663dd319ec44578899258bf40ebc5c56187bf8f48e7268f87532->enter($__internal_22b3527033fa663dd319ec44578899258bf40ebc5c56187bf8f48e7268f87532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3cae79014c73ba818ffb293927c51603779fe3ef5e3284be315d25f6265e5566->leave($__internal_3cae79014c73ba818ffb293927c51603779fe3ef5e3284be315d25f6265e5566_prof);

        
        $__internal_22b3527033fa663dd319ec44578899258bf40ebc5c56187bf8f48e7268f87532->leave($__internal_22b3527033fa663dd319ec44578899258bf40ebc5c56187bf8f48e7268f87532_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
