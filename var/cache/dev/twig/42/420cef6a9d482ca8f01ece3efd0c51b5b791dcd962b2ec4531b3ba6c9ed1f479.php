<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_44d5da34d2386384644922cf9bbacddb693e7aff74f9b1ae483bf11410bc13ec extends Twig_Template
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
        $__internal_1adb9b9814202090bb30775d1bc6ce1d1874a1c87ed2681e43bcc7e86021ab61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adb9b9814202090bb30775d1bc6ce1d1874a1c87ed2681e43bcc7e86021ab61->enter($__internal_1adb9b9814202090bb30775d1bc6ce1d1874a1c87ed2681e43bcc7e86021ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fb3cfb34ad704d1ab15397853346f0fa379afd14be70675788abe3ef7223dbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3cfb34ad704d1ab15397853346f0fa379afd14be70675788abe3ef7223dbbd->enter($__internal_fb3cfb34ad704d1ab15397853346f0fa379afd14be70675788abe3ef7223dbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1adb9b9814202090bb30775d1bc6ce1d1874a1c87ed2681e43bcc7e86021ab61->leave($__internal_1adb9b9814202090bb30775d1bc6ce1d1874a1c87ed2681e43bcc7e86021ab61_prof);

        
        $__internal_fb3cfb34ad704d1ab15397853346f0fa379afd14be70675788abe3ef7223dbbd->leave($__internal_fb3cfb34ad704d1ab15397853346f0fa379afd14be70675788abe3ef7223dbbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
