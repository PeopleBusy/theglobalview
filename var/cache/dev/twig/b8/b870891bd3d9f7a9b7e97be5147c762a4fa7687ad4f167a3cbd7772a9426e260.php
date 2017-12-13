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
        $__internal_53025d25976352b9625971ee612d6ed63977635338195c13e342760476952b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53025d25976352b9625971ee612d6ed63977635338195c13e342760476952b14->enter($__internal_53025d25976352b9625971ee612d6ed63977635338195c13e342760476952b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_631521b5dae2532f34ab1c557bb849cdcdcc8a2c234677b5856ba1fdb7017ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631521b5dae2532f34ab1c557bb849cdcdcc8a2c234677b5856ba1fdb7017ed7->enter($__internal_631521b5dae2532f34ab1c557bb849cdcdcc8a2c234677b5856ba1fdb7017ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_53025d25976352b9625971ee612d6ed63977635338195c13e342760476952b14->leave($__internal_53025d25976352b9625971ee612d6ed63977635338195c13e342760476952b14_prof);

        
        $__internal_631521b5dae2532f34ab1c557bb849cdcdcc8a2c234677b5856ba1fdb7017ed7->leave($__internal_631521b5dae2532f34ab1c557bb849cdcdcc8a2c234677b5856ba1fdb7017ed7_prof);

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
