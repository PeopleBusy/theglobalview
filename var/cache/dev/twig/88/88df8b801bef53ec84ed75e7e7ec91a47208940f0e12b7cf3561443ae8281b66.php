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
        $__internal_da9f53837bf6291b77baec0ce4a12103e79fff1d9a564a5ab55ae92da18ecfdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9f53837bf6291b77baec0ce4a12103e79fff1d9a564a5ab55ae92da18ecfdf->enter($__internal_da9f53837bf6291b77baec0ce4a12103e79fff1d9a564a5ab55ae92da18ecfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e5719a7692357484c93b882b7dc8425a2b011acf5d3b9c1a90eba57a8ffd2269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5719a7692357484c93b882b7dc8425a2b011acf5d3b9c1a90eba57a8ffd2269->enter($__internal_e5719a7692357484c93b882b7dc8425a2b011acf5d3b9c1a90eba57a8ffd2269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_da9f53837bf6291b77baec0ce4a12103e79fff1d9a564a5ab55ae92da18ecfdf->leave($__internal_da9f53837bf6291b77baec0ce4a12103e79fff1d9a564a5ab55ae92da18ecfdf_prof);

        
        $__internal_e5719a7692357484c93b882b7dc8425a2b011acf5d3b9c1a90eba57a8ffd2269->leave($__internal_e5719a7692357484c93b882b7dc8425a2b011acf5d3b9c1a90eba57a8ffd2269_prof);

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
