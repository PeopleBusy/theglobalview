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
        $__internal_45d8eb3254ca7bf669404e947a00ccdc8b9194683c2e736b93f0471ab86f8395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d8eb3254ca7bf669404e947a00ccdc8b9194683c2e736b93f0471ab86f8395->enter($__internal_45d8eb3254ca7bf669404e947a00ccdc8b9194683c2e736b93f0471ab86f8395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_543fa2094d6792205e1a887e532ecb1e0588fe37d2722f302f543d971f8e45e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543fa2094d6792205e1a887e532ecb1e0588fe37d2722f302f543d971f8e45e4->enter($__internal_543fa2094d6792205e1a887e532ecb1e0588fe37d2722f302f543d971f8e45e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_45d8eb3254ca7bf669404e947a00ccdc8b9194683c2e736b93f0471ab86f8395->leave($__internal_45d8eb3254ca7bf669404e947a00ccdc8b9194683c2e736b93f0471ab86f8395_prof);

        
        $__internal_543fa2094d6792205e1a887e532ecb1e0588fe37d2722f302f543d971f8e45e4->leave($__internal_543fa2094d6792205e1a887e532ecb1e0588fe37d2722f302f543d971f8e45e4_prof);

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
