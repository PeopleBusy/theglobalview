<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4b111d021ed83cca877b45db787a66bcbbe3e5d57b032e913aaedce511fbf82 extends Twig_Template
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
        $__internal_d118769fe57f2deb323f48404f9c86c68d45026e253ed4a45115d7a6dc8eecbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d118769fe57f2deb323f48404f9c86c68d45026e253ed4a45115d7a6dc8eecbe->enter($__internal_d118769fe57f2deb323f48404f9c86c68d45026e253ed4a45115d7a6dc8eecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e4ab63ea9424ba443cbb01a59fb2a55fdd963a1f104b019c0404f8e8a2509214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ab63ea9424ba443cbb01a59fb2a55fdd963a1f104b019c0404f8e8a2509214->enter($__internal_e4ab63ea9424ba443cbb01a59fb2a55fdd963a1f104b019c0404f8e8a2509214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d118769fe57f2deb323f48404f9c86c68d45026e253ed4a45115d7a6dc8eecbe->leave($__internal_d118769fe57f2deb323f48404f9c86c68d45026e253ed4a45115d7a6dc8eecbe_prof);

        
        $__internal_e4ab63ea9424ba443cbb01a59fb2a55fdd963a1f104b019c0404f8e8a2509214->leave($__internal_e4ab63ea9424ba443cbb01a59fb2a55fdd963a1f104b019c0404f8e8a2509214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
