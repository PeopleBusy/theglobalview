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
        $__internal_f43dbc34e1a98ef6d5cc25dbaf9cdcc6882a5c13a916bcd8939aaf41c451294f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43dbc34e1a98ef6d5cc25dbaf9cdcc6882a5c13a916bcd8939aaf41c451294f->enter($__internal_f43dbc34e1a98ef6d5cc25dbaf9cdcc6882a5c13a916bcd8939aaf41c451294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4184082051f42c42dc73cd665581a4ef301122891d0df13a0f6da249e1961607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4184082051f42c42dc73cd665581a4ef301122891d0df13a0f6da249e1961607->enter($__internal_4184082051f42c42dc73cd665581a4ef301122891d0df13a0f6da249e1961607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f43dbc34e1a98ef6d5cc25dbaf9cdcc6882a5c13a916bcd8939aaf41c451294f->leave($__internal_f43dbc34e1a98ef6d5cc25dbaf9cdcc6882a5c13a916bcd8939aaf41c451294f_prof);

        
        $__internal_4184082051f42c42dc73cd665581a4ef301122891d0df13a0f6da249e1961607->leave($__internal_4184082051f42c42dc73cd665581a4ef301122891d0df13a0f6da249e1961607_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
