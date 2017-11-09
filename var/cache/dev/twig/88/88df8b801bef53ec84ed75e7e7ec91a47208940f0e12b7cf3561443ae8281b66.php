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
        $__internal_5e8d2c9b23f070f2a93f47c26bccb8c32f5f8ea89e266250ec1e124139c48911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8d2c9b23f070f2a93f47c26bccb8c32f5f8ea89e266250ec1e124139c48911->enter($__internal_5e8d2c9b23f070f2a93f47c26bccb8c32f5f8ea89e266250ec1e124139c48911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_45de16467d29c0dc92849b4f2f456a4041a7a28c9183d92542a602291952fa42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45de16467d29c0dc92849b4f2f456a4041a7a28c9183d92542a602291952fa42->enter($__internal_45de16467d29c0dc92849b4f2f456a4041a7a28c9183d92542a602291952fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5e8d2c9b23f070f2a93f47c26bccb8c32f5f8ea89e266250ec1e124139c48911->leave($__internal_5e8d2c9b23f070f2a93f47c26bccb8c32f5f8ea89e266250ec1e124139c48911_prof);

        
        $__internal_45de16467d29c0dc92849b4f2f456a4041a7a28c9183d92542a602291952fa42->leave($__internal_45de16467d29c0dc92849b4f2f456a4041a7a28c9183d92542a602291952fa42_prof);

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
