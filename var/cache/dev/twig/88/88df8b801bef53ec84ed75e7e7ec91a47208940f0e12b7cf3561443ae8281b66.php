<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9f41e76e53ea1187fce42bc221ccc8b2836ba09a1c26413c2756d99648af1bcc extends Twig_Template
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
        $__internal_81e15d4b0175664755fa54e98aec85d2c1f23cf9c3d509f1b647a0ff863dd2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e15d4b0175664755fa54e98aec85d2c1f23cf9c3d509f1b647a0ff863dd2bc->enter($__internal_81e15d4b0175664755fa54e98aec85d2c1f23cf9c3d509f1b647a0ff863dd2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8ac84965b85bcc00d25c017be3e2f0626c53485117dfc25a87fb929358608d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac84965b85bcc00d25c017be3e2f0626c53485117dfc25a87fb929358608d90->enter($__internal_8ac84965b85bcc00d25c017be3e2f0626c53485117dfc25a87fb929358608d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_81e15d4b0175664755fa54e98aec85d2c1f23cf9c3d509f1b647a0ff863dd2bc->leave($__internal_81e15d4b0175664755fa54e98aec85d2c1f23cf9c3d509f1b647a0ff863dd2bc_prof);

        
        $__internal_8ac84965b85bcc00d25c017be3e2f0626c53485117dfc25a87fb929358608d90->leave($__internal_8ac84965b85bcc00d25c017be3e2f0626c53485117dfc25a87fb929358608d90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
