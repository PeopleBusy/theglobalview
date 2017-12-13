<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e830937b158003ba1b6551d5a05ae7d4969a000906d620bc96bb35e8e2bb1f33 extends Twig_Template
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
        $__internal_f1020858516c2ddd592913d6b3c67f299d6b935b1c326e35205e603c43cec18d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1020858516c2ddd592913d6b3c67f299d6b935b1c326e35205e603c43cec18d->enter($__internal_f1020858516c2ddd592913d6b3c67f299d6b935b1c326e35205e603c43cec18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a8d48b292fdb1c1dd9c2433dde991f0302ac6f643c69bdb4c95c5cfeb007c71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d48b292fdb1c1dd9c2433dde991f0302ac6f643c69bdb4c95c5cfeb007c71c->enter($__internal_a8d48b292fdb1c1dd9c2433dde991f0302ac6f643c69bdb4c95c5cfeb007c71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f1020858516c2ddd592913d6b3c67f299d6b935b1c326e35205e603c43cec18d->leave($__internal_f1020858516c2ddd592913d6b3c67f299d6b935b1c326e35205e603c43cec18d_prof);

        
        $__internal_a8d48b292fdb1c1dd9c2433dde991f0302ac6f643c69bdb4c95c5cfeb007c71c->leave($__internal_a8d48b292fdb1c1dd9c2433dde991f0302ac6f643c69bdb4c95c5cfeb007c71c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
