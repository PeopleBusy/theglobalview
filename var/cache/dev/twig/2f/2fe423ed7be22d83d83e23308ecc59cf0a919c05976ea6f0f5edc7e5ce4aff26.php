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
        $__internal_a7587771ba67be37c8bb41bfb93e621934d76f158a9a2f9a95d5c40918a1a6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7587771ba67be37c8bb41bfb93e621934d76f158a9a2f9a95d5c40918a1a6d2->enter($__internal_a7587771ba67be37c8bb41bfb93e621934d76f158a9a2f9a95d5c40918a1a6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8060a176e37341ba5dcb040a279c5f3df5e77834ac9a6a87806621fb5b379dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060a176e37341ba5dcb040a279c5f3df5e77834ac9a6a87806621fb5b379dc1->enter($__internal_8060a176e37341ba5dcb040a279c5f3df5e77834ac9a6a87806621fb5b379dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7587771ba67be37c8bb41bfb93e621934d76f158a9a2f9a95d5c40918a1a6d2->leave($__internal_a7587771ba67be37c8bb41bfb93e621934d76f158a9a2f9a95d5c40918a1a6d2_prof);

        
        $__internal_8060a176e37341ba5dcb040a279c5f3df5e77834ac9a6a87806621fb5b379dc1->leave($__internal_8060a176e37341ba5dcb040a279c5f3df5e77834ac9a6a87806621fb5b379dc1_prof);

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
