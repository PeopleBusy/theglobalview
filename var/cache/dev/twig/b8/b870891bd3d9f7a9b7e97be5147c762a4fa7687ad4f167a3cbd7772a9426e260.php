<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9c47c638459f87212ddf3ff18079b16026b9cad96ad31f61cafda4b089d50dea extends Twig_Template
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
        $__internal_188cca54c978c66d993659fac56445511889a16663a5dfd8d11214ce468e310e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188cca54c978c66d993659fac56445511889a16663a5dfd8d11214ce468e310e->enter($__internal_188cca54c978c66d993659fac56445511889a16663a5dfd8d11214ce468e310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_344379fed90f63afed3bd53da7a64c038844b61bd87d405897a006d982108968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344379fed90f63afed3bd53da7a64c038844b61bd87d405897a006d982108968->enter($__internal_344379fed90f63afed3bd53da7a64c038844b61bd87d405897a006d982108968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_188cca54c978c66d993659fac56445511889a16663a5dfd8d11214ce468e310e->leave($__internal_188cca54c978c66d993659fac56445511889a16663a5dfd8d11214ce468e310e_prof);

        
        $__internal_344379fed90f63afed3bd53da7a64c038844b61bd87d405897a006d982108968->leave($__internal_344379fed90f63afed3bd53da7a64c038844b61bd87d405897a006d982108968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
